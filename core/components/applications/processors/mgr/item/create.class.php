<?php
/**
 * Create an Item
 */
class applicationsItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'applicationsItem';
	public $classKey = 'applicationsItem';
	public $languageTopics = array('applications');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('applicationsItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('applications_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'applicationsItemCreateProcessor';