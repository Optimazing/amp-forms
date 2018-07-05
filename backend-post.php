<?php
if (!empty($_POST)) {
    header("access-control-allow-credentials:true");
    header("access-control-allow-headers:Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token");
    header("access-control-allow-methods:POST, GET, OPTIONS");
    header("access-control-allow-origin:".$_SERVER['HTTP_ORIGIN']);
    header("access-control-expose-headers:AMP-Access-Control-Allow-Source-Origin");
    // change to represent your site's protocol, either http or https
    header("amp-access-control-allow-source-origin:https://".$_SERVER['HTTP_HOST']);
    header("Content-Type: application/json");
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $output = ['email' => $email];
    header("Content-Type: application/json");
    echo json_encode($output);
}
?>