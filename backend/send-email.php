<?php
include('smtp/PHPMailerAutoload.php');
if(isset($_POST['send'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	
	echo smtp_mailer($name,$email,$msg);
}


function smtp_mailer($name,$to, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "mnibras345@gmail.com"; //username
	$mail->Password = "yphn ggpz xydi pxep";
	$mail->SetFrom("mnibras345@gmail.com"); //username
	$mail->Subject = $name;
	$mail->Body =$msg;
	$mail->AddAddress($to); //client email
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>