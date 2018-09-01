<?php
    if(isset($_POST['submit'])){
        include'database.php';
		$loginType = $_POST['LoginType'];
        $user_name = mysqli_real_escape_string($conn, $_POST['inputUser']);
        $user_pass = mysqli_real_escape_string($conn, $_POST['inputPassword']);
		switch($loginType)
		{
			case 1 : $sql = "SELECT * FROM credentials WHERE user_name = '$user_name' and type = 'student'"; break;
			case 2 : $sql = "SELECT * FROM credentials WHERE user_name = '$user_name'and type = 'warden'"; break;
			case 3 : $sql = "SELECT * FROM credentials WHERE user_name = '$user_name'and type = 'guard'"; break;
			default: header("Location: index.php?login=error"); exit();
                    
		}
		
        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1 || $resultCheck>1){
			header("Location: index.php?login=error");
			exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                /*De-hassing the password
                $hashedPwdCheck = password_verify($user_pass,$row['user_pass']);
                if($hashedPwdCheck == false){
                    header("Location: ../../login1.php?login=error");
                    exit();
				*/
				
				if($user_pass ==$row['user_pass']){
					//login the user here
                    session_start();
                    $_SESSION['user_name'] = $row['user_name'];
					switch($loginType)
					{
						case 1 : header("Location: student/StudentLogin.php");
								 exit();
						case 2 : header("Location: warden/WardenLogin.php");
								 exit();
						case 3 : header("Location: guard/GaurdLogin.php");
								 exit();
						default: header("Location: index.php?login=error"); exit();
                    }
                    }
                else{
					
					header("Location: index.php?login=error");
                    exit();
                }
            }
        }
		
    }
	
    else{
		header("Location:index.php?login=error");
        exit();
		
    }
	
?>