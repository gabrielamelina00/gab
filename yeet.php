<?php
$x = $_POST['x'];


if ($x == '1') {
	//home
    include 'haha.php';

} else if ($x == '2') {
	//payment
    
    include 'payment.php';
}
else if ($x == '3') {
	//assignment
    include 'assignment.php';
}
else if ($x == '4') {
	//profile
    include 'account.php';
}
 else {
	echo '';
}
?>