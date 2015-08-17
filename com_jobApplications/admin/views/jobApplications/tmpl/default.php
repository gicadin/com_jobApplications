<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$jobApplicationLink = JRoute::_('index.php?option=com_jobapplications&view=jobApplication');
$filteredApplicationsLink = JRoute::_('index.php?option=com_jobapplications&view=filteredApplications'); 

?>

<div class='container'>
	<div class='row'>
		<form action='<?php echo (string)$filteredApplicationsLink; ?>' method='POST' id="adminForm">
			<input type="text" name="searchInput" size="20">
			<select name="column">
				<option value="name">Name</option>
				<option value="skills">Skills</option>
				<option value="resume">Resume</option>
			</select>
			<input type="submit" value="search">
		</form>
	</div>
</div><!-- container --> 

<?php

for($i = $this->numOfRows-1; $i >= 0; $i--)
{	

?>
	<div class='container' id='container-<?php echo (string)$this->results[$i]->id; ?>'> 

	<div class='row'>
		<div class='span6'>
		<?php echo (string)$this->results[$i]->jobTitle; ?>
		</div> </br></br>
	</div>

<?php 	

	echo "<div class='row'>";
		echo "<div class='span6'>";
		echo "Name: " . (string)$this->results[$i]->fname . " " . (string)$this->results[$i]->lname;
		echo "</div>"; 

		echo "<div class='span6'>";
		echo "Date Applied: " . (string)$this->results[$i]->date;
		echo "</div>";
	echo "</div>";

	echo "<div class='row'>";
		echo "<div class='span6'>";
		echo "Experience: " . (string)$this->results[$i]->experience; 
		echo "</div>";

		echo "<div class='span6'>";
		echo "Refered By: " . (string)$this->results[$i]->referedBy; 
		echo "</div>";
	echo "</div>";

	echo "<div class='row'>";
		echo "<div class='span12'>";
		echo "Summary: </br> " . (string)$this->results[$i]->summary; 
		echo "</div>";
	echo "</div>";

	echo "<div class='row'>";
		echo "<div class='span12 align-right'>";
		
	?>
		<form action="<?php echo $jobApplicationLink; ?>" method="POST">
		<input type="hidden" name="id" value="<?php echo (int)$this->results[$i]->id; ?>">
	
		<button type='button' class='btn btn-default' style='float:right;' onclick='ajaxDeleteEvent(<?php echo (int)$this->results[$i]->id; ?>)'>Delete</button>
		
	<?php 
		// echo "<button type='button' class='btn btn-default' style='float:right;'>Add to Favorites</button>";
		echo "<input type='submit' class='btn btn-default' style='float:right;' value='View'>";	
		echo "</form>";
		echo "</div>";
	echo "</div>";

	echo "</br></div>";

	/*
	echo "Date Applied: " .  
	$newString = (string)$this->results[$i]->fname;
	echo "Name: " . (string)$this->results[$i]->fname . " " . (string)$this->results[$i]->lname;
	//print_r($this->results[$i]->fname);
	//print_r($this->results["$i"]);
	*/
}
?>

<script>
	function ajaxDeleteEvent(finput)
	{
		$.ajax({
			url:"index.php?option=com_jobApplications&task=deleteApplication&id", 
			method:'POST',
			data: "id="+finput,
			success:
				function(data)
				{
					$("#container-"+finput).remove();
					console.log(data); 
				},
			error:
				function(e)
				{	
					console.log("u done goofed");
					console.log(e.message);
				}
		});
	}
</script>



<?php
	/*
	$jobApplicationLink = JRoute::_('index.php?option=com_jobApplications&task=jobAppications.edit&id=' . $row->id);
	echo JHtml::_('form.token');
	*/
?>