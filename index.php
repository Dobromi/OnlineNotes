<?php require_once ('includes/loggedinCheck.php')?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/notestyle.css" type="text/css">


</head>

<body>

<?php require_once ('includes/navbar.php');?>

<?php require_once ('includes/content.php');?>

<?php require_once ('includes/forgotpass.php');?>

<?php require_once ('includes/loginForm.php');?>
<?php require_once ('includes/signupForm.php');?>

<div class="footer">


        <p>This is a footer,Copyright <?php $today=date("Y");echo $today; ?></p>

</div>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/javascript.js"></script>
</body>


</html>