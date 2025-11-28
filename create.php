<?php


$conn = mysqli_connect('localhost', 'root', '', 'prepare_stmt_db');

$stmt = mysqli_prepare($conn, "INSERT INTO users(username,email,password,reg_date) VALUES(?,?,?,?)");

if ($stmt) {
    $username = 'Ayomide Eliza';
    $email = 'ayomide@gmail.com';
    $password = '123';
    $reg_date = date('Y-m-d');


    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $reg_date);

    mysqli_execute($stmt);

    echo "New user created successfully";

    mysqli_stmt_close($stmt);
} else {
    echo "Error" . mysqli_error($error);
}
