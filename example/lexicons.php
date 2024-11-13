<?php

require_once __DIR__.'/../vendor/autoload.php';

use Revolution\AtProto\Lexicon\Lexicons\AbstractLexicons;

$lex = new class extends AbstractLexicons {

};

var_dump($lex->get('app.bsky.actor.defs'));
