<style>
ul.pagination {
    text-align:center;
    color:#829994;
}
ul.pagination li {
    display:inline;
    padding:0 3px;
}
ul.pagination a {
    color:#0d7963;
    display:inline-block;
    padding:5px 10px;
    border:1px solid #cde0dc;
    text-decoration:none;
}
ul.pagination a:hover,
ul.pagination a.current {
    background:#0d7963;
    color:#fff;
}
</style>
<?php
include_once('db.php');
include_once('function.php');
$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;
 
$per_page = 10; // Set how many records do you want to display per page.
 
$startpoint = ($page * $per_page) - $per_page;
 
$statement = "`shinedata` ORDER BY `id` DESC"; // Change table name according to your database table.
 
$results = mysqli_query($link,"SELECT * FROM {$statement} LIMIT {$startpoint} , {$per_page}");
 
if (mysqli_num_rows($results) == 0) {
     
    echo "No records are found.";
 
} else {
     
    // displaying records.
    while ($row = mysqli_fetch_array($results)) {
        echo $row['name'] . '<br>';
    }
 
}
 
// displaying paginaiton.
echo pagination($statement,$per_page,$page);
?>