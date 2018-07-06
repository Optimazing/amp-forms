<?php
if (!empty($_POST)) {
    header("access-control-allow-credentials:true");
    header("access-control-allow-headers:Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token");
    header("access-control-allow-methods:POST, GET");
    header("access-control-allow-origin:".$_SERVER['HTTP_ORIGIN']);
    header("access-control-expose-headers:AMP-Access-Control-Allow-Source-Origin");
    // change to represent your site's protocol, either http or https
    header("amp-access-control-allow-source-origin:https://".$_SERVER['HTTP_HOST']);
    header("Content-Type: application/json");
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $output = ['email' => $email, 'name' => $name];
    header("Content-Type: application/json");
    if ( strtolower($name) != 'test' ) {
        header('HTTP/1.1 400 Bad Request', true, 400);
    }
    echo json_encode($output);
}
?>
