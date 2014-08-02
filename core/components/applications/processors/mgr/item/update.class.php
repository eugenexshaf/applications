<?php
/**
 * Update an Item
 */
class applicationsItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'applicationsItem';
	public $classKey = 'applicationsItem';
	public $languageTopics = array('applications');
	public $permission = 'edit_document';
}

return 'applicationsItemUpdateProcessor';
