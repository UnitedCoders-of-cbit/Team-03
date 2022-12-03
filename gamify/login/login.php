<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        // $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE emp_id='$uname' AND pass='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['emp_id'] === $uname && $row['pass'] === $pass) {
            	if($row['usertype'] == 1){
            	$_SESSION['emp_id'] = $row['emp_id'];
            	$_SESSION['pass'] = $row['pass'];
            	header("Location: admin/index.php");
		        exit();
		    }else{
		    	$_SESSION['emp_id1'] = $row['emp_id'];
            	$_SESSION['pass1'] = $row['pass'];
		    	header("Location: ../quiz/index.php");
		    	exit();
		    }
            }else{
				header("Location: index.php?error=Incorrect ID or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect ID or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>