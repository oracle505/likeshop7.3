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
 * DescribeFileModel请求参数结构体
 *
 * @method string getModule() 获取模块名。默认值（固定）：AiApi
 * @method void setModule(string $Module) 设置模块名。默认值（固定）：AiApi
 * @method string getOperation() 获取操作名。默认值（固定）：DescribeFileModel
 * @method void setOperation(string $Operation) 设置操作名。默认值（固定）：DescribeFileModel
 * @method string getFileType() 获取模板文件类型，输入input，停拨stop
 * @method void setFileType(string $FileType) 设置模板文件类型，输入input，停拨stop
 * @method string getBotId() 获取任务ID，二者必填一个
 * @method void setBotId(string $BotId) 设置任务ID，二者必填一个
 * @method string getBotName() 获取任务名称，二者必填一个
 * @method void setBotName(string $BotName) 设置任务名称，二者必填一个
 */
class DescribeFileModelRequest extends AbstractModel
{
    /**
     * @var string 模块名。默认值（固定）：AiApi
     */
    public $Module;

    /**
     * @var string 操作名。默认值（固定）：DescribeFileModel
     */
    public $Operation;

    /**
     * @var string 模板文件类型，输入input，停拨stop
     */
    public $FileType;

    /**
     * @var string 任务ID，二者必填一个
     */
    public $BotId;

    /**
     * @var string 任务名称，二者必填一个
     */
    public $BotName;

    /**
     * @param string $Module 模块名。默认值（固定）：AiApi
     * @param string $Operation 操作名。默认值（固定）：DescribeFileModel
     * @param string $FileType 模板文件类型，输入input，停拨stop
     * @param string $BotId 任务ID，二者必填一个
     * @param string $BotName 任务名称，二者必填一个
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }
    }
}
