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
 * DescribeMmsInstanceList请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回数量
 * @method void setLimit(integer $Limit) 设置返回数量
 * @method string getAppSubId() 获取业务代码
 * @method void setAppSubId(string $AppSubId) 设置业务代码
 * @method string getTitle() 获取实例标题
 * @method void setTitle(string $Title) 设置实例标题
 */
class DescribeMmsInstanceListRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回数量
     */
    public $Limit;

    /**
     * @var string 业务代码
     */
    public $AppSubId;

    /**
     * @var string 实例标题
     */
    public $Title;

    /**
     * @param string $License 商户证书
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回数量
     * @param string $AppSubId 业务代码
     * @param string $Title 实例标题
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AppSubId",$param) and $param["AppSubId"] !== null) {
            $this->AppSubId = $param["AppSubId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
