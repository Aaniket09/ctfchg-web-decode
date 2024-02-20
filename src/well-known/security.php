<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
	}

	#box{

		background-color: #fecc33;
		
		top: 10%;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	#outer{

		background-color: black;
		color: white;
		height: 100vh;
	}

	</style>

	<div id="outer">

	<?php 

session_start();

	include("../connection.php");
	include("../functions.php");

    error_reporting(0);

    if($_SERVER['REQUEST_METHOD'] == "GET")
    {
        $user_id = $_GET['user_id'] or 0;

        if(!empty($user_id))
        {
            $query = "select user_name from users where user_id = '$user_id'";
            $result = mysqli_query($con, $query) or die('<pre>' . mysql_error() . '</pre>');

            if($result)
            {
                while ($row = $result->fetch_assoc()) {
					echo '<pre>';
                    echo 'ID: ' . $row['user_name']."<br><br>";
					echo '</pre>';
                }
                // $user_data = mysqli_fetch_assoc($result);
                // echo $user_data['id'];
                // echo $user_data['user_id'];
                // echo $user_data['user_name'];
                // echo $user_data['password'];
                // echo $user_data['flag'];
                // echo $result;
            } else 
            {
                header("Location: well-known/security.php");
            }
        }
    }


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        
		$user_name = mysqli_real_escape_string($con, $_POST['user_name']);
		$password = mysqli_real_escape_string($con, $_POST['password']);


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' and password = '$password'";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					// if($user_data['password'] === $password)
					// {

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					// }
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

	<div id="box">
		
		<form method="get">

            <input id="text" type="text" placeholder="Search user_id" name="user_id" pattern="[0-9]"><br><br>

            <input id="button" type="submit" value="Search"><br><br>

        </form>

        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: black;">Login to Continue</div>

			<input id="text" type="text" placeholder="Username" name="user_name"><br><br>
			<input id="text" type="password" placeholder="Password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<!-- <a href="signup.php">Click to Signup</a><br><br> -->
		</form>
	</div>
	</div>
</body>
</html>