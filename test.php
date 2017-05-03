<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './src/DBConnection.php';

            $sql = "Update product set img='' where product_id='184'";

            if ($conn->query($sql) === TRUE) {
                echo "Success";
            } else {
                echo "Error " . mysqli_error($conn);
            }
            ?>
    </body>
</html>
