<!-- 
    Logout feature which is available on the home page, destroys the 
    session and sends the user back to the home page.
    
 -->

 <?php
session_start();

if(session_destroy()){
    header("Location: Home.php");
}

?>