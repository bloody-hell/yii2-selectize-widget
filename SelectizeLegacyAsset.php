<?php
/**
 * @link https://github.com/2amigos/yii2-selectize-widget
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace dosamigos\selectize;

use yii\web\AssetBundle;

/**
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://2amigos.us/
 */
class SelectizeLegacyAsset extends AssetBundle
{
	public $css = [
		'css/selectize.legacy.css',
	];

	public $js = [
		'js/standalone/selectize.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];

    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets';
    }
}
