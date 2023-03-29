<?php
session_start();


// print_r($_REQUEST);


// input collect
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];

// echo $detail;


$errors = [];
//  validation rules

if(empty($title)){
    // echo "where is your title?";
    $errors['title_error'] = "where is your title?";
}
elseif(strlen($title) >= 50){
        // echo "How long?";
        $errors['title_error'] = "How long?";
}

if(empty($detail)){
    // echo "where is your detail?";
    $errors['detail_error'] = "where is your detail?";
}

// print_r($errors);


// 
if(count($errors) > 0){
    
    // redirect back
    $_SESSION['form-error'] =$errors;

    $_SESSION['old'] = $_REQUEST;
    header("location:../index.php");
}
else{
    // move forward
}
