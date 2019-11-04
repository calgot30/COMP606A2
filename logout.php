<!-- 
    Logout feature which is available on the home page, destroys the 
    session and sends the user back to the register page.
    
 -->

 <?php
session_start();

if(session_destroy()){
    header("Location: titlepage.php");
}

?>