<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/PublicClient.php';

$client = new PublicClient;

$posts = $client->searchPosts(q: '#bluesky', tag: ['bluesky'], limit: 5);
var_dump($posts);

$did = $posts['posts'][0]['author']['did'];

$profile = $client->getProfile(actor: $did);
var_dump($profile);

$feed = $client->getAuthorFeed(actor: $did, limit: 1);
var_dump($feed['feed'][0]['post']);
