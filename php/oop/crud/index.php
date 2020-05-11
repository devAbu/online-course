<?php

require './classes/database.php';

$database = new Database;



/* $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 $_POST => $post */
if (isset($_POST['submit'])) {
    $ID = $_POST['ID'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    /* $database->query("INSERT INTO posts (title, body) values (:title, :body)"); ZA CREATE */
    $database->query("Update posts set title = :title, body = :body where ID = :id");
    $database->bind(':id', $ID);
    $database->bind(':title', $title);
    $database->bind(':body', $body);

    $database->execute();

    /* ZA CREATE if ($database->lastInsertId()) {
        echo 'Successfully posted';
    } */
}

if (isset($_POST['delete'])) {
    $ID = $_POST['deleteID'];

    $database->query("Delete from posts where ID = :id");
    $database->bind(':id', $ID);
    $database->execute();
}

$database->query("Select * from posts ");/* where ID = :id */
/* $database->bind(':id', 1); */

$rows = $database->resultSet();

?>

<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <input type="text" placeholder="ID" name="ID">
    <br>
    <input type="text" placeholder="Title" name="title">
    <br>
    <textarea name="body" cols="30" rows="10" placeholder="Body"></textarea>
    <input type="submit" value="Submit" name="submit">
</form>

<h1>Posts</h1>
<div>
    <?php
    foreach ($rows as $row) { ?>

        <br>
        <h2> <?php echo $row['title'] ?></h2>
        <p><?php echo $row['body'] ?> </p>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" value=" <?php echo $row['ID'] ?>" name="deleteID">
            <input type="submit" value="delete" name="delete">
        </form>
    <?php }
    ?>
</div>