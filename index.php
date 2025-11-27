<?php

$conn = mysqli_connect('localhost', 'root', '', 'sql_injection');

$sql = "SELECT * FROM users WHERE username = 'John Doe'";

$result = mysqli_query($conn, $sql);

var_dump($result);

?>

<ul>
    <?php while($user = mysqli_fetch_assoc($result)): ?>

        <li><?php echo $user['username']; ?></li>

    <?php endwhile; ?>
</ul>