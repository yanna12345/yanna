<!DOCTYPE html>
<html>
	<?php include 'style.php';?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<head>
	<style>
		body {
			text-align: center;}
	

		.form {
			padding: 8px;
			border: 1px solid purple;
			font-family: Arial;
			font-size: 16px;
			margin: 10px;
			text-align: center;
			border-radius: 8px;
		}
					
		.form:hover, input:active{
			border: 1px solid purple;
		}

		.gap {
			max-width:  60%;
		}
	
	</style>
	
	<script type="text/javascript">
		function validate() {
		x=document.myForm
		at=x.email.value.indexOf("@")
		code=x.code.value
		firstname=x.fname.value
		submitOK="True"
		if (at==-1) {
		alert("Ελέγξτε το email σας!")
		submitOK="False"
		}
		if (name.length>3) {
		alert("Ελέγξτε ξανά τα στοιχεία.")
		submitOK="False"
		}
		if (submitOK=="False") {
		return false
		}
		}
	</script>
	
	
</head>
<body>	
	<h1 style="margin:30px 0px;">Επικοινωνία</h2>
	<div class="r row justify-content-center">
		<div class="gap">

				<form name="myForm" action="submitpage.html" onsubmit="return validate()">
			  <div class="form-row">

			    <div class="col-6">
			     <input type="text" class="form" name="firstname" size="20" placeholder="Όνομα">
			    </div>

			    <div class="col-6">
			      <input type="text" class="form" name="lastname" size="20" placeholder="Επίθετο">
			    </div>

			    <div class="col-6">
			      <input type="text" class="form" name="telephone" size="10" placeholder="Τηλέφωνο">
			    </div>

			    <div class="col-6">
			     <input type="email" class="form" name="email" placeholder="Email">
			    </div>

			    <div class="col-12">
			      <input type="submit" value="Καταχώρηση" style="width:90%; font-family:Arial; font-size:18px; 
					color: purple; border: 1px solid purple; border-radius:8px; padding:8px;">
			    </div>

			  </div>
			</form>
		</div>
	</div>
	
</body>
</html>