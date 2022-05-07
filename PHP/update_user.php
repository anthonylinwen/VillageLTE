<?php
$id = intval($_REQUEST['id']);
$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$phone = htmlspecialchars($_REQUEST['phone']);
$email = htmlspecialchars($_REQUEST['email']);

//$id = 1 ;
//$firstname = htmlspecialchars('firstname');
//$lastname = htmlspecialchars('lastname');
//$phone = htmlspecialchars('phone');
//$email = htmlspecialchars('aa@n.b');


include 'conn.php';

 $sql = 'update users set firstname="'.$firstname.'",lastname="'.$lastname.'",phone="'.$phone.'",email="'.$email.'" where id='. $id ;
 $statement = $conn->exec($sql);



if ( $statement=true){
	echo json_encode(array(
		'id' => $id,
		'firstname' => $firstname,
		'lastname' => $lastname,
		'phone' => $phone,
		'email' => $email
	));
} else {
	echo json_encode(array('errorMsg'=>'系統發生錯誤，請聯絡機房人員..'));
}



?>