<?php
namespace metronic\widgets\datepicker;

use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@metronic/widgets/datepicker/assets';

    public $css = [
        'css/bootstrap-datepicker3.min.css',
    ];
    public $js = [
        'js/bootstrap-datepicker.min.js',
        'js/datepicker-th.min.js',
        'locales/bootstrap-datepicker.th.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}