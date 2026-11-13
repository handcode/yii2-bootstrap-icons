<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
                   '@PhpCsFixer'                => true,
                   'phpdoc_to_comment'          => false,
                   'single_line_comment_style'  => false,
                   'concat_space'               => false,
                   'no_superfluous_phpdoc_tags' => false,
                   'no_alternative_syntax'      => false,
                   # do not append dot at the end of comment
                   'phpdoc_summary'             => false,
                   'ordered_class_elements'     => false,
               ])
    ->setUsingCache(false)
    ->setFormat('txt')
    ->setFinder($finder);
