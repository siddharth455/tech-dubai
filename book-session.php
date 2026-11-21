<?php
/**
 * book-session.php
 * Handles POST submissions from the "Book 1:1 Live Session" form on mentors.php.
 * Always returns JSON — the frontend fetch() call reads result.success / result.message.
 *
 * Setup:
 *  1. Run mentors-schema.sql against your database first.
 *  2. Fill in the DB credentials below (better: load from environment variables /
 *     a .env file outside the web root instead of hardcoding them).
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

// Only accept POST — reject everything else early.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ---- DB config — move these to environment variables in production ----
const DB_HOST = 'localhost';
const DB_NAME = 'career_buddy_college';
const DB_USER = 'your_db_user';
const DB_PASS = 'your_db_password';

function respond(bool $success, string $message, int $httpCode = 200): void
{
    http_response_code($httpCode);
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

// ---- Honeypot check: real users never fill this hidden field, bots often do ----
if (!empty($_POST['website'])) {
    // Silently pretend success so bots don't learn the honeypot was tripped.
    respond(true, 'Session requested! We will confirm by email shortly.');
}

// ---- Collect + sanitize input ----
$fullName    = trim((string) filter_input(INPUT_POST, 'full_name', FILTER_UNSAFE_RAW));
$email       = trim((string) filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
$phone       = trim((string) filter_input(INPUT_POST, 'phone', FILTER_UNSAFE_RAW));
$mentorId    = trim((string) filter_input(INPUT_POST, 'mentor_id', FILTER_UNSAFE_RAW));
$preferredDate = trim((string) filter_input(INPUT_POST, 'preferred_date', FILTER_UNSAFE_RAW));
$timeSlot    = trim((string) filter_input(INPUT_POST, 'time_slot', FILTER_UNSAFE_RAW));
$message     = trim((string) filter_input(INPUT_POST, 'message', FILTER_UNSAFE_RAW));

$fullName = strip_tags($fullName);
$phone    = strip_tags($phone);
$message  = strip_tags($message);

// ---- Validation ----
$errors = [];

if ($fullName === '' || mb_strlen($fullName) < 2) {
    $errors[] = 'Please enter your full name.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($phone === '' || !preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    $errors[] = 'Please enter a valid phone number.';
}

if ($mentorId === '') {
    $errors[] = 'Please select a mentor.';
}

$dateObj = DateTime::createFromFormat('Y-m-d', $preferredDate);
$today = new DateTime('today');
if (!$dateObj || $dateObj < $today) {
    $errors[] = 'Please select a valid date (today or later).';
}

$allowedSlots = ['morning', 'afternoon', 'evening'];
if (!in_array($timeSlot, $allowedSlots, true)) {
    $errors[] = 'Please select a valid time slot.';
}

if (mb_strlen($message) > 1000) {
    $errors[] = 'Message is too long (max 1000 characters).';
}

if (!empty($errors)) {
    respond(false, implode(' ', $errors), 422);
}

// ---- Save to database ----
try {
    $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );

    $stmt = $pdo->prepare(
        'INSERT INTO mentor_bookings
            (mentor_id, full_name, email, phone, preferred_date, time_slot, message, status, created_at)
         VALUES
            (:mentor_id, :full_name, :email, :phone, :preferred_date, :time_slot, :message, "pending", NOW())'
    );

    $stmt->execute([
        ':mentor_id'      => $mentorId,
        ':full_name'      => $fullName,
        ':email'          => $email,
        ':phone'          => $phone,
        ':preferred_date' => $preferredDate,
        ':time_slot'      => $timeSlot,
        ':message'        => $message,
    ]);

    // Optional: send a confirmation email here, e.g. with PHPMailer:
    //   $mail = new PHPMailer\PHPMailer\PHPMailer();
    //   $mail->addAddress($email);
    //   $mail->Subject = 'Your 1:1 mentor session request';
    //   $mail->Body = "Hi $fullName, we've received your request...";
    //   $mail->send();
    // PHP's built-in mail() is unreliable for deliverability — use PHPMailer + SMTP
    // or a transactional email service (SendGrid, Postmark, etc.) instead.

    respond(true, 'Session requested! We will confirm by email within 24 hours.');
} catch (PDOException $e) {
    // Never leak $e->getMessage() to the client — log it server-side instead.
    error_log('[book-session.php] DB error: ' . $e->getMessage());
    respond(false, 'Something went wrong on our end. Please try again shortly.', 500);
}