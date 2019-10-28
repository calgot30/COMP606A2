<!-- 
    Creates connection to database for login/registration and redirects user to sitedown.php if connection fails.
 -->
 <?php

class dbConnection{ //https://gist.github.com/jonashansen229/4534794
    private $_connection;
    private static $_instance; //The single instance
    private $_host = "localhost";
    private $_username = "guest";
    private $_password = "";
    private $_database = "safetrade";
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        
        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
        }
    }
        // Magic method clone is empty to prevent duplication of connection
        private function __clone() { }
        // Get mysqli connection
        public function getConnection() {
            return $this->_connection;
        }

}
//reports all errors
error_reporting(E_ALL);
?>