<?php
$user = $_POST['user']; 
$upload_dir = 'images/' . $user;

mkdir( $upload_dir );

$img = $_POST['hidden_data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . '/00000.jpg';
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
?>
