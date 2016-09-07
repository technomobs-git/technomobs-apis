<?php
// copy file content into a string var
$json_file = file_get_contents('countries.json');
// convert the string to a json object
$jfo = json_decode($json_file);
// read the title value
$title = $jfo->result->title;
// copy the posts array to a php var
$posts = $jfo->result->posts;
// listing posts
foreach ($posts as $post) {
    echo $post->title;
}
?>