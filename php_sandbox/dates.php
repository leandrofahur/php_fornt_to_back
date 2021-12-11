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

  // echo date('m/d/y h:i:sa', $timestamp);
  $timestamp2 = strtotime('7:00pm March 22 2016');
  //echo date('m/d/Y h:i:sa',$timestamp2);

  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next sunday');
  $timestamp5 = strtotime('+2 years');

  echo date('m/d/Y',$timestamp3);
  echo '<br>';
  echo date('m/d/Y',$timestamp4);
  echo '<br>';
  echo date('m/d/Y',$timestamp5);  
?>