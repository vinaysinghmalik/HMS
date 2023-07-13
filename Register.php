<?php
include "Connect.php";
if(isset($_GET['ID']))
{
	$id = $_GET['ID'];
	$edit= mysqli_query($con, "SELECT * FROM students where ID = $id");
    while($r= mysqli_fetch_array($edit)){
        $id = $r['ID'];
	 	$name = $r['Name'];
		$email = $r['Email'];
		$pass = $r['Pass'];
	 }
}
?>
<html>
    <title> Register </title>  
        <head>
            <style>   
                h1{
                    color: white;
                    margin-right: 400px;
                    font-size: 40px;
                }

                Body{  
                    padding: 100px;
                    margin-left: 480px;
                    font-family: Calibri, Helvetica, sans-serif;  
                    background-color: springgreen;  
                }  

                button{
                    background-color: mediumseagreen;   
                    width: 127%;  
                    height: 9%;
                    color: white;   
                    padding: 15px;   
                    margin: 10px;
                    margin-left: -38px;
                    border: none;   
                    cursor: pointer;   
                    border-radius: 5px;
                }   

                input[type=text],input[type=email], input[type=password] {   
                    border: none;
                    background-color: whitesmoke;
                    width: 127%;
                    margin: 7px;
                    padding: 15px;   
                    margin-left: -40px;
                    display: inline-block;     
                    border-radius: 5px;
                }

                button:hover {   
                    opacity: 0.8;   
                }   

                .container {   
                    padding: 70px;
                    width: 300px;
                    padding-bottom: 80px;
                    padding-top: 50px;
                    background-color: white;  
                    border-radius: 15px;
                }   
            </style>   
        </head> 
        <body>
            <center><h1>Register</h1></center>
                <form action="insert.php" method="GET">
                    <div class="container"> 
                        <input type="text" autocomplete=off placeholder="Enter Name" name="name" value="" required>
                        <input type="email" autocomplete=off placeholder="Enter Email" name="email" value="" required>
                        <input type="password" autocomplete=off placeholder="Enter Password" name="pass" value="" required>
                        <button type="submit" name="submit" value="Register">Register</button>
                    </div>
                </form>
        </body>
</html>