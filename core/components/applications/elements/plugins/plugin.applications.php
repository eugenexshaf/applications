<?php

switch ($modx->event->name) {

	case 'OnManagerPageInit':
		$cssFile = MODX_ASSETS_URL.'components/applications/css/mgr/main.css';
		$modx->regClientCSS($cssFile);
		break;

}