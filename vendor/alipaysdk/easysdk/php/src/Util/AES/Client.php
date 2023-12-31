<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Alipay\EasySDK\Util\AES;

use Alipay\EasySDK\Kernel\EasySDKKernel;

class Client {
    protected $_kernel;

    public function __construct($kernel){
        $this->_kernel = $kernel;
    }

    /**
     * @param string $cipherText
     * @return string
     */
    public function decrypt($cipherText){
        return $this->_kernel->aesDecrypt($cipherText, $this->_kernel->getConfig("encryptKey"));
    }

    /**
     * @param string $plainText
     * @return string
     */
    public function encrypt($plainText){
        return $this->_kernel->aesEncrypt($plainText, $this->_kernel->getConfig("encryptKey"));
    }

    /**
     * ISV代商户代用，指定appAuthToken
     *
     * @param $appAuthToken String 代调用token
     * @return $this 本客户端，便于链式调用
     */
    public function agent($appAuthToken)
    {
        $this->_kernel->injectTextParam("app_auth_token", $appAuthToken);
        return $this;
    }

    /**
    * 用户授权调用，指定authToken
    *
    * @param $authToken String 用户授权token
    * @return $this
    */
    public function auth($authToken)
    {
        $this->_kernel->injectTextParam("auth_token", $authToken);
        return $this;
    }

    /**
    * 设置异步通知回调地址，此处设置将在本调用中覆盖Config中的全局配置
    *
    * @param $url String 异步通知回调地址，例如：https://www.test.com/callback
    * @return $this
    */
    public function asyncNotify($url)
    {
        $this->_kernel->injectTextParam("notify_url", $url);
        return $this;
    }

    /**
    * 将本次调用强制路由到后端系统的测试地址上，常用于线下环境内外联调，沙箱与线上环境设置无效
    *
    * @param $testUrl String 后端系统测试地址
    * @return $this
    */
    public function route($testUrl)
    {
        $this->_kernel->injectTextParam("ws_service_url", $testUrl);
        return $this;
    }

    /**
    * 设置API入参中没有的其他可选业务请求参数(biz_content下的字段)
    *
    * @param $key   String 业务请求参数名称（biz_content下的字段名，比如timeout_express）
    * @param $value object 业务请求参数的值，一个可以序列化成JSON的对象
    *               如果该字段是一个字符串类型（String、Price、Date在SDK中都是字符串），请使用String储存
    *               如果该字段是一个数值型类型（比如：Number），请使用Long储存
    *               如果该字段是一个复杂类型，请使用嵌套的array指定各下级字段的值
    *               如果该字段是一个数组，请使用array储存各个值
    * @return $this
    */
    public function optional($key, $value)
    {
        $this->_kernel->injectBizParam($key, $value);
        return $this;
    }

    /**
    * 批量设置API入参中没有的其他可选业务请求参数(biz_content下的字段)
    * optional方法的批量版本
    *
    * @param $optionalArgs array 可选参数集合，每个参数由key和value组成，key和value的格式请参见optional方法的注释
    * @return $this
    */
    public function batchOptional($optionalArgs)
    {
        foreach ($optionalArgs as $key => $value) {
            $this->_kernel->injectBizParam($key, $value);
        }
        return $this;
    }

}