<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['var', 'vendor', 'tmp']);

return (new PhpCsFixer\Config())
    ->setRules(['@PhpCsFixer' => true,
    'multiline_whitespace_before_semicolons' => false,
    'blank_line_before_statement' => ['statements' => [
        'break', 'continue', 'declare', 'exit', 'goto', 'include', 'include_once', 'phpdoc', 'require', 'require_once', 'return', 'switch', 'throw', 'try', 'yield', 'yield_from'
    ]],
    'global_namespace_import' => ['import_classes' => true, 'import_constants' => false, 'import_functions' => false],
    'phpdoc_types_order' => false,
    'no_null_property_initialization' => false,
    'concat_space' => false,
    'php_unit_internal_class' => false,
    'php_unit_test_class_requires_covers' => false,
    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'case',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public',
            'property_protected',
            'property_private',
            'construct',
            'destruct',
            'magic',
            'phpunit',
            'method_public_abstract_static',
            'method_protected_abstract_static',
            'method_private_abstract_static',
            'method_public_abstract',
            'method_protected_abstract',
            'method_private_abstract',
            'method_public_static',
            'method_protected_static',
            'method_private_static',
            'method_public',
            'method_protected',
            'method_private',
        ]
    ],
    'cast_spaces' => false
    ])
    ->setFinder($finder)
;
