<?php
rename('data/'.$_POST['old_title'], $_POST['title']);
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('location: index.php? id='.$_POST['title']);

?>