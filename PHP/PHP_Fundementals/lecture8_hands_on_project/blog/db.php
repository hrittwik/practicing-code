<?php namespace Blog\DB;

require 'config.php';

function connect($config){
    try {
        $conn = new \PDO('mysql:host=localhost;dbname=blog',
                        $config['DB_USERNAME'],
                        $config['DB_PASSWORD']);

        $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $conn;
    } catch (Exception $e) {
        return false;
    }
}

function query($query, $bindings, $conn){
    $stmt = $conn->prepare($query);
    $stmt->execute($bindings);

    return ($stmt->rowCount() > 0) ? $stmt : false;
    // $results = $stmt->fetchAll();
    // return $results ? $results : false;
}

function get($tableName, $conn, $limit = 10){
    try {
        $result = $conn->query("SELECT * FROM $tableName ORDER BY id DESC LIMIT $limit ");
        return ($result->rowCount() > 0) ? $result : false;
    } catch (Exception $e) {
        return false;
    }
}

function get_by_id($id, $conn){
    $query = query(
        'SELECT * FROM posts WHERE id = :id LIMIT 1',
        array('id' => $id),
        $conn
    );

    if($query) return $query -> fetchAll();
}

?>
