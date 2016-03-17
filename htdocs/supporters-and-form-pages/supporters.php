<!DOCTYPE HTML>
<HTML lang="en">
<head>
	<meta charset="utf-8"

	<title>Google Fiber to Louisville</title>
<!-- 
Latest compiled and minified bootstrap
 -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">

</head>

<body id="supporters-body">


  <nav class="navbar-inverse navbar-fixed-top" role="navigation">
  	<div class="container">
  		<div class="navbar-header"><a href="../index.html">Google Fiber to Louisville</a>
  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#index-header">
  				<span class="sr-only">Toggle Navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  		</div>
  		  <div class="collapse navbar-collapse" id="index-header">
  			<ul class="nav navbar-left">
  				<li id="form-tab"class="nav navbar-right"><a href="form.php">Add your name!</a></li>
  				<li id="supporters-tab"class="navbar-right"><a href="supporters.php">Supporters</a></li>
				</ul>
    	  </div>
  	</div>
  </nav>



  <div class="row">

   <div class="col-md-3"></div>


    <div class="col-md-6" id="supporters">
      <h1 id="supporters-header"> Supporters :) </h1>
      <div id="supporters-scroll">


        <?php 

          include("../config.php");

          $db = new PDO("mysql:host=" . DB_HOST. ";dbname=" .DB_NAME .";port=" . DB_PORT,DB_USER,DB_PASS);

          $sql = "SELECT firstname, lastname FROM supporters ORDER BY firstname, lastname";

          foreach ($db->query($sql) as $row) {
            echo '<div id="supporter-list">';
            print $row['firstname'] . " ";
            print $row['lastname'] . "<br />";
            echo '</div>';
          }


        ?>

      </div>
    </div>



    <div class="col-md-3">

      <div class="center-block" id="add-name-div">
        <p id="add-name">
          If you support Google Fiber coming to Louisville, you can add your name on the "Add your name" page!
        </p>
      </div>


    </div>


  </div>



    <script src="/js/jquery2.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>





</body>
</html>