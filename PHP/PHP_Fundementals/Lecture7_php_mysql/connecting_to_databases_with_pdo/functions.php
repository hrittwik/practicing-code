<?php

require 'config.php';

$letter = 'J%';

try{
    $conn = new PDO(
                'mysql:host=localhost;dbname=practice',
                $config['DB_USERNAME'],
                $config['DB_PASSWORD']
            );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->errorCode();

    // $stmt = $conn->prepare('SELECT * FROM users WHERE username LIKE :letter');
    // $stmt-> setFetchMode(PDO::FETCH_OBJ);

    $stmt = $conn->prepare('INSERT INTO users(username) VALUES(:username)');
    $stmt->bindParam('username', $username, PDO::PARAM_STR);

    $users = array('Rachel', 'Monica', 'Pheobe');
    foreach ($users as $usernem) {
        $stmt->execute();
    }

    // $stmt->execute(array(
    //     'id' => $id
    // ));
    //
    // $stmt->bindParam(':letter', $letter, PDO::PARAM_STR);
    // $stmt->execute();

    // $result = $stmt->fetchAll();
    // print_r($result);

    // while($row = $stmt->fetch()){
    //     print_r($row);
    // }

} catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}

?>
