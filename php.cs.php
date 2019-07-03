<?php
/**
 * PHP CS Fixer 格式化代码规则--配置文件
 * 执行 php-cs-fixer fix file --config=本文件的绝对路径地址
 * 该文件存放位置无所谓
 * @author fisher
 * @date 2018-10-12
 */
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        // 基础规则 PSR2
        '@PSR2' => true,

        // 对齐
        'align_multiline_comment' => true,

        // 禁止使用简写输出标签 "<?="
        'no_short_echo_tag' => true,

        // 在某些关键字前加空行 例如: return
        'blank_line_before_statement' => true,

        // 清除未使用的引用
        'no_unused_imports' => true,

        // 在叹号!前后加空格
        'not_operator_with_space' => true,

        // 数组使用简写格式
        'array_syntax' => ['syntax' => 'short'],

        // 按照长度排列引用
        'ordered_imports' => ['sortAlgorithm' => 'length'],

        // namespace 前有且仅有一行空行
        'single_blank_line_before_namespace' => true,

        // 清除多余空行
        'no_extra_blank_lines' => true,

        /**
         * 单行数组定义, 清除最后一个逗号
         * [1,2,] -> [1,2]
         */
        'no_trailing_comma_in_singleline_array' => true,

        // 多行数组定义, 最后一行需有逗号
        'trailing_comma_in_multiline_array' => true,

        // 格式数组定义, 就像函数的参数
        'trim_array_spaces' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('tests')
            ->in(__DIR__)
    )
;
