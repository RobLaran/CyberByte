<?php
   if(isset($_SESSION['template'])) {
        if($_SESSION['template'] === 'one') {
            require_once 'header_one.php';
            require_once 'sub_header.php';
        } else {
            require_once 'header_two.php';
        } 
        
    }
?>