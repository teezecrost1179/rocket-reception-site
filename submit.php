<?php
// Settings
$to = "hello@rocketsciencedesigns.com";
$subject = "New Inquiry via Rocket Agent Website";

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

// Build email body
$body = "You received a new message from Rocket Agent's contact form:\n\n";
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

// Headers
$headers = "From: Rocket Agent <no-reply@rocketsciencedesigns.com>\r\n";
$headers .= "Reply-To: {$safeReplyTo}\r\n";

// Send
if (mail($to, $subject, $body, $headers)) {
  http_response_code(200);
  echo "Thanks! I’ll get back to you shortly.";
} else {
  http_response_code(500);
  echo "Something went wrong. Please email me directly at hello@rocketsciencedesigns.com.";
}
?>
