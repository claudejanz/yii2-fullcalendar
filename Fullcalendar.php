<?php
/* 
 * @link https://www.klod.ch/ 
 * @copyright Copyright (c) 2016 Klod SA
 * @author Claude Janz <claude.janz@klod.ch>
 */

namespace claudejanz\yii2fullcalendar;

use yii\base\Widget;

/**
 * This is just an example.
 */
class Fullcalendar extends Widget
{
    /**
     * Main tag options
     * @var array 
     */
    public $options = [
        'class' => 'fullcalendar'
    ];
    
    /**
     * Theme default is true and will render the jui theme for the fullcalendar
     * @var bool 
     */
    public $theme = true;

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
     * Define the look n feel for the calendar header, known placeholders are left, center, right
     * @var array header format
     */
    public $header = [
        'center'=>'title',
        'left'=>'prev,next today',        
        'right'=>'month,agendaWeek'
    ];
    
    /**
     * Url of events json output
     * @var string 
     */
     public $events = [];
    
    /**
     * 
     * @inheritdoc
     */
    public function run()
    {
        return "Hello!";
    }
}
