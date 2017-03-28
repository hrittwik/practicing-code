<?php


function is_logged_in() {
    return isset($_SESSION['username']);
}

function validate_user_credentials($username, $password){
    return ($username === USERNAME and $password === PASSWORD );
}


?>
