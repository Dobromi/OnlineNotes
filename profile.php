
<html lang="en">


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/notestyle.css" type="text/css">


</head>

<body>

<nav role="navigation" class="navbar navbar-custom navbar-fixed-top">

    <div class="container-fluid">

        <div class="navbar-header">

            <a href="#" class="navbar-brand">Online Notes</a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"> </span>


            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Profile</a> </li>
                <li><a href="#">My Notes</a> </li>
                <li><a href="#">Contact us</a> </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Logged in as <b>username</b></a> </li>
                <li><a href="#">Logout</a> </li>

            </ul>
        </div>


    </div>


</nav>



<div class="container" id="container">

    <div class="row">

        <div class="col-md-offset-3 col-md-6">

            <h2>General Account Settings</h2>
            <div class="table-responsive">

                <table class="table table-hover table-condensed table-bordered">

                    <tr data-target="#updateUsername" data-toggle="modal" >
                        <td>Username</td>
                        <td>value</td>
                    </tr>
                    <tr data-target="#updateEmail" data-toggle="modal">
                        <td>Email</td>
                        <td>Value</td>
                    </tr>
                    <tr data-target="#updatePassword" data-toggle="modal">
                        <td>Password</td>
                        <td>Hidden</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <?php require_once ('profileModel/updateUserForm.php');?>
    <?php require_once ('profileModel/updateEmailForm.php');?>
    <?php require_once ('profileModel/updatePassForm.php');?>
</div>

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
