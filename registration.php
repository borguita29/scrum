
<?php include 'header.php';?>


<body>	

<div class="container-fluid pt-4 pb-4" style="border: 5px solid black">
	<div class="container">
			
		<form id="regform" method="POST" action="registration_function.php">
			<h1>REGISTRATION</h1>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="name">NAME</label>
	      <input class="form-control" id="name" name="fname">
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="nickname">NICKNAME</label>
	      <input class="form-control" name="nickname" id="nickname">
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="age">AGE</label>
	      <input type="number" class="form-control" name="age" id="age">
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="gender">GENDER</label>
	      <select name="gender" class="form-control" id="exampleFormControlSelect1">
	      <option hidden selected value></option>
	      <option>MALE</option>
	      <option>FEMALE</option>
	    </select>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="address">ADDRESS</label>
	      <input class="form-control" name="address" id="address">
	    </div>
	  </div>
	   <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="email">EMAIL</label>
	      <input class="form-control" name="email" id="email" required>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="uname">USERNAME</label>
	      <input class="form-control" name="username" id="uname">
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="pword">PASSWORD</label>
	      <input type="password" class="form-control" name="password" id="pword">
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	    	<p class="text-danger" id="error"></p>
	    </div>
	  </div>
	  <button type="submit" id="regsubmit" class="btn btn-primary">SUBMIT</button>
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

