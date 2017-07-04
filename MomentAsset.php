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
 * MomentAsset
 *
 * @author Claude Janz <claude.janz@klod.ch>
 */

class MomentAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/moment';
    
    /**
     * @inheritdoc
     */
    public $js = [
        'min/moment.min.js',
    ];
    public function init()
    {
        
        $this->js[]='locale/'.substr(strtolower(Yii::$app->language),0,2).'.js';
    }
}
