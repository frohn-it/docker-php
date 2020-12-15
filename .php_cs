<?php

$finder = \PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->notPath('/fixtures/')
;

return \PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony'                    => true,
        '@Symfony:risky'              => true,
        '@PHP56Migration'             => true,
        '@PHP56Migration:risky'       => true,
        '@PHP70Migration'             => true,
        '@PHP70Migration:risky'       => true,
        '@PHP71Migration'             => true,
        '@PHP71Migration:risky'       => true,
        '@PHP73Migration'             => true,
        '@PHP74Migration'             => true,
        '@PHP74Migration:risky'       => true,
        '@PHP80Migration'             => true,
        '@PHP80Migration:risky'       => true,
        '@PHPUnit75Migration:risky'   => true,
        '@PHPUnit84Migration:risky'   => true,
        'array_syntax'                => [
            'syntax' => 'short'
        ],
        'combine_consecutive_unsets'  => true,
        'declare_strict_types'        => true,
        'linebreak_after_opening_tag' => true,
        'modernize_types_casting'     => true,
        'native_function_invocation'  => true,
        'no_php4_constructor'         => true,
        'ordered_imports'             => true,
        'php_unit_strict'             => true,
        'phpdoc_order'                => true,
        'strict_comparison'           => true,
        'strict_param'                => true,
    ])
    ->setRiskyAllowed(true)
    ->setIndent('    ')
    ->setLineEnding("\n")
    ->setFinder($finder)
;
