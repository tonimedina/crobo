<?php

class ApplicationHelper
{
  function datetime_ago( $datetime )
  {
    $now      = new DateTime( 'now' );
    $past     = new DateTime( $datetime );
    $interval = date_diff( $now, $past );

    if ( $interval->format('%a') == 0 )
    {
      return 'today';
    }

    return $interval->format('%a days ago');
  }  
}

$helper = new ApplicationHelper();
