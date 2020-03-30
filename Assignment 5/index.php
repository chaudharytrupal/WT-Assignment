<!DOCTYPE html>
<html>
<head>
	<title>18CE012</title>
</head>
<style>
	
	.wrap{
			max-width: 380px;
			border-radius: 20px;
			margin:auto;
			background:rgba(0,0,0,0.8);
			box-sizing: border-box;
			padding: 40px;
			color: #fff;
			margin-top: 100px;

	}

	h2{
			text-align: center;
	}

	input[type=text],select[id=country]{
			width: 100%;
			box-sizing: border-box;
			padding: 12px 5px;
			background:rgba(0,0,0,0.10);
			outline: none;
			border:none;
			border-bottom: 1px dotted #fff;
			color:#fff;
			border-radius: 5px;
			margin: 5px;
			font-weight: bold;
	}

	input[type=submit]{
			width: 100%;
			box-sizing: border-box;
			padding: 10px 0;
			margin-top: 30px;
			outline: none;
			border:none;
			background:#60adde;
			opacity: 0.7;
			border-radius: 20px;
			font-size: 20px;
			color: #fff;
	}
	input[type=submit]:hover{
			background:#003366;
			opacity: 0.7;
	}
</style>
<body>
<div class="wrap">
	<h2>S I G N &nbsp U P &nbsp H E R E </h2>
	<form action="meet.php" method="post">
		<input type="text" name="StudentName" placeholder="Student Name.." required="">
		<input type="text" name="FacultyName" placeholder="Faculty Name.." required="">
		<input type="text" name="Professional" placeholder="Professional.." required="">
		<input type="text" name="CompanyName" placeholder="Company Name.." required=""><br>
		<select id="country" name="CountryName" required>
			<option value="country">Select Country</option>
			<option value="Australia">Australia</option>
			<option value="Bhutan">Bhutan</option>
			<option value="Canada">Canada</option>
			<option value="Denmark">Denmark</option>
			<option value="Egypt">Egypt</option>
			<option value="France">France</option>
			<option value="India">India</option>
		</select>
		<input type="text" name="Num" placeholder="Number.." required=""><br>
		<input type="submit" value="submit">
	</form>
</div>
</body>
</html>
<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'test1');

if(!$conn)
{
echo "Error in connection";
}
else
{
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if (isset($_POST["StudentName"]) && isset($_POST["FacultyName"]) && isset($_POST["Professional"]) && isset($_POST["CompanyName"]) && isset($_POST["CountryName"]) && isset($_POST["Num"])){
			$StudentName = $_POST['StudentName'];
 			$FacultyName = $_POST['FacultyName'];
 			$Professional = $_POST['Professional'];
 			$CompanyName = $_POST['CompanyName'];
 			$CountryName = $_POST['CountryName'];
 			$Num = $_POST['Num'];
 	

  			
			if($StudentName!=' ' && $FacultyName!=' ' && $Professional!=' ' && $CompanyName!=' ' && $CountryName!=' ' && $Num!=' '){
			    $sql="INSERT INTO test1(StudentName,FacultyName,Professional,CompanyName,CountryName,Num) values ('$StudentName','$FacultyName','$Professional','$CompanyName','$CountryName','$Num')";
				$result=mysqli_query($conn,$sql);
				die;

				if(!$result){
					echo "<script>alert('Record inserted');document.location='assign5.php'</script>";
				}
			}
		}
		else
			echo"value not set";
	}
}
?>