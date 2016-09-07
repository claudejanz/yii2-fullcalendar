<?php

/**
 * @link https://www.klod.ch/ 
 * @copyright Copyright (c) 2016 Klod SA
 * @author Claude Janz <claude.janz@klod.ch>
 */

namespace claudejanz\yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;

/**
 * FullcalendarAsset
 *
 * @author Claude Janz <claude.janz@klod.ch>
 */
class FullcalendarAsset extends AssetBundle
{
    /**
     * To set it different from Yii::$app->language
     * @var string
     */
    public $language;
    
    /**
     * @var boolean if true will include google gcal.js
     */
    public $googleCalendar = false;
    
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/fullcalendar/dist';
    
    /**
     * @inheritdoc
     */
    public $css = [
        'fullcalendar.min.css',
    ];
    
    /**
     * @inheritdoc
     */
    public $js = [
        'fullcalendar.js',        
        'locale-all.js',
    ];
    
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'claudejanz\yii2fullcalendar\MomentAsset',
    ];
    
    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        $language = $this->language ? $this->language : Yii::$app->language;
        if (strtoupper($language) != 'EN-US') 
        {
           $this->js[] = "locale/{$language}.js";
        }
        if($this->googleCalendar)
        {
            $this->js[] = 'gcal.js';
        }
        parent::registerAssetFiles($view);
    }

}
