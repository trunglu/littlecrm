<?php

$link = mysqli_connect('localhost', 'wavesoft_db', 'wavesoft@#2017') or die("Không thể kết nối đến hosting");
mysqli_select_db($link,'wavesoft_db') or die(mysqli_errno($link));
ini_set( 'upload_max_size' , '100M' );
ini_set( 'post_max_size', '150M');
ini_set('max_execution_time', 300);
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>

