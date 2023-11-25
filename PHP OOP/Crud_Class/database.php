<?php
class Database{

private $db_host = "localhost";
private $db_user = "root";
private $db_pass = "";
private $db_name = "testing";


private $mysqli = "";
private $result = array();
private $conn = false;


public function __construct(){
if(!$this->conn){
    $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
    $this->conn = true;
    if($this->mysqli->connect_error){
        array_push($this->result, $this->mysqli->connect_error);
        return false;

    }
}
else{
    return true;

}

}
//function to insert into database

public function insert($table,$params=array()){
if($this->tableExist($table)){
 

    $table_columns = implode(', ', array_keys($params));
    $table_values = implode("', '",$params);
  $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";

  if($this->mysqli->query($sql)){
    array_push($this->result, $this->mysqli->insert_id);
    return true;
  }else{
    array_push($this->result, $this->mysqli->error);
    return false;

  }
}else{
    return false;

}

}

//function to update row in database

public function update($table,$params=array(),$where= null){
    if($this->tableExist($table)){
        $args = array();
        foreach($params as $key => $value){
            $args[] = "$key = '$value'";
        }

      
        $sql = "UPDATE $table SET " . implode(', ', $args);
        if($where != null){
            $sql .= "WHERE $where";
        }

        if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->affected_rows);
            return true;
        }
        else{
            array_push($this->result, $this->mysqli->error);
            return false;
        }

    }else{
        return false;
    }

}

//function to delete table or row(s) from database

public function delete($table,$where= null){
    if($this->tableExist($table)){
        $sql = "DELETE FROM $table";

        if($where != null){
         echo   $sql .= " WHERE $where";  
        }

        if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->affected_rows);
            return true;
        }
        else{
            array_push($this->result, $this->mysqli->error);
            return false;
        }

       
    }
    else{
        return false;
    }

}

//function to select from database

public function select($table ,$rows= "*", $join = null, $where = null, $order=null,$limit=null){
    if($this->tableExist($table)){
        $sql = "SELECT $rows FROM $table";
        if($join != null){
            $sql .= "JOIN $join";
        }
        if($where != null){
            $sql .= "WHERE $where";
        }
        if($order != null){
            $sql .= "ORDER BY $order";
        }
        if($limit != null){
            $sql .= "LIMIT 0, $limit";
        }

        echo $sql;

        $query = $this->mysqli->query($sql);

        if($query){
        $this->result = $query->fetch_all(MYSQLI_ASSOC);
        return true;
        }
        else{
        array_push($this->result, $this->mysqli->error);
        return false;
        }
        }else{
        return false;
        }

}

public function sql($sql){

    $query = $this->mysqli->query($sql);

    if($query){
        $this->result = $query->fetch_all(MYSQLI_ASSOC);
        return true;
    }
    else{
        array_push($this->result, $this->mysqli->error);
        return false;
    }

}

private function tableExist($table){
    $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
    $tableInDb = $this->mysqli->query($sql);
    if($tableInDb){
        if($tableInDb->num_rows == 1){
            return true;

        }else{
            array_push($this->result,$table . "deos not exist in this database. ");
            return false;
        }
    }
}

public function getResult(){
    $val = $this->result;
    $this->result = array();
    return $val;
}

public function  __destruct(){

    if($this->conn){
        if($this->mysqli->close()){
            $this->conn = false;
            return true;
        }
    }else{
        return false;
    }

}
}

//class close

?>
