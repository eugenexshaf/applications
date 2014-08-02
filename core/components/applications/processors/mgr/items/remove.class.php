<?php
/**
 * Remove an Items
 */
class applicationsItemsRemoveProcessor extends modProcessor {
    public $checkRemovePermission = true;
	public $objectType = 'applicationsItem';
	public $classKey = 'applicationsItem';
	public $languageTopics = array('applications');

	public function process() {

        foreach (explode(',',$this->getProperty('items')) as $id) {
            $item = $this->modx->getObject($this->classKey, $id);
            $item->remove();
        }
        
        return $this->success();

	}

}

return 'applicationsItemsRemoveProcessor';