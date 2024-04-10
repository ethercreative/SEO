<?php

namespace ether\seo\web\assets;

use craft\web\AssetBundle;

class SeoFieldAsset extends AssetBundle
{

	public function init ()
	{
		$this->sourcePath = __DIR__;

		$this->js = [
			'js/seo/field/index.js',
			'js/seo/tabs/index.js',
		];

		$this->jsOptions = [
			'type' => 'module',
		];

		// old
		$this->css = [
			'css/seo.css',
		];

		parent::init();
	}

}
