<?php 
include('../functions.php') 
//session_start();
//$db = mysqli_connect('localhost', 'root', '', 'multi_login');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - User List</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php 
		echo display_error(); 
		//echo "tester";
    		$sql = "SELECT * FROM users";
            $result = $db -> prepare ($sql);
            $result -> execute (  array (':id' => '0')  );
            //echo "tester2";
            if($result->rowCount()>0){
                //echo "tester2";
		    while($row = $result->fetch()) {
                echo "<strong>User ID: </strong>".$row["id"]."<strong> First Name: </strong>".$row["firstname"]."<strong> Last Name: </strong>".$row["lastname"]."<strong> Username: </strong>".$row["username"]."<strong> Email: </strong>".$row["email"]."</br></br>";            }
            }
			
		?>
		
	</form>
</body>
</html>