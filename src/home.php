<?php 
session_start();

 include("connection.php");
 include("functions.php");

 $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ctf</title>
    </head>
    <body>
    <style type="text/css">

        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #outer{

            background-color: black;
            color: white;
            height: 100vh;
        }

        #box{

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            
        }

        h1{

            color: #cc9933;
            font-size: 5rem;
        }

    </style>
    <div id="outer">
        <div id="box">
            <a href="logout.php">Logout</a>
            <h1>Congratulations! You passed the challenge</h1>
        </div>
    </div>
        
    </body>
</html>