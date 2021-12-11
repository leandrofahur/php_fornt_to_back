<?php

  // echo date('d'); // day
  // echo date('m'); // month
  // echo date('Y'); // year
  // echo date('l'); // day of the week

  // echo date('m/d/Y'); // formatted

  // echo date('h'); // hour
  // echo date('i'); // min
  // echo date('s'); // sec.
  // echo date('a'); // AM or PM

  // set the timezone:
  date_default_timezone_set('America/Vancouver');
  // echo(date('h:i:sa'));

  $timestamp = mktime(10,14,54,9,10,1981);

  // echo $timestamp;

  echo date('m/d/y h:i:sa', $timestamp);

?>