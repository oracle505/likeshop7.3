<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSmsSignList请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method array getSignIdSet() 获取签名ID数组
 * @method void setSignIdSet(array $SignIdSet) 设置签名ID数组
 * @method integer getInternational() 获取是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method void setInternational(integer $International) 设置是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 */
class DescribeSmsSignListRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var array 签名ID数组
     */
    public $SignIdSet;

    /**
     * @var integer 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     */
    public $International;

    /**
     * @param string $License 商户证书
     * @param array $SignIdSet 签名ID数组
     * @param integer $International 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("SignIdSet",$param) and $param["SignIdSet"] !== null) {
            $this->SignIdSet = $param["SignIdSet"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }
    }
}
