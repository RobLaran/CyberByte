<?php

$db = new mysqli('localhost', 'root', '', 'cyberbyte_db');

if ($db->connect_error) {  
    die($db->connect_error);
}

return $db;