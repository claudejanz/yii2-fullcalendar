<?php
/** 
 * @link https://www.klod.ch/ 
 * @copyright Copyright (c) 2016 Klod SA
 * @author Claude Janz <claude.janz@klod.ch>
 */

namespace claudejanz\yii2fullcalendar;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget;
use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class Fullcalendar extends Widget
{
    /**
     * Main tag options
     * @var array 
     */
    public $options = [];

    /**
     * ClientOptions the attributes for the widget initalisation.
     * @var array 
     */
    public $clientOptions = [
        'weekends' => true,
        'default' => 'month',
        'editable' => false,
    ];
     
     /**
     * Initializes the widget.
     * adds id to tag option to register plugin
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }
    
    /**
     * 
     * @inheritdoc
     */
    public function run()
    {
        echo Html::tag('div','', $this->options);
        $this->registerPlugin();
    }
    
    /**
    * Registers the Fullcalendar javascript assets and builds the requiered js for the widget and the related events
    */
    protected function registerPlugin()
    {
        $id = $this->options['id'];
        $view = $this->view;

        /** @var AssetBundle $assetClass */
        FullcalendarAsset::register($view);

        $js = array();

        $clientOptions = Json::encode($this->clientOptions);
        
        $view->registerJs("$('#$id').fullCalendar($clientOptions);");
    }
}
