
<?php include 'header.php';?>


<body class="background">
	<div class="container mt-5">
		<div class="form-group col-xl-8 offset-xl-2">
				<form id="regform" method="POST" action="registration_function.php">
				<div class="card" style="border: 1px solid #7CB0FF">
					<div class="card-header bg-primary">
						<h1 class="text-center text-light registrationTitle">REGISTRATION</h1>
					</div>
						<div class="form-body mt-3">
							<div class="form-group col-xl-12">
								<label for="name" class="registrationLabel">NAME :</label>
								<input class="form-control registrationLabel" id="name" name="fname">
							</div>
							<div class="form-group col-md-12">
								<label for="nickname" class="registrationLabel">NICKNAME :</label>
								<input class="form-control registrationLabel" name="nickname" id="nickname">
							</div>
							<div class="col-xl-12">
								<div class="row">
									<div class="form-group col-xl-6">
										<label for="age" class="registrationLabel">AGE :</label>
										<input type="number" class="form-control registrationLabel" name="age" id="age">
									</div>
									<div class="form-group col-xl-6">
										<label for="gender" class="registrationLabel">GENDER :</label>
										<select name="gender" class="form-control registrationLabel" id="exampleFormControlSelect1">
											<option hidden selected value></option>
											<option class="registrationLabel">MALE</option>
											<option class="registrationLabel">FEMALE</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group col-xl-12">
								<label for="address" class="registrationLabel">ADDRESS :</label>
								<input class="form-control registrationLabel" name="address" id="address">
							</div>
							<div class="form-group col-xl-12">
								<label for="email" class="registrationLabel">EMAIL :</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><i class="fa fa-envelope text-light"></i></span>
									</div>
									<input class="form-control registrationLabel" name="email" id="email">
								</div>
							</div>

							<div class="form-group col-xl-12">
								<label for="uname" class="registrationLabel">USERNAME :</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text bg-primary"><i class="fa fa-user text-light"></i></span>
										</div>
											<input class="form-control registrationLabel" name="username" id="uname">
									</div>
							</div>
						
							<div class="form-group col-xl-12">
								<label for="pword" class="registrationLabel">PASSWORD :</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><i class="fa fa-key text-light"></i></span>
									</div>
										<input type="password" class="form-control registrationLabel" name="password" id="pword">
								</div>
							</div>

							<div class="form-group col-xl-12 text-center">
								<p class="text-danger registrationLabel" id="error"></p>
							</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="regsubmit" class="btn btn-primary registrationLabel">SUBMIT</button>
					</div>
				</div>
			</form>
		</div>
	</div>


<script type="text/javascript">

	$(document).ready ( function() {
		console.log('LOAD');

		$("#regsubmit").click ( function() {
			event.preventDefault();

				$.ajax({
			type: "POST",
			url: "registration_function.php",
			data: $("#regform").serialize(),
			success: function(data) {
				console.log(data);
				$("#error").html(data);
			}

		});
		});


	});
</script>

</body>
</html>

