<?php

namespace Syan\Validator;

use Syan\Validator\Validate;

/**
 * Class InValidator
 * @package Syan\Validator
 */
class InValidator extends BaseValidator
{

    // 启用的选项
    protected $enabledOptions = ['range', 'strict'];

    // 范围验证
    protected function range($param)
    {
        $value  = $this->attributeValue;
        $strict = empty($this->settings['strict']) ? false : true;
        if (!Validate::in($value, $param, $strict)) {
            // 设置错误消息
            $defaultMessage = "{$this->attribute}不在" . implode(',', $param) . "范围内.";
            $this->setError(__FUNCTION__, $defaultMessage);
            // 返回
            return false;
        }
        return true;
    }

}
