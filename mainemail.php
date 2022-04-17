<?php
        $to_email = $_POST['rec'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];
        $headers = "From: sender email";
        $filename= $_FILES['file']['name'];
        $location="upload/".$filename;
        
        if (mail($to_email, $subject, $body, $headers) && move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
            header('Location: success.php');
        } else {
            echo "Either Email sending failed or file uploading failed or both";
        }
     
?>