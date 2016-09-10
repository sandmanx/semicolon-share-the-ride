<php
	$host="localhost";
	$dbuser="root";
	$pass="";
	$dbname="mysite";
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
					if(empty($name) || empty($email) || empty($username) || empty($pass))
					{
						echo "Please fill all the fields xD";
					}
					else
					{
						$sql="INSERT INTO user(name,email,username,pass)"
							"VALUES('$name','$email','$username','$pass')"
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