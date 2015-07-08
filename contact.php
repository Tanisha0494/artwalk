<?php 

$page = "Contact";
require_once('includes/header.php');

function clean_input( $input ){
	return strip_tags(trim($input));
}

$valid = true;

//parse the form 
if($_POST['did_submit']){
	$fname = clean_input($_POST['fname']);
	$lname = clean_input($_POST['lname']);
	$email = clean_input($_POST['email']);
	$qandc = clean_input($_POST['qandc']);
	$privacy = clean_input($_POST['privacy']);

	$value = true;

	if(strlen($fname) == 0 ){
		$valid=false;
		$errors['fname'] ='Please fill in your first name';
	}

	if(strlen($lname) == 0){
		$valid = false;
		$errors['lname'] = 'Please fill in your last name';
	}

	if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
		$valid = false;
		$errors['email'] = 'Please provide a valid email address like name@email.com';
	}
	if($privacy != 1){
		$valid = false;
		$errors['privacy'] = 'You must agree to the Terms of Services and Privacy Policy.';
	}

	if($valid){
		$status='success';
		$message = 'Success your form has been sent you will received a conformation email shortly.';
	}else{
		$status='error';
		$message="Your form couldn't be sent. Please fix any errors below and try again.";
	}

	if($valid){
		$body = "ArtWalk NTC Info for $fname $lname";

		$subject= "ArtWalk NTC Request";

		mail ("randomness2784@gmail.com","$subject","$body","$email");
		mail ("$email","$subject","$body","randomness2784@gmail.com");
	}
}

?>
<main>
<h1>Contact Us</h1>

<h2>For more information on the artwalk NTC</h2>

<section id="form">
<h2 class="hide">Contact Form</h2>
	<?php 
	if( isset($message) ){ ?>

<section class="<?php echo $status; ?>">
<h2 class="hide">Error/Success Messages</h2>
	<p><?php echo $message; ?></p>

	<ul id ="errors">

<?php 
	if( isset($errors) ){ ?>

		<?php foreach( $errors as $error ){ ?>

		<li><?php echo $error; ?></li>

						<?php } ?>

		<?php } ?>
	</ul>
	
</section>

		<?php }//end if message exists ?>

<form name="cform" id="cform" action="#form" method="post">

	<label for="fname">First Name:</label>
	<input type="text" name="fname" id="fname" value="">
	
	<label for="lname">Last Name:</label>
	<input type="text" name="lname" id="lname" value="">
	
	<label for="email">Email Address:</label>
	<input type="email" name="email" id="email" value="">

	<label for="qandc">Question and Comments</label>
	<textarea id="qandc" name="qandc" spellcheck="true"></textarea>
	
	<label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="1" >I have read the <a href="terms.php">Terms of Use and Privacy Policy.</a></label>

	<button type="submit" value="Submit Form">Submit Form</button>

	<input type="hidden" name="did_submit" value="1">
	
</form>

</section>

</main>

<?php include_once('includes/footer.php') ?>