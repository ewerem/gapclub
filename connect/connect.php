<?php 

$pdo = new pdo('mysql:host=localhost;dbname=gap','root','');

function contact($pdo, $fn, $ph, $em, $msg){

	$chk = $pdo->prepare("SELECT * FROM contact WHERE name = '$fn' AND phone = '$ph' AND msg = '$msg'");
	$chk->execute();

	if($chk->rowCount() > 0){
		echo'<script>swal("Message Sent Already", "You have submitted this message before!", "error");</script>';
	}else{

		$ins = $pdo->prepare("INSERT INTO contact (name,phone,email,msg,time) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$ins->bindParam(1, $fn);
		$ins->bindParam(2, $ph);
		$ins->bindParam(3, $em);
		$ins->bindParam(4, $msg);
		$ins->execute();

		if($ins){
			echo'<script>swal("Successful", "Message Sent Successfully!", "success");</script>';
		}
	}
}//---------------------------



?>