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
<body>

<div class="sidenav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/Nominee.png" alt="" />
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
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 25%;
}
</style>
</head>
<body>

<div class="header">

  <div class="header-right">
  
    <a class="active" href="../../../index.html">Home</a>
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
    <title>Analysed Result</title>

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


    <div class="container" style="padding-top:50px; padding-left:50px;">
      <div class="row">
        <div class="col-sm-12" >
          
          <div class="page-header">
            <h2 style="font-family:verdana" class="specialHead">Analysis Result Till Now</h2>
          </div><br>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $BJP=0;
              $INC=0;
              $AAP=0;
              $TMC=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //BJP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='BJP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BJP++;
                  }

                  $bjp_value= $BJP*1;

                  echo "<strong><h3 class='normalFont'>Total Polls for BJP : $BJP%</h3></strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$bjp_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bjp_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // CONGRESS
                $sql ="SELECT * FROM tbl_users WHERE voted_for='INC'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $INC++;
                  }


                  $inc_value= $INC*1;

                  echo "<strong><h3 class='normalFont'>Total Polls for Congress: $INC %</h3></strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$inc_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // JDS
                $sql ="SELECT * FROM tbl_users WHERE voted_for='AAP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $AAP++;
                  }


                  $aap_value= $AAP*1;

                  echo "<strong><h3 class='normalFont'>Total Polls for JDS : $AAP %</h3></strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$aap_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>";
                }

                // Others
                $sql ="SELECT * FROM tbl_users WHERE voted_for='TMC'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $TMC++;
                  }


                  $tmc_value= $TMC*1;
                  echo "<strong> <h3 class='normalFont'>Total Poll for Others : $TMC%</h3></strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$tmc_value."%'>
                      <span class='sr-only'>TMC</span>
                    </div>
                  </div>";
                }

               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT * FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $total++;
                  }


                  $tqtal= $total*10;

                  echo "<strong><h1 class='normalFont'>Total Number of Polls: $total </h1></strong><br>";
                }

              }
            ?> 
          </div>

        </div>
      </div>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
