<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

 $sql = 'delete from users where id='. $id ;
 $statement = $conn->exec($sql);

if ($statement){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'系統發生錯誤，請聯絡機房人員..'));
}
?>