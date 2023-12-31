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
 * AddCrowdPackInfo请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method string getName() 获取人群包名称
 * @method void setName(string $Name) 设置人群包名称
 * @method string getFileName() 获取人群包文件名称,人群包文件必须为utf8编码，动态参数只能是汉字、数字、英文字母的组合，不能包含其他字符
 * @method void setFileName(string $FileName) 设置人群包文件名称,人群包文件必须为utf8编码，动态参数只能是汉字、数字、英文字母的组合，不能包含其他字符
 * @method string getDesc() 获取人群包描述
 * @method void setDesc(string $Desc) 设置人群包描述
 * @method string getCosUrl() 获取已经上传好的人群包cos地址
 * @method void setCosUrl(string $CosUrl) 设置已经上传好的人群包cos地址
 * @method integer getPhoneNum() 获取人群包手机号数量
 * @method void setPhoneNum(integer $PhoneNum) 设置人群包手机号数量
 */
class AddCrowdPackInfoRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var string 人群包名称
     */
    public $Name;

    /**
     * @var string 人群包文件名称,人群包文件必须为utf8编码，动态参数只能是汉字、数字、英文字母的组合，不能包含其他字符
     */
    public $FileName;

    /**
     * @var string 人群包描述
     */
    public $Desc;

    /**
     * @var string 已经上传好的人群包cos地址
     */
    public $CosUrl;

    /**
     * @var integer 人群包手机号数量
     */
    public $PhoneNum;

    /**
     * @param string $License 商户证书
     * @param string $Name 人群包名称
     * @param string $FileName 人群包文件名称,人群包文件必须为utf8编码，动态参数只能是汉字、数字、英文字母的组合，不能包含其他字符
     * @param string $Desc 人群包描述
     * @param string $CosUrl 已经上传好的人群包cos地址
     * @param integer $PhoneNum 人群包手机号数量
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }
    }
}
