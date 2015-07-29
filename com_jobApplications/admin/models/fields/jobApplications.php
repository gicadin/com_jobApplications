<?php
/**
 * jobApplications fields 
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
JFormHelper::loadFieldClass('list');
 
/**
 * jobApplications Form Field class for the jobApplications component
 *
 * @since  0.0.1
 */
class JFormFieldjobApplications extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'jobApplications';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,fname,lname');
		$query->from('#__jobApplications');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();
 	
		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->fname, $message->lname);
			}
		}
 
		$options = array_merge(parent::getOptions(), $options);
 
		return $options;
	}
}