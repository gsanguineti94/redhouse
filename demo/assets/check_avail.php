<?php
if(!$_POST) exit;
//print_r($_POST);
error_reporting(0);
$leng = 'en_US';
if( isset($_POST['lan']) && $_POST['lan'] == 'es' ){
    $leng = 'es_AR';
}
setlocale(LC_ALL, $leng.'.UTF8');
bindtextdomain("dobke", "/locale");
textdomain("dobke");
// Email verification, do not edit.
function isEmail($email_booking ) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email_booking ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
$room_type     = $_POST['room_type'];
$check_in     = $_POST['check_in'];
$check_out    = $_POST['check_out'];
$adults    = $_POST['adults'];
$children   = $_POST['children'];
$room_type = $_POST['room_type'];
$name_booking   = $_POST['name_booking'];
$email_booking   = $_POST['email_booking'];

if(trim($check_in) == '') {
	echo '<div class="error_message">'._("Enter").' '._("check in date").'.</div>';
	exit();
} else if(trim($check_out ) == '') {
	echo '<div class="error_message">'._("Enter").' '._("check out date").'.</div>';
	exit();
} else if(trim($adults ) == '') {
	echo '<div class="error_message">'._("Enter").' '._("adults number").'.</div>';
	exit();
} else if(trim($name_booking ) == '') {
	echo '<div class="error_message">'._("Enter").' '._("your").' '._("name").' '._("and").' '._("last name").'.</div>';
	exit();
} else if(trim($email_booking) == '') {
	echo '<div class="error_message">'._("Please").' '._("enter").' '._("a valid email address").'.</div>';
	exit();
} else if(!isEmail($email_booking)) {
	echo '<div class="error_message">'._("You").' '._("have entered an invalid e-mail address").'. '._("Please").' '._("try again").'.</div>';
	exit();
} 


//$address = "HERE your email address";
$address = "redhousecalafate@gmail.com";


// Below the subject of the email
$e_subject = 'Te contactaron desde el sitio. Nombre: ' . $name_booking . '.';

// You can change this if you feel that you need to.
$e_body = "You have been contacted by $name_booking with additional message as follows." . PHP_EOL . PHP_EOL;
$e_content = "Check in: $check_in\nCheck out: $check_out\nTipo de habitación: $room_type\nCantidad de adultos: $adults\nCantidad de niños: $children" . PHP_EOL . PHP_EOL;
$e_reply = "Podés contactar a $name_booking via email: $email_booking.";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email_booking" . PHP_EOL;
$headers .= "Reply-To: $email_booking" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email_booking";
$usersubject = "Gracias/Thank You";
$userheaders = "From: redhousecalafate@gmail.com\n";
$userheaders .= "MIME-Version: 1.0" . PHP_EOL;
$userheaders .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$userheaders .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
$usermessage = "Gracias por contactar a Red House Hostel. Vamos a contestarle lo antes posible. Thank you for contacting Red House Hostel. We will reply shortly with more details. Aquí hay un resumen de su solicitud. Here a summary of your request: \n\n$e_content.  \n\n llame/Call +54 02902 495 922 por consultas/for further information.";
mail($user,$usersubject,$usermessage,$userheaders);

if(mail($address, $e_subject, $msg, $headers)) {

	// Success message
	echo "<div id='success_page' style='padding:30px; text-align:center; font-size:18px; '>";
	echo "<div style='font-size:60px; font-weight:normal;color:#acd373;'><i class='icon_set_1_icon-76'></i></div>";
	echo "<strong >Email "._("Sent").".</strong><br>";
	echo _("Thank you")." <strong>$name_booking</strong>,<br>"._("We will contact you shortly").".";
	echo "</div>";

} else {

	echo 'ERROR!';

}
