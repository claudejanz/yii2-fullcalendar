Yii2 Fullcalendar
=================

An implementation of [fullcalendar v3](https://fullcalendar.io).
For more information [read documentation](https://fullcalendar.io/docs/).

[![Latest Stable Version](https://poser.pugx.org/claudejanz/yii2-fullcalendar/v/stable)](https://packagist.org/packages/claudejanz/yii2-fullcalendar) [![Total Downloads](https://poser.pugx.org/claudejanz/yii2-fullcalendar/downloads)](https://packagist.org/packages/claudejanz/yii2-fullcalendar) [![Latest Unstable Version](https://poser.pugx.org/claudejanz/yii2-fullcalendar/v/unstable)](https://packagist.org/packages/claudejanz/yii2-fullcalendar) [![License](https://poser.pugx.org/claudejanz/yii2-fullcalendar/license)](https://packagist.org/packages/claudejanz/yii2-fullcalendar)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist claudejanz/yii2-fullcalendar "*"
```

or add

```
"claudejanz/yii2-fullcalendar": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your view by:

```php
echo \claudejanz\yii2fullcalendar\Fullcalendar::widget([
    'clientOptions' => [
        'events'        => \yii\helpers\Url::to(['site/events']),
        'weekends'      => false,
        'defaultView'   => 'agendaWeek',
        'editable'      => false,
        'header'        => [
            'left'  => 'prev,next today ',
            'right' => 'month,agendaWeek,agendaDay'
        ],
    ]
]);
```

And in your controller by:

```php
public function actionEvents($start=NULL,$end=NULL,$timestamp=NULL){

    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    $format = \DateTime::ISO8601;

    $events = [];

    $date = new \DateTime('now');

    $event = new \claudejanz\yii2fullcalendar\models\Event();
    $event->title = "An event";
    $event->start = $date->format($format);
    $date->add(new \DateInterval('PT1H'));
    $event->end = $date->format($format);

    $events[] = $event;

    return $events;
  }
```