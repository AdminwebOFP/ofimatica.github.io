<?php 

//vars
$subject = $_POST['subject'];
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

//data
$msg = "Nombres: "  .$_POST['name']    ."<br>\n";
$msg .= "Email: "  .$_POST['email']    ."<br>\n";
$msg .= "Web: "  .$_POST['web']    ."<br>\n";
$msg .= "Comentarios: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail
foreach($to as $mail){
   mail($mail, $subject, $msg, $headers);
}

?>
