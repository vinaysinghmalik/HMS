<?php
include "connect.php";
$fetch= mysqli_query($con, "SELECT * FROM students");
if(isset($_GET['ID']))
{
	$id = $_GET['ID'];
	$delete="DELETE FROM user where ID = $id";
	$sql= mysqli_query($con, $delete); 
    header("location:http://localhost/university/admin.php");
	exit;
}

?>
<html>
    <head>
    <style>
        table{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        button {   
            font-size: 18px;
            background-color: mediumseagreen;   
            width: 10%;  
            color: white;   
            padding: 10px;   
             margin-top: -46px;
            margin-bottom: 10px;
            margin-left: 1365px;
            border: none;   
            cursor: pointer;   
            border-radius: 5px;
         }
        
         input[type=submit]{
            background-color: seagreen;    
            color: white;   
            font-size: 15px;
            border: none;
            height: 25px;
            border-radius: 5px;
        }
        input[type=reset]{
           font-size: 18px;
            background-color: mediumseagreen;   
            width: 10%;  
            color: white;   
            padding: 10px;  
            margin-bottom: 5px;
            margin-left: 1050px;
            border: none;   
            cursor: pointer;   
            border-radius: 5px;
        }
        
        
        input[type=submit]:hover{
            cursor: pointer;
        }
        
        button:hover{
            opacity: 0.8;
        }
        
        th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: lightgreen;    
            color: black;
            text-align: center;
        }
        
        td, th{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        
        tr:nth-child(even){
            background-color: aliceblue;
        }
        
        tr:hover{
            background-color: lightblue;
        }
        
        </style>
    </head>
<body>
<center>
<table border="1px">
    <tr><a href="http://localhost/university/logout.php"><input type="reset" value="Logout"></a>
    <a href="http://localhost/university/register.php"><button type="button">Add User</button> </a></tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Delete</th>
<th>Update</th>

<?php
while($r= mysqli_fetch_array($fetch))
{
?>
    
<tr>
	<td><?php echo $r['ID']; ?></td>
	<td><?php echo $r['Name']; ?></td>
	<td><?php echo $r['Email']; ?></td>
 	<td><?php echo $r['Pass']; ?></td>

    <td> <a href="http://localhost/university/admin.php?ID=<?php echo$r['ID']; ?>"><input type="submit" value="Delete"></a></td>
    
    <td> <a href="http://localhost/university/update.php?ID=<?php echo$r['ID']; ?>"><input type="submit" value="Update" name="update"></a></td>
</tr>
<?php
}
?>
</table>
</center> <br>

</body>
</html>