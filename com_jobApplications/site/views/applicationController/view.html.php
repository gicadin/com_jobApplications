<?php

/*
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class jobapplicationsViewapplicationController extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->msg = 'test';

		$input = array($_POST['fname'], $_POST['lname'], $_POST['email'],
						$_POST['phoneNumber'], $_POST['otherNumber'],
						$_POST['address'], $_POST['zipCode'] );

		$model = $this->getModel();
		$this->results = $model->addContactListToDB($input);

		parent::display($tpl); 
	}
}