<?php session_start();
?>
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
                <li><a href="#">Logged in as <b><?php echo $_SESSION['username'];?></b></a> </li>
                <li><a href="#">Logout</a> </li>

            </ul>
        </div>


    </div>


</nav>


<div class="container">

    <div class="row">

        <div class="col-md-offset-3 col-md-6">

            <div class="buttons">
                <button id="addNote" type="button" class="btn btn-info btn-lg">Add Note</button>

                <button id="edit" type="button" class="btn btn-info btn-lg pull-right">Edit</button>

                <button id="done" type="button" class="btn green btn-lg pull-right">Done</button>

                <button id="allNotes" type="button" class="btn btn-info btn-lg">All Notes</button>
            </div>

        </div>

    </div>

    <div id="notePad">

        <textarea rows="10" id="notetextarea"></textarea>

    </div>

    <div id="notes" class="notes">
        <!--Ajax call here  to php file-->
        <h1>Neshto si</h1>
    </div>
</div>


<div class="footer">

        <p>This is a footer,Copyright <?php $today=date("Y");echo $today; ?></p>
</div>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/notejavascript.js"></script>
</body>
</html>
