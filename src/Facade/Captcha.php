<?php

namespace Iwindy\ApiCaptcha\Facade;

use think\Facade;

/**
 * Class Captcha
 * @package Iwindy\ApiCaptcha\Facade
 * @mixin \Iwindy\ApiCaptcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \Iwindy\ApiCaptcha\Captcha::class;
    }
}
