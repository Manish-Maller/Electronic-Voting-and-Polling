
<!DOCTYPE html>
<html lang="en">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #6495ED;
  overflow-x: hidden;
  padding-top: 10px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #000000;
  display: block;
}

.sidenav a:hover {
  color: #6495ED;
}

.main {
  margin-left: 800px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body >

<div class="sidenav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/HowTo.png" alt="" />
		</a>
</div>


  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #000000;
  padding: 10px 5px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">

  <div class="header-right">
  
    <a class="active" href="../../index.html">Home</a>
  </div>
</div>
</body>
  <html>
<head>
</head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Successfully Reviewed</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url('images/ww.jpg');">
   </nav>
    <div class="container" style="padding-top:150px; padding-left:100px">
	
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4 text-center" >
    			
    			<?php

          require('config.php');

    							
				
          

					if(isset($_POST["submit"])){
					if(isset($_POST["voterName"]) && isset($_POST["voterEmail"]) && isset($_POST["voterID"])&& isset($_POST["voterAge"])&& isset($_POST["selectedCandidate"]))
					{
						$name= test_input($_POST["voterName"]);
						$email= test_input($_POST["voterEmail"]);
						$voterID= test_input($_POST["voterID"]);
						$voterAge= test_input($_POST["voterAge"]);
						$selection= test_input($_POST["selectedCandidate"]);
					}
				}
				else
				{
					echo "<br>All Field Recquired";
				}
				
       $DB_HOST= "localhost";
       $DB_USER="root";
       $DB_PASSWORD="";
       $DB_NAME="db_evoting";
	

        $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
        or die("Couldn't Connect to Database :");
				


				$sql= "INSERT INTO db_evoting.tbl_users VALUES(null,'".$name."','".$email."','".$voterID."','".$voterAge."','".$selection."');";
					

				if(mysqli_query($conn, $sql)){
					
					echo "<h3 class='text-info specialHead text-center'><strong>    You've Successfully Reviewed </strong></h3>";
					echo "<a href='cpanel.php'  class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> View Result</strong> </a>";

				}
				else
				{
					echo "<img src='images/error.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
					echo "<a href='cpanel.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> View Result</strong> </a>";
				}

				
				?>

    			
    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


