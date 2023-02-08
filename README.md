# tp-api-captcha

根据topthink/think-captcha修改而来，适合thinkphp6的api 验证码类库

## 安装
> composer require iwindy/tp-api-captcha

## 使用

### 在控制器中输出验证码

在控制器的操作方法中使用

~~~
public function api_captcha($id = '')
{
	return captcha($id);
}
~~~
然后注册对应的路由来输出验证码


### 控制器里验证

~~~
if(!api_captcha_check($captcha)){
 //验证失败
};
~~~