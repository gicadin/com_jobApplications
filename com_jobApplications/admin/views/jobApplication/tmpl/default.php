<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<?php 
	 
	//print_r($this->results);
	//print_r($this->results[0]);
	//print_r($this->results[1]);

?>

<div class="container">

	<div class="row">
		<div class="span12">
			<?php echo (string)$this->results[0]->fname . " " . (string)$this->results[0]->lname; ?>
		</div>
	</div> <!-- row --> 

	<div class="row">
		<div class="span12">
			Contact Information
		</div>
		<div class="span12">
			Email: <?php echo (string)$this->results[0]->email ?> </br>
			Phone Number: <?php echo (string)$this->results[0]->phoneNumber ?> </br>
			Secondary Phone: <?php echo (string)$this->results[0]->otherNumber ?> </br>
			Address: <?php echo (string)$this->results[0]->address ?> </br>
			Zip / Postal: <?php echo (string)$this->results[0]->zipCode ?> </br>
		</div>
	</div> <!-- row --> 
	<br> 
	<div class="row">
		<div class="span12">
			Description: 
		</div>
		<div class="span12">
			<?php echo (string)$this->results[0]->description ?> 
		</div>
	</div> <!-- row --> 
	
	<div class="row">
		<div class="span12">
			Experience: <?php echo (string)$this->results[0]->experience ?> 
		</div>
		<div class="span12">

		</div>
	</div> <!-- row --> 

	<div class="row">
		<div class="span12">
			Education: 
		</div>
		<div class="span12">
			<?php echo (string)$this->results[0]->education ?> 
		</div>
	</div> <!-- row --> 

	<div class="row">
		<div class="span12">
			Skills:
		</div>
		<div class="span12">
			<?php echo (string)$this->results[0]->skills ?> 
		</div>
	</div> <!-- row --> 

	<div class="row">
		<a href="index.php?option=com_jobapplications&view=resume?idNumber=<?php echo $_POST['id']; ?>">
		<button type='button' class='btn btn-default' onclick='#'>View Resume</button>
		</a>
		
		<?php 
			var_dump($this->resume);
			echo (string)$this->resume[0]->fileType;
			//header("Content-type: ".(string)$this->resume[0]->fileType);
			//echo $this->resume[0]->fileContent; 
		?>	
	</div>


</div> <!-- container --> 



