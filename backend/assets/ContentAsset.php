<?php
namespace backend\assets;

use yii\web\AssetBundle;
class ContentAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    
    public $css=[
        'easyui/themes/bootstrap/easyui.css',
        'css/icon.css',
        'css/main.css'
    ];
    
    public $js=[
        'easyui/jquery.min.js',
        'easyui/jquery.easyui.min.js',
        'easyui/plugins/jquery.datagrid.js',
        'js/layout.js',
        'easyui/plugins/jquery.edatagrid.js',
        'easyui/locale/easyui-lang-zh_CN.js'
    ];
    
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    
    public $depends = [
         
    ];
}

?>