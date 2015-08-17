<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

class jobapplicationsViewfilteredapplications extends JViewLegacy
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

		$model = $this->getModel(); 
		$this->results = $model->searchColumnDB($_POST['searchInput'], $_POST['column']); 
		
		$this->addToolBar();
		
		parent::display($tpl);
	}

	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_("Job Applications"));
		JToolBarHelper::back('Back'); 
				
	}	
}