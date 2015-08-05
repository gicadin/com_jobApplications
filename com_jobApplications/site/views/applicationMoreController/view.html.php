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
		$input = array($_POST['experience'], $_POST['referedBy'], $_POST['summary'],
						$_POST['education'], $_POST['skills'] );

		$model = $this->getModel();
		$this->results = $model->addMoreInfoToDB($input, $_POST['id']);

		parent::display($tpl); 
	}
}