<!-- Display submission status -->
<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>


<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.php">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    
<nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CN Project</a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="info.php">INFO</a></li>
        <li><a href="form.php">Send Email</a></li>
        <li><a href="Login.php">Logout</a></li>
      </ul>
    </div>
  </nav>
<!-- Display contact form -->
<section id="form"> 
  
 <div class="container">

 
<form method="post" action="email.php" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Name" required="">
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Email address" required="">
    </div>
    <div class="form-group">
        <input type="text" name="subject" class="form-control" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" placeholder="Subject" required="">
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control" placeholder="Write your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="attachment" class="form-control">
    </div>
    <div class="submit">
        <input type="submit" name="submit" class="btn" value="SUBMIT">
    </div>
</form>
</div>
</section>

</body>
</html>
