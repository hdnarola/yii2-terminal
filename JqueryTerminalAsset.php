<?php
namespace wdmg\terminal;
use yii\web\AssetBundle;

/**
 * JqueryTerminalAsset
 *
 * @see jQuery Terminal Emulator - https://github.com/jcubic/jquery.terminal
 * @author Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 */
class JqueryTerminalAsset extends AssetBundle
{
    public $sourcePath = '@bower';

    // set POS_END as jquery could be loaded at POS_END & jquery is required here
    public $js = YII_ENV_DEV ? [
        ['jquery.terminal/js/jquery.terminal.js', 'position' => \yii\web\View::POS_END],
        ['jquery.terminal/js/pipe.js', 'position' => \yii\web\View::POS_END],
        ['jquery-ui/jquery-ui.js', 'position' => \yii\web\View::POS_END]
    ] : [
        ['jquery.terminal/js/jquery.terminal.min.js', 'position' => \yii\web\View::POS_END],
        ['jquery.terminal/js/pipe.js', 'position' => \yii\web\View::POS_END],
        ['jquery-ui/jquery-ui.min.js', 'position' => \yii\web\View::POS_END]
    ];

    // set jquery.terminal/ in path as css stays there
    public $css = [
        YII_ENV_DEV ? 'jquery.terminal/css/jquery.terminal.css' : 'jquery.terminal/css/jquery.terminal.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
    }

}