<?php

require_once __DIR__.'/../vendor/autoload.php';

use Revolution\AtProto\Lexicon\Lexicons\AbstractLexicons;

$lex = new class extends AbstractLexicons {};

var_dump($lex->getDef('app.bsky.feed.post'));
var_dump($lex->getDef('app.bsky.embed.external#external'));
var_dump($lex->getDef('app.bsky.feed.post#main'));

try {
    $def = $lex->getDefOrThrow('app.bsky.feed._throw');
} catch (InvalidArgumentException $e) {
    var_dump($e::class);
}
