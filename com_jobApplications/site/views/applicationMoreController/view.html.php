<?php
/*
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class jobapplicationsViewapplicationMoreController extends JViewLegacy
{
	function display($tpl = null)
	{
		// check if file uploaded
		if ( isset($_FILES['file']) && $_FILES['file']['size'] > 0 )
		{
			$input = array($_POST['experience'], $_POST['referedBy'], $_POST['summary'],
						$_POST['education'], $_POST['skills'],
						$_FILES['file']);
		} else {
			$input = array($_POST['experience'], $_POST['referedBy'], $_POST['summary'],
						$_POST['education'], $_POST['skills'] );	
		}

		echo var_dump($input);

		$model = $this->getModel();
		$this->results = $model->addMoreInfoToDB($input, $_POST['id']);

		parent::display($tpl); 
	}
}