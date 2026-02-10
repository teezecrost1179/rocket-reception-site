<?php
require_once __DIR__ . '/config.php';
// Settings
$to = "hello@rocketsciencedesigns.com";
$subject = "New Inquiry via Rocket Reception Website";
$postmarkToken = $postmarkToken ?? "";
$fromEmail = $postmarkFrom ?? "hello@rocketsciencedesigns.com";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo "Method not allowed.";
  exit;
}

// Helper: basic sanitize
function clean_text($value) {
  return strip_tags(trim((string)$value));
}

// Grab fields
$name     = isset($_POST['name']) ? clean_text($_POST['name']) : '';
$emailRaw = isset($_POST['email']) ? trim((string)$_POST['email']) : '';
$email    = filter_var($emailRaw, FILTER_VALIDATE_EMAIL);

$topic     = isset($_POST['topic']) ? clean_text($_POST['topic']) : '';
$timeframe = isset($_POST['timeframe']) ? clean_text($_POST['timeframe']) : '';
$message   = isset($_POST['message']) ? clean_text($_POST['message']) : '';
$source    = isset($_POST['source']) ? clean_text($_POST['source']) : '';

// Optional honeypot (add a hidden field named "website" in your form)
$honeypot = isset($_POST['website']) ? clean_text($_POST['website']) : '';
if (!empty($honeypot)) {
  http_response_code(200);
  echo "Thanks! I'll get back to you shortly.";
  exit;
}

// Required fields (match your current form)
if (!$name || !$email || !$message) {
  http_response_code(400);
  echo "Please include your name, a valid email, and a short message.";
  exit;
}

// Prevent header injection
$safeReplyTo = str_replace(array("\r", "\n"), '', $email);

if (!$postmarkToken) {
  http_response_code(500);
  echo "Email service is not configured. Please email me directly at hello@rocketsciencedesigns.com.";
  exit;
}

// Build email body
$body = "You received a new message from Rocket Reception's contact form:\n\n";
$body .= "Name: {$name}\n";
$body .= "Email: {$email}\n";

if ($topic !== '') {
  $body .= "What they want help with: {$topic}\n";
}
if ($timeframe !== '') {
  $body .= "Timeframe: {$timeframe}\n";
}
if ($source !== '') {
  $body .= "Source: {$source}\n";
}

$body .= "\nMessage:\n{$message}\n";

// Send via Postmark
$payload = array(
  "From" => $fromEmail,
  "To" => $to,
  "Subject" => $subject,
  "TextBody" => $body,
  "ReplyTo" => $safeReplyTo
);

$ch = curl_init("https://api.postmarkapp.com/email");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Accept: application/json",
  "Content-Type: application/json",
  "X-Postmark-Server-Token: " . $postmarkToken
));
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

$resp = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr = curl_error($ch);
curl_close($ch);

if ($resp === false) {
  http_response_code(500);
  echo "Something went wrong. Please email me directly at hello@rocketsciencedesigns.com.";
  exit;
}

if ($httpCode >= 200 && $httpCode < 300) {
  http_response_code(200);
  echo "Thanks! I???ll get back to you shortly.";
} else {
  http_response_code(500);
  echo "Something went wrong. Please email me directly at hello@rocketsciencedesigns.com.";
}
?>
