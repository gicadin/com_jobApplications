<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 /**
 * resume view
 *
 * @since  0.0.1
 */
class jobapplicationsViewresume extends JViewLegacy
{
	function display($tpl = null)
	{
		if ( isset($idNumber) )
		{
			$model = $this->getModel();
			$this->resume = $model->getResume($idNumber);
			header("Content-type: application/pdf");
			header("Content-Disposition: attachment;");
			echo $this->resume[0]->fileContent;
		} else {
			echo "idNumber not set";
		}
		
		// Display the template
		// parent::display($tpl);
	}
}