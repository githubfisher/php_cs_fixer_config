<?php
/**
 * This file is part of PHP CS Fixer Config.
 */

$header = <<<'EOF'
This file is part of PHP CS Fixer Config.
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2'          => true,
        'header_comment' => [
            'commentType' => 'PHPDoc',
            'header'      => $header,
            'separate'    => 'none',
        ],

        /**
         * TAG
         *
         */

        // 禁止使用简写输出标签 "<?="
        'no_short_echo_tag' => true,
        // The closing '?\>' tag MUST be omitted from files containing only PHP.
        'no_closing_tag' => true,
        // PHP code must use the long <?php tags or short-echo <?= tags and not other tag variations.
        'full_opening_tag' => true,

        /**
         * NAMESPACE
         *
         */

        // namespace 前有且仅有一行空行
        'single_blank_line_before_namespace' => true,
        // 命名空间前面不应该有空格
        'no_leading_namespace_whitespace' => true,

        /**
         * USE | INCLUDE | IMPORTS
         *
         */

        // 清除未使用的引用
        'no_unused_imports' => true,
        // 按照长度排列引用
        'ordered_imports' => [
            'sortAlgorithm' => 'length',
        ],
        // include 和文件路径之间需要有一个空格，文件路径不需要用括号括起来
        'include' => true,
        // There MUST be one use keyword per declaration.
        'single_import_per_statement'    => true,
        // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
        'single_line_after_imports'      => true,

        /**
         * CLASS
         *
         */

        'class_attributes_separation' => true,
        // Whitespace around the keywords of a class, trait or interfaces definition should be one space.
        'class_definition' => true,
        // 类开始标签后不应该有空白行
        'no_blank_lines_after_class_opening' => true,
        // There MUST NOT be more than one property or constant declared per statement.
        'single_class_element_per_statement' => [
            'elements' => ['property'],
        ],

        /**
         * FUNCTION | METHOD | COMMA
         *
         */

        // Spaces should be properly placed in a function declaration.
        'function_declaration' => true,
        // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis
        'no_spaces_after_function_name' => true,
        // In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma.
        'method_argument_space' => [
            'ensure_fully_multiline' => true,
        ],
        // 删除 list 语句中多余的逗号
        'no_trailing_comma_in_list_call' => true,
        // Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.
        'visibility_required' => true,

        /**
         * KEYWORDS
         */

        // The PHP constants true, false, and null MUST be in lower case.
        'lowercase_constants' => true,
        // PHP keywords MUST be in lower case.
        'lowercase_keywords' => true,
        // A case should be followed by a colon and not a semicolon.
        'switch_case_semicolon_to_colon' => true,
        // Removes extra spaces between colon and case value.
        'switch_case_space' => true,
        // 在当前类中使用 self 代替类名
        'self_accessor' => true,
        // The keyword elseif should be used instead of else if so that all control keywords look like single words.
        'elseif' => true,

        /**
         * ARRAY
         *
         */

        // 数组使用简写格式
        'array_syntax' => [
            'syntax' => 'short',
        ],
        /**
         * 单行数组定义, 清除最后一个逗号
         * [1,2,] -> [1,2]
         */
        'no_trailing_comma_in_singleline_array' => true,
        // 多行数组定义, 最后一行需有逗号
        'trailing_comma_in_multiline_array' => true,
        // 格式数组定义, 就像函数的参数
        'trim_array_spaces' => true,

        /**
         * STYLE
         *
         */

        // 对齐
        'align_multiline_comment' => [
            'comment_type' => 'all_multiline',
        ],
        // 等号(等号箭头,数字箭头)垂直对齐
        'binary_operator_spaces' => [
            'default' => 'align_single_space',
        ],

        /**
         * BLANK LINE | BLANK | SPACE
         *
         */

        // 在某些关键字前加空行 例如: return
        'blank_line_before_statement' => true,
        // 清除多余空行
        'no_extra_blank_lines' => true,
        // 多余空白行
        'no_extra_consecutive_blank_lines' => true,
        // 在叹号!前后加空格
        'not_operator_with_space' => true,
        // 点连接符 两边各一个空格
        'concat_space' => ['spacing' => 'one'],
        // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
        'no_spaces_inside_parenthesis' => true,
        // Remove trailing whitespace at the end of non-blank lines.
        'no_trailing_whitespace' => true,
        // There MUST be no trailing spaces inside comments and phpdocs.
        'no_trailing_whitespace_in_comment' => true,
        // 禁止只有单行空格和分号的写法
        'no_singleline_whitespace_before_semicolons' => true,
        // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
        'blank_line_after_opening_tag' => false,
        // A single space should be between cast and variable.
        'cast_spaces' => true,
        // Remove trailing whitespace at the end of blank lines.
        'no_whitespace_in_blank_line' => true,

        /**
         * SYMBOL
         */
        // 替换不等于符号 <> -> !=
        'standardize_not_equals' => true,
        // 简单字符串应该使用单引号代替双引号
        'single_quote' => true,
        // 多余的分号
        'no_empty_statement' => true,

        // The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
        'braces' => true,
        // Code MUST use configured indentation type.
        'indentation_type' => true,
        // All PHP files must use same line ending.
        'line_ending' => true,
        // A PHP file without end tag must always end with a single empty line feed.
        'single_blank_line_at_eof' => true,
        // PHP code MUST use only UTF-8 without BOM (remove BOM).
        'encoding'        => true,
        'no_empty_phpdoc' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('public')
            ->exclude('resources')
            ->exclude('config')
            ->exclude('runtime')
            ->exclude('vendor')
            ->in(__DIR__)
    )->setUsingCache(false);
