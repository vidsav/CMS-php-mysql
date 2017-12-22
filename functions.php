<?php


if (!function_exists('dateFormat')) {
  function dateFormat($date)
  {
      return date('d.m.Y H:i:s', strtotime($date));
  }
}

?>