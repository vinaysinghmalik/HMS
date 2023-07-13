<?php

	 $sql = "SELECT * FROM students WHERE email='admin' AND pass='admin'";

     if($sql){  
            header("location:admin.php");
        }  
        else{  
            header("location:login.php");
        }
    

?>
<!DOCTYPE html>   
<html>   
<head>  

<title> Admin Login </title>  
    <style>   
        h1{
            color: white;
            margin-right: 400px;
            font-size: 40px;
        }
        Body {  
            padding: 100px;
            margin-left: 480px;
            font-family: Calibri, Helvetica, sans-serif;  
            background-color: springgreen;  
        }  

        button {   
            background-color: mediumseagreen;   
            width: 127%;  
            color: white;   
            padding: 15px;   
            margin: 10px;
            margin-left: -38px;
            border: none;   
            cursor: pointer;   
            border-radius: 5px;
        }   

        input[type=text], input[type=password] {
            border: none;
            background-color: whitesmoke;
            width: 117%;
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
            padding-bottom: 50px;
            padding-top: 50px;
            background-color: white;  
            border-radius: 15px;
        }   
    </style>   
</head>    
<body>    
    <center> <h1> ADMIN LOGIN </h1> </center>   
    <form>  
        <div class="container">   
            
            <input type="text" autocomplete=off placeholder="Enter Email" name="email" required>  
            <input type="password" autocomplete=off placeholder="Enter Password" name="pass" required>  
            <button type="submit">Login</button> 
                
        </div>   
    </form>     
</body>     
</html>  