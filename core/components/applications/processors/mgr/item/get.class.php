<?php
/**
 * Get an Item
 */
class applicationsItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'applicationsItem';
	public $classKey = 'applicationsItem';
	public $languageTopics = array('applications:default');
}

return 'applicationsItemGetProcessor';