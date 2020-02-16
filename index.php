<?php

  $string = file_get_contents("list.json");
  $list = json_decode($string, true);
  
  print_r($list);
