<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'tests')
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'app')
    ->append(['.php-cs-fixer.dist.php']);

$rules = [
    '@Symfony' => true,
    'array_syntax' => ['syntax' => 'short'],
    'concat_space' => ['spacing' => 'one'],
    'declare_strict_types' => true,
    'final_class' => true,
    'increment_style' => ['style' => 'post'],
    'not_operator_with_space' => false,
    'ordered_traits' => true,
    'php_unit_method_casing' => ['case' => 'snake_case'],
    'phpdoc_no_empty_return' => false,
    'yoda_style' => false,
];

return (new PhpCsFixer\Config())
    ->setUsingCache(true)
    ->setRules($rules)
    ->setFinder($finder);
