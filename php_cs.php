<?php

use PhpCsFixer\Config;

return (new Config())
    ->setRules([
        '@PSR12' => true,
        '@PSR1' => true,
        '@PhpCsFixer' => true,
        'echo_tag_syntax' => ['format' => 'short'],
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setLineEnding("\r\n")
;
