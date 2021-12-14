<?php
require_once 'db/conn.php';    
//Get values fro, post operation
if (isset($_POST['submit'])){
    //Extract Values from the $_POST Array
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $speciality = $_POST['speciality'];

    //Call Crud function
    $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $speciality);

    //Redirect to viewrecords.php
    if($result){
        header("Location: viewrecords.php");
    }

        else{                                                                                                                            
            //echo 'error';
            include 'includes/errormessage.php';
        }
    }
    else{
        echo 'error';
    }    


?>