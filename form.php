<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRUD Operations With PHP and MySql - By Cleartuts</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

    <div id="body">
        <div id="content">
            <table align="center">
                <th>Name</th>
                <th>Description</th>
                <th>create</th>
                <th colspan="2">Operations</th>
                </tr>
                <?php
                $pdo_conn = new PDO("mysql:host=127.0.0.1;dbname=CRUD", 'root', 'root');
                $sql='SELECT * FROM article';
                $pdo_statement=$pdo_conn->prepare($sql);
                $pdo_statement->execute();
                $result_set=$pdo_statement->fetchAll();
                while($row=$result_set)
                {
                    ?>
                    <tr>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>

</center>
</body>
</html>