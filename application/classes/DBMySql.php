<?php
class DBMySql implements DBMySqlInterface {
   protected $connection;
   function __constructor() {
      
   }
   public function connect() {
      $this->connection = mysqli_connect(
                                           getenv("IP"),
                                           getenv("C9_USER"),
                                           "",
                                           "smart_blog"
                                        );
   }
   public function escape($string) {
      return mysqli_real_escape_string($this->connection, $string);
   }
   public function query($query_text) {
        $result = mysqli_query($this->connection,$query_text);
        //deg($query_text);
        if ($result === false){
           echo "Query error:";
           var_dump($query_text);
           var_dump(mysqli_error($this->connection));
           die;
        }
        if(is_object($result)){
            $rows = [];
            while($row = mysqli_fetch_array($result,MYSQL_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return true;
    }
    
    public function getLastInsertId() {
        return mysqli_insert_id($this->connection);
    }
}