<?php    
$file_pointer = 'output.txt';

if(isset($_POST['submit_btn']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

$data = "You've received a new message from ".$name."\n"."You can reach him via: ".$email."\n"."This person wants to discuss - ".$title."\n"."Here's what they said: "."\n".$message."\n"."\n";

if(!file_exists($file_pointer)){
    $file_pointer = fopen('output.txt', 'w') or die("Unable to create a new file for your operation!!");
} else{
    $file_pointer = fopen('output.txt', 'a') or die("Unable to open file");
}

if(fwrite($file_pointer, $data))
{
    echo 'Your message has been saved successfully!';
}
fclose($file_pointer);
}
?>