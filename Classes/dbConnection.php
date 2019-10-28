<!-- 
    Creates connection to database for login/registration and redirects user to sitedown.php if connection fails.
 -->
 <?php
//sets error reporting to blank
error_reporting(0);

class dbConnection{
//sets db login details
    private $user = "guest";
    private $password = "";
    private $database = "safetrade";
    private $host = "localhost";

    public $conn;

    public function __construct(){
        $this->conn = null;
        try{            
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->user, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }


    public function getStuff($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null){
        $selectQuery = 'SELECT '.$rows.' FROM '.$table;
        if($join != null){
        $selectQuery .= ' JOIN '.$join;
        }
        if($where != null){
        $selectQuery .= ' WHERE '.$where;
        }
        if($order != null){
        $selectQuery .= ' ORDER BY '.$order;
        }
        if($limit != null){
        $selectQuery .= ' LIMIT '.$limit;
        }
        $this->myQuery = $selectQuery;
        if($this->checkTable($table)){
        $query = @mysql_query($selectQuery);
        if($query){
        $this->numResults = mysql_num_rows($query);
        for($row = 0; $row < $this->numResults; $row++){
        $result = mysql_fetch_array($query);
        $keys = array_keys($result);
        for($key = 0; $key < count($keys); $key++){ if(!is_int($keys[$key])){ if(mysql_num_rows($query) >= 1){
        $this->result[$row][$keys[$key]] = $result[$keys[$key]];
        }else{
        $this->result = null;
        }
        }
        }
        }
        return true;
        }else{
        array_push($this->result,mysql_error());
        return false;
        }
        }else{
        return false;
        }
        }

        public function getResult(){
            $value = $this->result;
            $this->result = array();
            return $value;
            }
}
//reports all errors
error_reporting(E_ALL);
?>