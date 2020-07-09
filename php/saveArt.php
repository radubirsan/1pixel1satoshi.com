<?php
$post_data = $_POST['pixel_array'];


$message = "wrong answer";
echo "<script type='text/javascript'>alert('$post_data');</script>";

if (!empty($post_data)) {
    $file = fopen('data_save.json', 'w+');
    fwrite($file, json_encode($post_data));
    fclose($file);
    echo json_encode('success');
} 

?>