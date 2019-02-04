<?php 




function sendEmail($to, $from, $subject,$message,$header){
$flagMailSent = mail($to , $from, $message,$header);
if($flagMailSent == true){
print 'Email sent successfully.';

}else{
print 'Email sending faild.';
}
}

	if (isset($_POST['submit'])) {
		$to = 'deorhutc@gmail.com';
		$name=$_POST['vname'];
		$from= $_POST['vemail'];
		$subject=$_POST['sub'];
		$mobile= $_POST['number'];
		$message=$_POST['msg'];
$header = "From :$from\r\n";
	$header .="Reply-To:$from\r\n";
		
		
	
sendEmail($to, $from, $subject, $message, $header);
			echo '<script language="javascript">';
echo 'alert("Thank you for contact us. we will get back to shortly")';
echo '</script>';
		
		}
		
		
		else{
			
		}

?>
