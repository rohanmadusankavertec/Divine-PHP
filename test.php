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
$num_rec_per_page=10;
mysql_connect('localhost','root','123');
mysql_select_db('divine');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM product LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query
?> 
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>            
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT * FROM product"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='pagination.php?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='test.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='test.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>

    </body>
</html>
