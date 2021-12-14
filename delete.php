<?php
    require_once 'db/conn.php';
    if(!$_GET['id']){
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        //Get ID values
        $id = $_GET['id'];

        // Call Delete function
        $result = $crud->deleteAttendee($id);
        //Redirect to List
        if($result)
        {
            header("Location: viewrecords.php");
        }
        else{
            echo '';
        }
    }
?>