<?php
if (!empty($_POST['send'])) {
	global $db;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message_user = $_POST['message'];

	$message = "Your contact information is received successfully.";
	$type = "success";
	$count = 0;
	$report = "Hi, " . $name . " thank you for contacting me";
	echo Alert();
}
function Alert()
{
	global $report, $count;

	echo '<script>setTimeout(function() {
            						$("#refresh").fadeOut(3000);
        							}, 3000);
    						  </script>';
	if ($count > 0) {
		echo '
            	<div id="refresh"  class="alert bg-danger" style="position:fixed; top:10px; right:10px; z-index:10000; width: auto;">
				<i class="icon fa fa-ban text-white"> &nbsp;' . $report . '</i></div>';
	} else {
		echo '<div id="refresh"  class="alert bg-success" style="position:fixed; top:10px; right:10px; z-index:10000; width: auto;">
				<i class="icon fa fa-check text-white"> &nbsp;' . $report . '</i></div>';
	}
	return;
}

if (isset($report)) {
	echo "<script>
					$(function() {
						$('body').on('click', '#submit', function() {
							document.body.innerHTML('Thank you for contacting me!')
						})
					})
				</script>";
}




require_once "index.php";
