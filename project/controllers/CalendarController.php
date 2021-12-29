<?php

namespace project\controllers;

use Core\Controller;

class CalendarController extends Controller
{
    public function calendar()
    {
        $this->title = 'Calendar';
        $this->layout = 'calendar';
        return $this->render('calendar/calendar', []);
    }
}