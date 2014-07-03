<?php
/**
 * @link http://angularjs.org/
 * @copyright Copyright &copy; 2014 Javier Perea
 * @license JPR
 */

namespace common\ext\assets;

use yii\web\AssetBundle;

/**
 * Font Awesome for Yii2 Project.
 *
 * @author Javier Perea <javier.perea@outlook.com>
 * @since 1.0
 */
class AngularAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower_components/angular';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [
        //'angular.min.js'
        'angular.js'
    ];
}
