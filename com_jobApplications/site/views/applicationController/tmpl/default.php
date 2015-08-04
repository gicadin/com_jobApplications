<?php

defined('_JEXEC') or die('Restricted access');

?>

<div class="container">

	<form action="index.php" method="POST" enctype="multipart/form-data"> 

		<h2 style="margin-left:30px;" class="title"><a>Job Application</a></h2>

		<div class="row"> 
			<div class="span4">
				<label for="experience">Cumulative Experience: </label>
				<input placeholder="recommended" id="experience" maxlength="100" size="30" type="text" value="" name="experience" />
			</div>

			<div class="span4">
				<label for="experience">Refered By: </label>
				<input placeholder="recommended" id="experience" maxlength="100" size="30" type="text" value="" name="experience" />
			</div>
		</div> <!-- row --> 

		<div class="span8">
			<label for="experience">Cover Letter / Summary: </label>
			<input placeholder="recommended" id="experience" maxlength="100" size="30" type="text" value="" name="experience" />
		</div>

		<div class="span4">
			<label for="resume">Upload Resume: </label>
			<input type="file" name="resume" id="resume" />
		</div>

		<div class="span8 center">
			<input name="Submit" class="btn" value="Submit" type="submit" />
		</div>

	</form>

</div> <!-- container --> 