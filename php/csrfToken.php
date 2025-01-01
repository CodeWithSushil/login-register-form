<?PHP
function generateCSRFToken()
{
  if (session_status() == PHP_SESSION_NONE)
  {
    session_start(); // Start the session if it's not already started 
  }
  
  // Generate a random token and store it in the session 
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generates a 64-character token 
  return $_SESSION['csrf_token'];
}
$tokens = generateCSRFToken();

function verifyCSRFToken($token) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // Check if the token matches the one stored in the session
    if (isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token)) {
        return true;  // Token is valid
    } else {
        return false;  // Invalid token
    }
}

verifyCSRFToken($tokens);
$hash=[];
$hash['token']=bin2hex(random_bytes(32));

if(hash_equals($hash['token'], $hash['token']){
  echo "okkk";
} else {
  echo "badddd";
}
