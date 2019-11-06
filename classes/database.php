<?php
require_once "config.php";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function formatString($string){
  $string = "'" . $string . "'";
  return $string;
}

function formatParams($params){
    $sqlParams = "";
    for ($i=0; $i<count($params)-1; $i++) {
        $sqlParams .= $params[$i]. ",";
    }
    $sqlParams .= $params[count($params)-1];
    return $sqlParams;
}

function simpleQuery($sql){
    global $conn;
    return $conn->query($sql);
}

function selectAll($table){
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1) {
        return $result;
    }
}

function select($fields, $table){
    global $conn;
    $sqlFields = formatParams($fields);
    $sql = "SELECT $sqlFields FROM $table";
    return $conn->query($sql);
}

function selectByField($table, $field, $value){
    global $conn;
    $sqlFields = formatParams($fields);
    $sql = "SELECT * FROM $table WHERE $field='$value'";
    return $conn->query($sql);
}

function insert($fields, $values, $table)
{
    global $conn;
    $sqlFields = formatParams($fields);
    $sqlValues = formatParams($values);
    $sql = "INSERT INTO $table ($sqlFields) VALUES($sqlValues)";
    if($result = $conn->query($sql)){
      $id =  $conn->insert_id;
      return $id;
    }
    else {
<<<<<<< HEAD
      echo "NO";
      echo $result->error;
=======
        echo $result->error;
        http_response_code(400);
>>>>>>> 4ef6c772e5adbbb311b35855bff5dbdb4525797b
    }
}

function update($fields, $values, $table, $idField, $id){
    global $conn;
    $params = "";
    for ($i = 0 ;$i < count($fields)-2; $i++) {
        $params .= $fields[$i]."=".$values[$i].",";
    }
    $params .= $fields[$i]."=".$values[$i];
    $sql = "UPDATE $table SET $params WHERE $idField=$id";
    echo $sql;
    if($result = $conn->query($sql)){
      echo "Éxito";
      return $result;
    }
    else {
      http_response_code(400);
    }
}

function delete($table, $idField, $id){
    global $conn;
    $sql = "DELETE FROM $table WHERE $idField=$id";
    return $conn->query($sql);
}
?>
