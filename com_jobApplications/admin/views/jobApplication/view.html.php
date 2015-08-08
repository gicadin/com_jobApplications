<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

 /**
 * jobApplication view
 *
 * @since  0.0.1
 */

 class jobapplicationsViewjobapplication extends JViewLegacy
 {
 	/**
	 * Display the view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */

 	function display($tpl = null)
	{	
		/*
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
		*/

		//$this->results = $this->get("ApplicantQuery");

		$model = $this->getModel();
		$this->results = $model->getApplicantQuery($_POST['id']); 

		$this->resume = $model->getResume($_POST['id']); 

		$this->addToolBar();

		// Display the template
		parent::display($tpl);
	}

	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_("Job Application"));
		JToolBarHelper::back('Back'); 
		
	}
 }