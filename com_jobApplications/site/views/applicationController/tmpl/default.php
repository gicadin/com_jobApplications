<?php

defined('_JEXEC') or die('Restricted access');

?>

<div class="container-fluid">

	<form action="index.php?option=com_jobapplications&view=applicationMoreController" method="POST" enctype="multipart/form-data"> 

		<h2 style="margin-left:30px;" class="title"><a>Job Application</a></h2>

		<div class="span4">
			<label for="experience">Cumulative Experience: </label>
			<input placeholder="recommended" id="experience" maxlength="100" size="30" type="text" value="" name="experience" />
		</div>

		<div class="span4">
			<label for="experience">Refered By: </label>
			<input placeholder="recommended" id="experience" maxlength="100" size="30" type="text" value="" name="referedBy" />
		</div>
		
		<div class="span8">
			<label for="experience">Cover Letter / Summary: </label>
			<input placeholder="recommended" id="experience" maxlength="2555" size="30" type="text" value="" name="summary" />
		</div>

		<div class="span8">
			<label for="education">Education: </label>
			<input id="education" maxlength="255" size="30" type="text" value="" name="education" />
		</div>

		<div class="span8">
			<label for="skills">Experience / Skills: </label>
			<input id="skills" maxlength="255" size="30" type="text" value="" name="skills" />
		</div>

		<!-- <?php  ?> --> 

		<!-- NOT IMPLEMENTED YET --> 
		<!-- NOT IMPLEMENTED YET --> 
		<!-- 
		<div class="span4">
			<label for="resume">Upload Resume: </label>
			<input type="file" name="resume" id="resume" />
		</div>
		-->

		<input type="hidden" name="id" value="<?php echo $this->applicationId; ?>" />

		<div class="span8 center">
			<input name="Submit" class="btn" value="Submit" type="submit" />
		</div>

	</form>

</div> <!-- container --> 