<?php
include 'db.php';


$conn = mysqli_connect('localhost', 'root', '', 'prepare_stmt_db');

$stmt = mysqli_prepare($conn, "DELETE FROM  users where id = ?");

if ($stmt) {
    $user_id = 11;

    mysqli_stmt_bind_param($stmt, "i", $user_id);

    mysqli_stmt_execute($stmt);

    echo "User deleted successfully";


    mysqli_stmt_close($stmt);
} else {
    echo "Error" . mysqli_error($error);
}
