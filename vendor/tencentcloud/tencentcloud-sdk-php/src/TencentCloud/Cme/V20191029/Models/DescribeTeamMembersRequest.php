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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTeamMembers请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getTeamId() 获取团队 ID。
 * @method void setTeamId(string $TeamId) 设置团队 ID。
 * @method array getMemberIds() 获取成员 ID 列表，限指定30个指定成员。如不填，则返回指定团队下的所有成员。
 * @method void setMemberIds(array $MemberIds) 设置成员 ID 列表，限指定30个指定成员。如不填，则返回指定团队下的所有成员。
 * @method integer getOffset() 获取分页偏移量，默认值：0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0
 * @method integer getLimit() 获取返回记录条数，默认值：30，最大值：30。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：30，最大值：30。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 */
class DescribeTeamMembersRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 团队 ID。
     */
    public $TeamId;

    /**
     * @var array 成员 ID 列表，限指定30个指定成员。如不填，则返回指定团队下的所有成员。
     */
    public $MemberIds;

    /**
     * @var integer 分页偏移量，默认值：0
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：30，最大值：30。
     */
    public $Limit;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $TeamId 团队 ID。
     * @param array $MemberIds 成员 ID 列表，限指定30个指定成员。如不填，则返回指定团队下的所有成员。
     * @param integer $Offset 分页偏移量，默认值：0
     * @param integer $Limit 返回记录条数，默认值：30，最大值：30。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("MemberIds",$param) and $param["MemberIds"] !== null) {
            $this->MemberIds = $param["MemberIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
