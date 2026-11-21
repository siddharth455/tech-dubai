/**
 * Career Buddy College — UTM capture & lead-source tagging
 * ----------------------------------------------------------
 * Purpose:
 * 1. If a visitor arrives with real ad UTM params (utm_source, utm_medium,
 *    utm_campaign, utm_term, utm_content) — e.g. from a Google/Meta ad —
 *    those real values are kept and used.
 * 2. If a visitor arrives with NO utm params (direct visit, organic search,
 *    someone just typed the URL, etc.), the site auto-tags the visit with
 *    a fixed "this is Career Buddy College" source, so leads from this
 *    site are always identifiable in the Lead Manager instead of showing
 *    up blank/"Direct".
 * 3. The chosen params are written back into the visible URL (without a
 *    reload) via history.replaceState BEFORE the ee-form-widget script
 *    runs, so the widget's own UTM auto-capture picks them up. They are
 *    also cached in sessionStorage so that if a visitor lands on the
 *    homepage and then clicks through to the Admission page, the same
 *    attribution follows them across pages in that session.
 *
 * IMPORTANT: This file must be loaded in <head> (or otherwise BEFORE)
 * the ee-form-widget <script> tags on the page, so the URL is already
 * rewritten by the time the widget initializes.
 */
(function () {
  "use strict";

  var STORAGE_KEY = "cbc_utm_params";
  var UTM_KEYS = ["utm_source", "utm_medium", "utm_campaign", "utm_term", "utm_content"];

  // Fallback tag applied only when a visitor brings NO utm params at all.
  var WEBSITE_DEFAULTS = {
    utm_source: "careerbuddycollege",
    utm_medium: "website",
    utm_campaign: "direct-organic"
  };

  function readUtmFromSearch(search) {
    var params = {};
    try {
      var usp = new URLSearchParams(search);
      UTM_KEYS.forEach(function (key) {
        var val = usp.get(key);
        if (val) params[key] = val;
      });
    } catch (e) {
      /* URLSearchParams not supported / malformed query — ignore */
    }
    return params;
  }

  function readStored() {
    try {
      var raw = sessionStorage.getItem(STORAGE_KEY);
      return raw ? JSON.parse(raw) : {};
    } catch (e) {
      return {};
    }
  }

  function writeStored(params) {
    try {
      sessionStorage.setItem(STORAGE_KEY, JSON.stringify(params));
    } catch (e) {
      /* storage unavailable (private mode etc.) — safe to ignore */
    }
  }

  var incoming = readUtmFromSearch(window.location.search);
  var finalParams;

  if (Object.keys(incoming).length > 0) {
    // Real campaign traffic always wins and refreshes what we remember.
    finalParams = incoming;
    writeStored(finalParams);
  } else {
    var stored = readStored();
    finalParams = Object.keys(stored).length > 0 ? stored : WEBSITE_DEFAULTS;
    if (Object.keys(stored).length === 0) writeStored(finalParams);
  }

  // Rewrite the visible URL so the ee-form-widget (and anything else that
  // reads location.search) sees these utm params when it initializes.
  try {
    var usp = new URLSearchParams(window.location.search);
    UTM_KEYS.forEach(function (key) {
      if (finalParams[key]) usp.set(key, finalParams[key]);
    });
    var newSearch = usp.toString();
    var newUrl =
      window.location.pathname +
      (newSearch ? "?" + newSearch : "") +
      window.location.hash;
    var currentUrl = window.location.pathname + window.location.search + window.location.hash;
    if (newUrl !== currentUrl) {
      window.history.replaceState(null, "", newUrl);
    }
  } catch (e) {
    /* history API unavailable — utm values are still in window.cbcUtmParams */
  }

  // Exposed in case any form field ever needs to be filled manually.
  window.cbcUtmParams = finalParams;
})();
