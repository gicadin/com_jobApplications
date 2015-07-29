<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<h1> SUIE </h1>

<?php echo $_POST["id"]; ?> </br>
<?php 
	echo $_POST["name"] . "</br>"; 
	echo "thest: "; 
	print_r($this->results);
	//print_r($this->results[0]);
	print_r($this->results[1]);

?>