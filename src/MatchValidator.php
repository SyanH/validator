<?php

namespace Syan\Validator;

use Syan\Validator\Validate;

/**
 * Class MatchValidator
 * @package Syan\Validator
 */
class MatchValidator extends BaseValidator
{

    // 启用的选项
    protected $enabledOptions = ['pattern'];

    // 正则验证
    protected function pattern($param)
    {
        $value = $this->attributeValue;
        if (!Validate::match($value, $param)) {
            // 设置错误消息
            $defaultMessage = "{$this->attribute}是无效的值.";
            $this->setError(__FUNCTION__, $defaultMessage);
            // 返回
            return false;
        }
        return true;
    }

}
