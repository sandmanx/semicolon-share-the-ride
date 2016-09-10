<php
	$host="localhost";
	$dbuser="root";
	$pass="";
	$dbname="project"
	$conn=mysqli_connect($host,$dbuser,$pass,$dbname);

	if(mysqli_connect_error())
	{
		die("Fault in our connection" .mysqli_connect_error());
	}
?>

<html>
	<head>
		<title>Signup</title>
	</head>
	<body>
		<?php
			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$username=$_POST['username'];
				$pass=$_POST['pass'];
				$c_pass=$_POST['c_pass'];
				$c_no=$_POST['c_no'];
					if(empty($name) || empty($email) || empty($username) || empty($pass) || empty($c_pass) || empty($c_no))
					{
						echo "Please fill all the fields xD";
					}
					else
					{
						$sql="INSERT INTO signup(Name,Email,UserName,Password,CPassword,ContactNumber)".
							"VALUES('$name','$email','$username','$pass', '$c_pass', '$c_no')"
						$res=mysqli_query($conn,$sql);

						if(!res)
						{
							die("Error 1" . mysqqli_error($conn));
						}
						else
						{
							echo "Signup Successful..!! (y)";
						}
					}
			}
		?>
	</body>
<html>
