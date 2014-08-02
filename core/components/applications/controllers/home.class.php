<?php
/**
 * The home manager controller for applications.
 *
 */
class applicationsHomeManagerController extends applicationsMainController {
	/* @var applications $applications */
	public $applications;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('applications');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->applications->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->applications->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->applications->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "applications-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->applications->config['templatesPath'] . 'home.tpl';
	}
}