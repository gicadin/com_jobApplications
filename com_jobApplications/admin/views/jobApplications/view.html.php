<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * jobApplications view
 *
 * @since  0.0.1
 */
class jobapplicationsViewjobApplications extends JViewLegacy
      
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
 		
 		$this->numOfRows = $this->get("ApplicationsNumber");
		$this->results = $this->get("ApplicationsQuery");

		$model = $this->getModel();
		$this->deleteApplication = $model->deleteApplication($_POST['id']);


		$this->addToolBar();

		// Display the template
		parent::display($tpl);
	}

	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_("Job Applications"));
		
	}
}