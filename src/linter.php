<?php
use Symfony\Component\Console\Application;
use Symfony\Component\Yaml\Command\LintCommand;

require_once __DIR__. '/../vendor/autoload.php';

(new Application('yaml/lint'))
    ->add(new LintCommand())
    ->getApplication()
    ->setDefaultCommand('lint:yaml', true)
    ->run();