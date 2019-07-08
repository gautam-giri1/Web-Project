<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.php">
</head>
<body>
	<fieldset class="register">
		<div style="background-color: grey;">
			<center><h3>Registration Form</h3></center>
		</div>

		<div>
		<h1>Welcome to my Website</h1>
			<form action="system.php" method="POST">
				<label>First Name</label>
				<input type="name" name="fname"><br>

				<label>Last Name</label>
				<input type="name" name="lname"><br>

				<label>Address</label>
				<input type="address" name="address"><br>

				<label>Email</label>
				<input type="email" name="email"><br>

				<label>DOB</label>
				<input type="date" name="bday"><br>

				<label>Phone</label>
				<input type="number" name="phone"><br>

				<label>Gender</label>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other<br>

				<label>Country</label>
				<select>
					<option value="Nepal">Nepal</option>
					<option value="China">China</option>
					<option value="USA">USA</option>
					<option value="India">India</option>
					<option value="Other">Other</option>
				</select><br>

				<label>Password</label>
				<input type="password" name="password_1"><br>

				<label>Confirm Password</label>
				<input type="password" name="password_2">
				<br><br>

				<center><button>Add Me</button></center>
			</form>
		</div>
	</fieldset>
	
</body>
</html>