<?php
/*
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class jobapplicationsViewjobApplications extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->msg = 'Test';

		parent::display($tpl);
	}
}