<?php
error_log('Request: ' . json_encode($_GET) . ' ' . json_encode($_POST));

http_response_code(200);
?>