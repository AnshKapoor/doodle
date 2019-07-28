<?php 
include("crawl.php");
if(isset($_GET["link"])){
    $Running = false;
    $startUrl = $_GET["link"];
    while(!$Running){
    followLinks($startUrl);
    $Running = false;
    }
    

}


?>


<html>
<head> 
<title> Trainer</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="margin-left:15%;">
			<img alt="Trainer logo" src="assets/images/trainer.png" width="20%" height="35%" /><br/>
			<h3>
				Enter your Website
			</h3>
			<form role="form" action="example.php"method="GET">
				<div class="form-group">
					 
					<label for="Website">
						Website
					</label>
					<input type="text" class="form-control" style="width:50%" id="site" name="link" />
				</div>
				
				
				
				<button type="submit" class="btn btn-primary">
					Train
				</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>