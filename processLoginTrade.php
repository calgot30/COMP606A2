<?php
require_once("header.php");

$email = $_POST['Email'];
$pwd = $_POST['Password'];
$sql = "SELECT tradesman_email, tradesman_password from tradesman where tradesman_email = ?";
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("s", $email);
    
    if($stmt->execute()) {
        $stmt->store_result();
        if($stmt->num_rows == 1) {
            $stmt->bind_result($email, $hashed_password);
            var_dump($hashed_password);
            
            if ($stmt->fetch()) {
                if(password_verify($pwd, $hashed_password)) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['Email'] = $email;
                    header('location: main.php');     
                } else{ 
                        Echo "<div class=formContainer>";
                        Echo "The password you entered was incorrect! ";
                        Echo "Press this button to try again<br>";
                        Echo "&nbsp &nbsp<a href=Login.php><button>Try Again</button></a>";
                        Echo "</div>";
                    }
                }
        } else{ 
            Echo "<div class=formContainer>";
            Echo "Sorry, no account with that email found! Please make sure you have registered.<br>";
            Echo "Press this button to Register now!<br>";
            Echo "&nbsp &nbsp<a href=Registration.php><button>Register</button></a>";
            Echo "</div>";
        }
    } else{ 
        echo "Oops! Something went wrong. Please try again later"; 
    }
}
$stmt->close();

?>