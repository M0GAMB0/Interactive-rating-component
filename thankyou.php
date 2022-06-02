<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for rating</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <php 
    $rating=$_POST['rating'];
    ?>
    <div class="content">
        <div class="main main2">
            <img src="images/illustration-thank-you.svg" />
            
            <div class="caption"> 
                You selected <?php echo $_POST['rating']?>
 out of 5
            </div> 
            <div class="title">Thank you!</div> 
            <div class="subtitle subtitle2">We appreciate you taking the time to give a rating. If you ever need more support,
            don’t hesitate to get in touch!</div>
        <div>
    </div>
<div class="footer">
    Challenge by <a href=" https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
    Coded by <a href="#">Saikumar Hangal</a>.
</div>
</body>
</html>