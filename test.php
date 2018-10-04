<?php

$signal = "green";

switch ($signal) {
  case "red":
    echo "stop!";
    break;
    case "blue":
    case "green":
    echo "go!";
    break;
  case "yellow":
    echo "caution!";
    break;
  default:
    echo "wrong signal";
    break;
  }

phpinfo();
