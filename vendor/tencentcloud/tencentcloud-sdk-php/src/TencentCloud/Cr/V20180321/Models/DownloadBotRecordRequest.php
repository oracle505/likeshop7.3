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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadBotRecord请求参数结构体
 *
 * @method string getModule() 获取模块：AiApi
 * @method void setModule(string $Module) 设置模块：AiApi
 * @method string getOperation() 获取操作：DownloadRecord
 * @method void setOperation(string $Operation) 设置操作：DownloadRecord
 * @method string getBizDate() 获取业务日期
 * @method void setBizDate(string $BizDate) 设置业务日期
 */
class DownloadBotRecordRequest extends AbstractModel
{
    /**
     * @var string 模块：AiApi
     */
    public $Module;

    /**
     * @var string 操作：DownloadRecord
     */
    public $Operation;

    /**
     * @var string 业务日期
     */
    public $BizDate;

    /**
     * @param string $Module 模块：AiApi
     * @param string $Operation 操作：DownloadRecord
     * @param string $BizDate 业务日期
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("BizDate",$param) and $param["BizDate"] !== null) {
            $this->BizDate = $param["BizDate"];
        }
    }
}
