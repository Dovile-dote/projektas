<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include('db.php');
            $from = "$email";
            $to = "dbilkstiene@gmail.com";
            $tema = "Nauja zinute";
            $autorius = "Nuo: " . $name . ', ' . $email;
            $zinute =  'Tema: ' . $subject . ', zinute: ' . htmlspecialchars($message);
            //mail($to, $tema, $autorius, $zinute, $from);
            //echo "<script>alert('Thanks. Your message has been received. We will contact you soon!');</script> ";
            header("Location: ../public/index.php");
            exit();
        }
    }
}
