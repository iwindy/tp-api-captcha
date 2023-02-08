<?php

use Iwindy\ApiCaptcha\Facade\Captcha;

/**
 * @param string|null $config
 * @return array
 */
function api_captcha(string $config = null)
{
    return Captcha::create($config);
}

/**
 * @param string $value
 * @return bool
 */
function api_captcha_check($key, $value)
{
    return Captcha::check($key, $value);
}
