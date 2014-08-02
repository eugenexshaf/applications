<?php

/**
 * Class applicationsMainController
 */
abstract class applicationsMainController extends modExtraManagerController {
	/** @var applications $applications */
	public $applications;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('applications_core_path', null, $this->modx->getOption('core_path') . 'components/applications/');
		require_once $corePath . 'model/applications/applications.class.php';

		$this->applications = new applications($this->modx);

		$this->addCss($this->applications->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->applications->config['jsUrl'] . 'mgr/applications.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			applications.config = ' . $this->modx->toJSON($this->applications->config) . ';
			applications.config.connector_url = "' . $this->applications->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('applications:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends applicationsMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}