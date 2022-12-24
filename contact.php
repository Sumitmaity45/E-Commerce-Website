<?php
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $product=$_POST['product'];
    $message=$_POST['message'];
    $queries=$_POST['queries'];

    if(empty($name)|| empty($email)|| empty($product)|| empty($message)|| empty($queries))
    {
        header('location:contactFrom.php?error');
    }
}







$email_from='ekarthelpcenter@gmail.com';
$email_subject="New Form Submission";
$email_body="Full Name:$name.\n".
            "Email:$email.\n".
            "Product Name:$product.\n".
            "Type your Message:$message.\n".
            "Type your Queries:$queries.\n";


?>
