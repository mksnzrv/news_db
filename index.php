<?php
include "db.php";


if ($_GET["action"] == "delete") {
    $id = (int)$_GET['id'];
    $result = mysqli_query($db, "delete from news where id = $id");
    header("Location: index.php");
    die();

}

$result = mysqli_query($db, "Select * from news");

?>

<h2>News</h2>
<?php while ($row = mysqli_fetch_assoc($result)):?>
<div>
    <b><a href="news.php?id=<?=$row['id']?>"><?=$row['title']?></a>
        <a href="index.php?id=<?=$row['id']?>&action=delete">[X]</a>
    </b>

</div>
    <hr>
<?php endwhile;?>