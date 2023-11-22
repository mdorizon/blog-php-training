<?php

require_once __DIR__ . '/../data.php';

// get data form form
$title = $_GET['title'];
$content = $_GET['content'];

// Create new post
$post = [
  'title' => $title,
  'content' => $content,
  'image' => 'https://source.unsplash.com/random/300x300/?cooking'
];

// define path to file data.json
  $path = __DIR__ . '/../data.json';
// load data from json
  $postListFile = file_get_contents($path);
// parse json to array
  $postList = json_decode($postListFile, true);
// add new post to array
  array_push($postList, $post);
// convert array to string
  $postListFile = json_encode($postList);
// save data to json file
  file_put_contents($path, $postListFile);

// Redirect to homepage
header('Location: /')
?>