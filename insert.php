<html>
<body>
<?php
$db = pg_connect("host=140.119.163.105 port=5432 dbname=book_sale user=jack password=jack850912");
$query = "INSERT INTO author (author_name) VALUES ('$_POST[fname]')";
$pg_query($query); 
?>
</body>
</html>