<?php
include "Connect.php";

if(isset($_GET['ID']))
{
	$id = $_GET['ID'];

    $sql = mysqli_query($con, "SELECT * FROM students WHERE ID=$id");
    while($res = mysqli_fetch_array($sql))
{
    $id = $res['ID'];
	$name = $res['Name'];
    $email = $res['Email'];
    $pass = $res['Pass'];
}
}
?>

<html>
    <title> Update </title>  
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
            <center><h1>Update</h1></center>
                <form action="edit_update.php" method="GET">
                    <div class="container"> 
                        <input type="text" autocomplete=off name="id" value="<?php if(isset($id)){echo $id;}?>" disabled>
                        <input type="text" autocomplete=off placeholder="Enter Name" name="name" value="<?php if(isset($name)){echo $name;}?>" required>
                        <input type="email" autocomplete=off placeholder="Enter Email" name="email" value="<?php if(isset($email)){echo $email;}?>" required>
                        <input type="password" autocomplete=off placeholder="Enter Password" name="pass" value="<?php if(isset($pass)){ echo $pass;}?>" required>
                        <button type="submit" name="Update">Update</button>
                    </div>
                </form>
        </body>
</html>