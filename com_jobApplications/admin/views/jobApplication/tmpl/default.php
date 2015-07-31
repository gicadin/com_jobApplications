<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<h1> SUIE </h1>

<?php echo $_POST["id"]; ?> </br>
<?php 
	 
	print_r($this->results);
	//print_r($this->results[0]);
	//print_r($this->results[1]);

?>

<div class="container">

	<div class="row">
		<div class="span10">
			Name (first last): <?php echo (string)$this->results[0]->fname . " " . (string)$this->results[0]->lname; ?>
		</div>
	</div> <!-- row --> 

	<div class="row">
		<div class="span10">
			Contact Information
		</div>
		<div class="span10">
			Email: <?php echo (string)$this->results[0]->email ?> </br>
			Phone Number: <?php echo (string)$this->results[0]->phoneNumber ?> </br>
			Secondary Phone: <?php echo (string)$this->results[0]->otherNumber ?> </br>
			Address: <?php echo (string)$this->results[0]->address ?> </br>
			Zip / Postal: <?php echo (string)$this->results[0]->zipCode ?> </br>
		</div>
	</div> <!-- row --> 
	<br> 
	<div class="row">
		<div class="span10">
			Description:
		</div>
		<div class="span10">

		</div>
	</div> <!-- row --> 
	
	<div class="row">
		<div class="span10">
			Experience:
		</div>
		<div class="span10">

		</div>
	</div> <!-- row --> 

	<div class="row">
		<div class="span10">
			Education:
		</div>
		<div class="span10">

		</div>
	</div> <!-- row --> 

	<div class="row">
		<div class="span10">
			Skills:
		</div>
		<div class="span10">

		</div>
	</div> <!-- row --> 

</div> <!-- container --> 



