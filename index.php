<html>
<head>
    <title> Client Invoicing Problem </title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
</head>
<body>

	<div class="container">
		<!--jumbotron for page title-->
		<div class="jumbotron">
			<h1>Client Invoicing Problem</h1>
			<br>
			<h4>By: Chaozhi Zhang</h2>
		</div>
		
		<hr class="featurette-divider">
		
		<div class='panel panel-primary'>
			<div class='panel-heading'><h4>Client Invoicing Report</h4></div>
			<div class='panel-body'>

			<?php
				include('query.php');
			?>
			
			</div>
		</div>
		
		<hr class="featurette-divider">
		
		<!-- Footer for copyright-->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="mailto:zhangcz217@gmail.com">Chaozhi217</a> 2015</p>
                </div>
            </div>
        </footer>
	</div>

</body>
</html>
