

<!--<input type="text" placeholder="name" name="name">-->
<!---->
<!--    <input type="text" placeholder="description" name="description">-->
<!---->
<!--    <input type="text" placeholder="created_at" name="created_at">-->
<!---->
<!--    <input type="submit" name="sub">-->
<!---->
<!--<br>-->


<?php
foreach ($rows as $el) {
    echo $el['name'] . ' <a href="edit.php?id=' . $el['id'] .'">Edit</a>'.
     ' <a href="delete.php?id=' . $el['id'] .'">Delete</a><br>';
}