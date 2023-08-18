<?php

use Symfony\Component\Yaml\Yaml;

require_once __DIR__. '/../vendor/autoload.php';

$parsed = Yaml::parseFile('./test.yaml');

$parsed['firstname'] = 'Jhony';

$yaml = Yaml::dump($parsed);

file_put_contents('test.yaml', $yaml);

file_put_contents('profile.png', $parsed['profile_pic']);