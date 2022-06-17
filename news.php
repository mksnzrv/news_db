<?php

include "db.php";
$id = (int)$_GET['id'];

$result = mysqli_query($db, "Select * from news where id = $id");

$row = mysqli_fetch_assoc($result);
?>

    <h2>News</h2>

    <div>
        <b><?=$row['title']?></b>
        <p><?=$row['text']?></p>
    </div>
    <hr>
