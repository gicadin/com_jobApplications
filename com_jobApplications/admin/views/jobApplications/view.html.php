<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');
/**
 * jobApplications view
 *
 * @since  0.0.1
 */
class jobapplicationsViewjobapplications extends JViewLegacy
      
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

		/*
		if ( isset($_POST['id']) )
		{
			$model = $this->getModel();
			$this->deleteApplication = $model->deleteApplication($_POST['id']);
			echo "123muie123";
		}
		*/
		
		$this->addToolBar();

		// Display the template
		parent::display($tpl);
	}

	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_("Job Applications"));
		JToolBarHelper::custom('jobapplications.addApplicationToDB', 'generic.png', 'generic.png', 'Add to DB', false); 
	}
}