<?php

$registration = array(
    's_app_id' => "'" . $_POST['inp_appid'] . "'",
    's_tes_number' => "'" . $_POST['inp_tesno'] . "'",
    's_student_id' => "'" . $_POST['inp_sid'] . "'",
    's_first_name' => "'" . $_POST['inp_fname'] . "'",
    's_last_name' => "'" . $_POST['inp_lname'] . "'",
    's_ext_name' => "'" . $_POST['inp_ename'] . "'",
    's_middle_name' => "'" . $_POST['inp_mname'] . "'",
    's_gender' => "'" . $_POST['inp_gender'] . "'",
    's_phone' => "'" . $_POST['inp_contact'] . "'",
    's_award_batch' => "'" . $_POST['inp_batch'] . "'",
    's_status' => "'" . $_POST['inp_status'] . "'",
);

save($registration);

function save($data)
{
    include("../config/database.php");

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO t_students ($attributes) VALUES ($values)";

    try {
        if ($conn->query($query) === TRUE) {
            header('location: /registration.php?success');
            exit(); 
        } 
    
    }catch (Exception $e) {
    
        header('location: /registration.php?invalid');
        exit();
    }
}