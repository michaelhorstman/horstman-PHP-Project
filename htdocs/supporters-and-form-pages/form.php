<head>
	<meta charset="utf-8"

	<title>Google Fiber to Louisville</title>
<!-- 
Latest compiled and minified bootstrap
 -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">

</head>

<body>


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




    	<div class="col-md-6" id="form-col">
  		  
  		<form action="../submit.php" method="post">
  		  <fieldset class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required>
        </fieldset>


        <fieldset class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name"
          required>
        </fieldset>


		    <fieldset class="form-group">
		      <label for="exampleInputEmail1">Email address</label>
		      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
		      <small class="text-muted">We'll never share your email with anyone else.</small>
	      </fieldset>

	      <button type="submit" id="form-button" class="btn btn-primary">Submit</button>

	    </form>
      </div>





    <div class="col-md-3"> </div>

  </div>









			<script src="/js/jquery2.min.js"></script>

    	<script src="/js/bootstrap.min.js"></script>




</body>