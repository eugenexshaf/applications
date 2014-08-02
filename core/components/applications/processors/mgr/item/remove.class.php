<?php
/**
 * Remove an Item
 */
class applicationsItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'applicationsItem';
	public $classKey = 'applicationsItem';
	public $languageTopics = array('applications');

}

return 'applicationsItemRemoveProcessor';