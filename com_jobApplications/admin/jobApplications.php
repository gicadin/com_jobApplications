<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_jobApplication
 *
*/
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller'); 
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('jobApplications');
 
// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Load jquery framework
JHtml::_('jquery.framework', false);
 
// Redirect if set by the controller
$controller->redirect();