<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();

	include 'conn.php';
	
	$statement = $conn->query('select count(*) from users');
	
    foreach($statement as $row){
      $result["total"] = $row[0] ;
    }

	$statement = $conn->query('select * from users limit '.$offset.','.$rows);
	$items = array();
    foreach($statement as $row) {
       array_push($items, $row);
     //  echo $row['lastname']." ".$row['firstname']."<br>";
    }

	$result["rows"] = $items;
	echo json_encode($result);
?>