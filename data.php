<?php
// echo "morning";
$data = $_REQUEST;
$data['result'] = 'perfect';
$data['method'] = $_SERVER['REQUEST_METHOD'];
echo json_encode( $data, JSON_PRETTY_PRINT );