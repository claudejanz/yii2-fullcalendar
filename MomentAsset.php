<?php

/**
 * @link https://www.klod.ch/ 
 * @copyright Copyright (c) 2016 Klod SA
 * @author Claude Janz <claude.janz@klod.ch>
 */

namespace claudejanz\yii2fullcalendar;

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
    public $sourcePath = '@bower/moment/min';
    
    /**
     * @inheritdoc
     */
    public $js = [
        'moment.min.js'
    ];
}
