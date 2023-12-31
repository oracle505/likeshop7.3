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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunCommand请求参数结构体
 *
 * @method string getContent() 获取Base64编码后的命令内容，长度不可超过64KB。
 * @method void setContent(string $Content) 设置Base64编码后的命令内容，长度不可超过64KB。
 * @method array getInstanceIds() 获取待执行命令的实例ID列表。 支持实例类型：
<li> CVM
<li> LIGHTHOUSE
 * @method void setInstanceIds(array $InstanceIds) 设置待执行命令的实例ID列表。 支持实例类型：
<li> CVM
<li> LIGHTHOUSE
 * @method string getCommandName() 获取命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method void setCommandName(string $CommandName) 设置命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method string getDescription() 获取命令描述。不超过120字符。
 * @method void setDescription(string $Description) 设置命令描述。不超过120字符。
 * @method string getCommandType() 获取命令类型，目前仅支持取值：SHELL。默认：SHELL。
 * @method void setCommandType(string $CommandType) 设置命令类型，目前仅支持取值：SHELL。默认：SHELL。
 * @method string getWorkingDirectory() 获取命令执行路径，默认：/root。
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置命令执行路径，默认：/root。
 * @method integer getTimeout() 获取命令超时时间，默认60秒。取值范围[1, 86400]。
 * @method void setTimeout(integer $Timeout) 设置命令超时时间，默认60秒。取值范围[1, 86400]。
 * @method boolean getSaveCommand() 获取是否保存命令，取值范围：
<li> True：保存
<li> False：不保存
默认为 False。
 * @method void setSaveCommand(boolean $SaveCommand) 设置是否保存命令，取值范围：
<li> True：保存
<li> False：不保存
默认为 False。
 * @method boolean getEnableParameter() 获取是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
 * @method void setEnableParameter(boolean $EnableParameter) 设置是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
 * @method string getDefaultParameters() 获取启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果 Parameters 未提供，将使用这里的默认值进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method void setDefaultParameters(string $DefaultParameters) 设置启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果 Parameters 未提供，将使用这里的默认值进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method string getParameters() 获取Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method void setParameters(string $Parameters) 设置Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method array getTags() 获取如果保存命令，可为命令设置标签。列表长度不超过10。
 * @method void setTags(array $Tags) 设置如果保存命令，可为命令设置标签。列表长度不超过10。
 */
class RunCommandRequest extends AbstractModel
{
    /**
     * @var string Base64编码后的命令内容，长度不可超过64KB。
     */
    public $Content;

    /**
     * @var array 待执行命令的实例ID列表。 支持实例类型：
<li> CVM
<li> LIGHTHOUSE
     */
    public $InstanceIds;

    /**
     * @var string 命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     */
    public $CommandName;

    /**
     * @var string 命令描述。不超过120字符。
     */
    public $Description;

    /**
     * @var string 命令类型，目前仅支持取值：SHELL。默认：SHELL。
     */
    public $CommandType;

    /**
     * @var string 命令执行路径，默认：/root。
     */
    public $WorkingDirectory;

    /**
     * @var integer 命令超时时间，默认60秒。取值范围[1, 86400]。
     */
    public $Timeout;

    /**
     * @var boolean 是否保存命令，取值范围：
<li> True：保存
<li> False：不保存
默认为 False。
     */
    public $SaveCommand;

    /**
     * @var boolean 是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
     */
    public $EnableParameter;

    /**
     * @var string 启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果 Parameters 未提供，将使用这里的默认值进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     */
    public $DefaultParameters;

    /**
     * @var string Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     */
    public $Parameters;

    /**
     * @var array 如果保存命令，可为命令设置标签。列表长度不超过10。
     */
    public $Tags;

    /**
     * @param string $Content Base64编码后的命令内容，长度不可超过64KB。
     * @param array $InstanceIds 待执行命令的实例ID列表。 支持实例类型：
<li> CVM
<li> LIGHTHOUSE
     * @param string $CommandName 命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     * @param string $Description 命令描述。不超过120字符。
     * @param string $CommandType 命令类型，目前仅支持取值：SHELL。默认：SHELL。
     * @param string $WorkingDirectory 命令执行路径，默认：/root。
     * @param integer $Timeout 命令超时时间，默认60秒。取值范围[1, 86400]。
     * @param boolean $SaveCommand 是否保存命令，取值范围：
<li> True：保存
<li> False：不保存
默认为 False。
     * @param boolean $EnableParameter 是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
     * @param string $DefaultParameters 启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果 Parameters 未提供，将使用这里的默认值进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     * @param string $Parameters Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     * @param array $Tags 如果保存命令，可为命令设置标签。列表长度不超过10。
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("SaveCommand",$param) and $param["SaveCommand"] !== null) {
            $this->SaveCommand = $param["SaveCommand"];
        }

        if (array_key_exists("EnableParameter",$param) and $param["EnableParameter"] !== null) {
            $this->EnableParameter = $param["EnableParameter"];
        }

        if (array_key_exists("DefaultParameters",$param) and $param["DefaultParameters"] !== null) {
            $this->DefaultParameters = $param["DefaultParameters"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
