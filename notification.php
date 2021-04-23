<?php
$data = file_get_contents('php://input');
error_log('Request: ' . json_encode($_GET) . ' ' . json_encode($_POST) . ' ' . $data);

http_response_code(200);
?>