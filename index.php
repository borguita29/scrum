
<?php include 'header.php';?>


<body>	

<div class="container mt-5">
	<div class="row">
		<div class="col-sm"></div>
		<div class="mt-5 col-sm" style="border: 1px solid black">
			<h1 class="pt-5 text-center">SCRUM.IO</h1>
			<label class="pt-5" for=username>USERNAME:</label>
			<input type="text" class="form-control mb-3" name="username">

			<label for=username>PASSWORD:</label>
			<input type="text" class="form-control mb-4" name="password">
			
			<div class="float-right pb-4">
				<button class="btn btn-primary" onclick="window.location = 'registration.php' ">REGISTER</button>
				<button class="btn btn-primary">SUBMIT</button>
			</div>
		</div>
		<div class="col-sm"></div>
	</div>
</div>




</body>
</html>

