<?php

namespace Syan\Validator;

use Syan\Validator\Validate;

/**
 * Class IntegerValidator
 * @package Syan\Validator
 */
class IntegerValidator extends BaseValidator
{

    // 初始化选项
    protected $initOptions = ['integer'];

    // 启用的选项
    protected $enabledOptions = ['unsigned', 'min', 'max', 'length', 'minLength', 'maxLength'];

    // 类型验证
    protected function integer()
    {
        $value = $this->attributeValue;
        if (!Validate::isInteger($value)) {
            // 设置错误消息
            $defaultMessage = "{$this->attribute}只能为整数.";
            $this->setError(__FUNCTION__, $defaultMessage);
            // 返回
            return false;
        }
        return true;
    }

}
