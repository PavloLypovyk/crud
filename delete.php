<?php

require_once 'model/model.php';

$id = $_GET['id'];
deleteById($id);

header('Location: index.php');
//require_once 'view/indexTemplate.php';