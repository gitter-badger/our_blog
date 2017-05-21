<?php

use Symfony\Component\HttpFoundation;

class YearController{
    function leapAction(HttpFoundation\Request $request){
        $year = $request->attributes->get('year');
        $answer = is_leap_year($year)? 'Leap Year': 'False';
        return new HttpFoundation\Response($answer);
    }
}
