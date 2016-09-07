<?php

/*
 * @link https://www.klod.ch/ 
 * @copyright Copyright (c) 2016 Klod SA
 * @author Claude Janz <claude.janz@klod.ch>
 */

namespace claudejanz\yii2fullcalendar\models;

/**
 * Event is a class to work with Fullcalendar 
 * but you can easly use an ActiveRecord that implemets for minimal
 * properties ($start and $title)
 *
 * @author Claude Janz <claude.janz@klod.ch>
 * For full object explanation:
 * @see https://fullcalendar.io/docs/event_data/Event_Object/
 */
class Event
{

    /**
     * Uniquely identifies the given event. Different instances of repeating events should all have the same id.
     * @var string|integer Optional
     */
    public $id;

    /**
     * The text on an event's element.
     * @var string Required
     */
    public $title;

    /**
     * Whether an event occurs at a specific time-of-day. This property affects whether an event's time is shown. Also, in the agenda views, determines if it is displayed in the "all-day" section.
     * If this value is not explicitly specified, allDayDefault will be used if it is defined.
     * If all else fails, FullCalendar will try to guess. If either the start or end value has a "T" as part of the ISO8601 date string, allDay will become false. Otherwise, it will be true.
     * Don't include quotes around your true/false. This value is a boolean, not a string!
     * @var boolean
     */
    public $allDay;

    /**
     * The date/time an event begins. Required.
     * A Moment-ish input, like an ISO8601 string. Throughout the API this will become a real Moment object.
     * @var datetime
     */
    public $start;

    /**
     * The exclusive date/time an event ends. Optional.
     * A Moment-ish input, like an ISO8601 string. Throughout the API this will become a real Moment object.
     * It is the moment immediately after the event has ended. For example, if the last full day of an event is Thursday, the exclusive end of the event will be 00:00:00 on Friday!
     * @var datetime
     */
    public $end;

    /**
     * A URL that will be visited when this event is clicked by the user. For more information on controlling this behavior, see the eventClick callback.
     * @var [type]
     */
    public $url;

    /**
     * A CSS class (or array of classes) that will be attached to this event's element.
     * @var [type]
     */
    public $className;

    /**
     * Overrides the master editable option for this single event.
     * @var boolean
     */
    public $editable;

    /**
     * Overrides the master eventStartEditable option for this single event.
     * @var boolean
     */
    public $startEditable;

    /**
     * Overrides the master eventDurationEditable option for this single event.
     * @var boolean
     */
    public $durationEditable;

    /**
     * Overrides the master eventResourceEditable option for this single event.
     * @var boolean
     */
    public $resourceEditable;

    /**
     * Allows alternate rendering of the event, like background events.
     * @var string Can be empty, "background", or "inverse-background"
     */
    public $rendering;

    /**
     * Overrides the master eventOverlap option for this single event.
     * @var boolean If false, prevents this event from being dragged/resized over other events. 
     * Also prevents other events from being dragged/resized over this event.
     */
    public $overlap;

    /**
     * Overrides the master eventConstraint option for this single event.
     * @var [type] an event ID, "businessHours", object. Optional.
     */
    public $constraint;

    /**
     * A reference to the event source that this event came from.
     * @var [type] Event Source Object. Automatically populated.
     */
    public $source;

    /**
     * Sets an event's background and border color just like the calendar-wide eventColor option.
     * @var [type]
     */
    public $color;

    /**
     * Sets an event's background color just like the calendar-wide eventBackgroundColor option.
     * @var [type]
     */
    public $backgroundColor;

    /**
     * Sets an event's border color just like the the calendar-wide eventBorderColor option.
     * @var [type]
     */
    public $borderColor;

    /**
     * Sets an event's text color just like the calendar-wide eventTextColor option.
     * @var [type]
     */
    public $textColor;

}
