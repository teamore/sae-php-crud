<?php
include_once('./inc/header.php');
include_once('./inc/list.php');
?>
<form action='create.php' method='post'>
    <input type='text' name='title' placeholder='enter title'>
    <input type='text' name='author' placeholder='enter name'>
    <textarea name='content' placeholder='enter content'></textarea>
    <input type='submit'>
</form>