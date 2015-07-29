<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$link = JRoute::_('index.php?option=com_jobApplications&view=jobApplication');

// Displays the last 100 applications	
for($i = $this->numOfRows-1; $i >= 0; $i--)
{	
	echo "<div class='container'> ";
	
	echo "<div class='row'>";
		echo "<div class='span6'>";
		echo (string)$this->results[$i]->jobTitle;
		echo "</div> </br></br>";
	echo "</div>";

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
		echo "<div class='span10'>";
		echo "Summary: </br> " . (string)$this->results[$i]->summary; 
		echo "</div>";
	echo "</div>";

	echo "<div class='row'>";
		echo "<div class='span10 align-right'>";
		
	?>
		<form action="<?php echo $link; ?>" method="POST">
		<input type="hidden" name="id" value="<?php echo (int)$this->results[$i]->id; ?>">
		<input type="hidden" name="name" value="<?php echo (string)$this->results[$i]->fname; ?>">
	<?php 
		echo "<button type='button' class='btn btn-default' style='float:right;'>Delete</button>";
		// echo "<button type='button' class='btn btn-default' style='float:right;'>Add to Favorites</button>";
		echo "<input type='submit' class='btn btn-default' style='float:right;' value='View'>";	
		echo "</form>";
		echo "</div>";
	echo "</div>";

	echo "</div></br>";

	/*
	echo "Date Applied: " .  
	$newString = (string)$this->results[$i]->fname;
	echo "Name: " . (string)$this->results[$i]->fname . " " . (string)$this->results[$i]->lname;
	//print_r($this->results[$i]->fname);
	//print_r($this->results["$i"]);
	*/
}
?>



<a href="<?php echo $link; ?>"> <h1> MUIE </h1> </a>



<?php
	/*
	$link = JRoute::_('index.php?option=com_jobApplications&task=jobAppications.edit&id=' . $row->id);
	echo JHtml::_('form.token');
	*/
?>