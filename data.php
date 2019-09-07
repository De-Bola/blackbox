<?php    
$file_pointer = '../blackbox/output.txt';
if (file_exists($file_pointer)) {
    $file_pointer = fopen('output.txt', 'a');
}else {
    $file_pointer = fopen('output.txt', 'w');
}

if(isset($_POST['submit_btn']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

$data = $name "\n" $email "\n" $title "\n" $message;

$file_pointer = fopen('output.txt', 'a');
if(fwrite($file_pointer, $data))
{
    echo 'saved!';
}
fclose($file_pointer);
}
?>