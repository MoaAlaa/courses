<?php 
 session_start();
include_once "include/functions.php"; // => include folder => functions file?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE Combitability Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile First Meta -->
        <title>Admin Panal Course</title>
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- Latest compiled and minified CSS -->
        <link href="css/hover.css" rel="stylesheet" media="all"> <!-- Hover.CSS File -->
        <link rel="stylesheet" href="css/style.css"> <!-- CSS File -->
         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>
                <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Panel</a>
        </div>
        <div class="collapse navbar-collapse" id="app-nav">
          <ul class="nav navbar-nav">
            <li><a href="Cources prevuew.php">Cources</a></li>
            <li><a href="Articles prevuew.php">Articles</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="../admin-profile.php" ><?php echo $_SESSION["logged_name"]; ?> Profile</a>
                <li><a href="../massges.php">Massegs</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <div class="article-E-D">
        	<div class="container">
            	<h2>Edit And Delete Course</h2>
                <table class="table table-bordered table-hover " >
                	<tr>
                    	<th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Hours</th>
                        <th>Describtion</th>
                        <th>setas</th>
                        <th>Image</th>
                        <th>Actions &amp; Tools</th>
                    </tr>
                    	<?php Course_E_D(); // => include folder => functions file ?>
                </table>
                 <form action="course.php" method="post">
                    <input type="submit" name="edit-delete" value="Admin Panal Course" class="inp btn btn-info btn-block">
                </form>
            </div>
        </div>
         <?php include "include/templates/footer.php"; ?>
        <script src="js/jquery.min.js"></script> <!-- Jquery Mini file -->
        <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
        <script src="js/script.js"></script> <!-- Externa Js File file - My File -->
    </body>
</html>
