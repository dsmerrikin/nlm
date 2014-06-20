<?
//the email where the mail should go
$mail_to 	= 'mnorwood@norwoodlandscape.com';
//who the mail is from
$mail_from 	= '"Website Info Request" <mnorwood@norwoodlandscape.com>';
//What the subject should say
$mail_subj	= 'Website Info Request';
//where the page should be redirected to after submission
$redirect	= 'thankyou.htm';
//A couple lines before the body of the mail
//$data 		= "You can use this field for the data returned above the form\n";
//$data 		.= "If you want to have multiple lines, make sure it is defined as \$data .= \"more text\"\n\n";
//$data 		.= "_________________________________________\n";
// Build hte body of the email, but first get rid of the Submit button
if (isset($_POST['Submit'])) {
	array_pop($_POST);
	foreach($_POST as $key => $value) {
		$data .= sprintf("%-25.25s: %-s\n", $key, stripslashes($value));
	}
}
// Add something, after the body
//$data 		.= "_________________________________________\n";
// send the mail
mail($mail_to,$mail_subj,$data,"From: $mail_from \r\n");
// redirect the page.
header("Location: ".$redirect);
?>