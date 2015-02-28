<html>
<body>
<?php
include('config.php');
$query1=mysql_query("select id, name, password from logintb");
echo "<table width=30% border=1 rules=all><tr bgcolor=orange style='font-family:verdana;'><td>Name</td><td>password</td><td colspan=2>Action<a href='add.php' style='float:right;'>Add</a></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['name']."</td>";
echo "<td>".$query2['password']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>Delete</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>