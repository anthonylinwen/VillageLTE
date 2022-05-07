<?php

$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$phone = htmlspecialchars($_REQUEST['phone']);
$email = htmlspecialchars($_REQUEST['email']);

include 'conn.php';

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
	$sql = 'insert into users(firstname,lastname,phone,email) values ("'.$firstname.'","'.$lastname.'","'.$phone.'","'.$email.'")' ;
	$statement = $conn->exec($sql);

  //  foreach($statement as $row){
  //    $result = $row[0] ;
  //  }

    $id = $conn->lastInsertId();

	if ($statement){
		echo json_encode(array(
			'id' => $id,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'phone' => $phone,
			'email' => $email
		));
	} else {
		echo json_encode(array('errorMsg'=>'系統發生錯誤，請聯絡機房人員...'));
	}
} else {
	echo json_encode(array('errorMsg'=>'錯誤資料.'));
}
?>