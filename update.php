<?php
include 'db.php'; 


$conn = mysqli_connect('localhost', 'root', '', 'prepare_stmt_db');

$stmt = mysqli_prepare($conn, "UPDATE users SET username = ? where id = ?");

if ($stmt) {
    $user_id = 11;
    $username = 'Ayomide Elizabeth';
  
    mysqli_stmt_bind_param($stmt, "si", $username, $user_id);

    mysqli_stmt_execute($stmt);

    echo "Updated user successfully";

    mysqli_stmt_close($stmt);
} else {
    echo "Error" . mysqli_error($error);
}
