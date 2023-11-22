<?php

require_once __DIR__ . '/../data.php';

// define path to file data.json
  $path = __DIR__ . '/../data.json';
// load data from json
  $postListFile = file_get_contents($path);
// parse json to array
  $postList = json_decode($postListFile, true);
// remove post to array
  unset($postList[$_GET['index']]);
// convert array to string
  $postListFile = json_encode($postList);
// save data to json file
  file_put_contents($path, $postListFile);

// Redirect to homepage
header('Location: /')
?>