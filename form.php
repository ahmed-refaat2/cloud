<!DOCTYPE html>
<html>
<head>
	<title> form </title>
</head>
<body>
	<div style="margin-left: 30%;border: solid;width: 300px;text-align: left" >
		<div style="margin-left: 5%">
		<form action="done.php" method="post">
			<br>
			<label>Frist name</label>
			<input type="text" name="fname">
			<br><br>
			<label>Last name</label>
			<input type="text" name="lname">
			<br><br>
			<div>
				<div style="float: left;">
					<label >Adress</label>
				</div>

				<textarea  name="adress" cols="20" rows="10" style="margin-left: 10%"></textarea> 
			</div>
			<br><br>
			<label>Country</label>
			<select name="Country">
				<option value="Egypt">Egypt </option>
				<option value="Palestine">Palestine </option>
				<option value="Sudan">Sudan </option>
			</select>
			<br><br>
			<label >Gender</label>
			<input type="radio" name="Gender" value="male">
			<label>Male</label>
			<input type="radio" name="Gender" value="female">
			<label>Female</label>
			
			<br><br>
			<label id="skill">Skills</label>
			<input type="checkbox" name="skills" value="PHP">
			<label>PHP</label>
			<input type="checkbox" name="skills2" value="J2SE">
			<label>J2SE</label>
			<br>
			<input type="checkbox" name="skills3" value="MYSQL">
			<label>MYSQL</label>
			<input type="checkbox" name="skills4" value="PostgreeSQL">
			<label>PostgreeSQL</label>
			<br><br>
			<label>Username</label>
			<input type="text" name="name">
			<br><br>
			<label>Password</label>
			<input type="Password" name="pass">
			<br><br>
			<label>Department</label>
			<input type="text" name="department" placeholder="OpenSource" >
			<br><br>

			<div >
				<div style="float: left;">
					<label id="code">Sh68Sa</label>
					<br><br>
					<input type="text" name="code">
				</div>
				<div style="float: left;">
					please insert<br> the code in <br>below box
				</div>
			</div>

			<br><br><br><br>

			<input type="submit" name="submit" value="submit">
			<input type="reset" name="reset" value="reset">
			<br>
		</form>
		<br>
		</div>

	</div>

</body>
</html>