<?php

$email = $_POST['email'];
$fullname = $_POST['fullname'];
$birthdate = $_POST['birthdate'];

$uploadDir = 'uploads/';
$fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
    if (addUser($email, $fullname, $uploadFile, $birthdate)) {
        header('Location: users');
    } else {
        echo "Error creating user.";
    }
} else {
    echo "Error uploading file.";
}
