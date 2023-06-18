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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteNatGatewaySourceIpTranslationNatRule请求参数结构体
 *
 * @method string getNatGatewayId() 获取NAT网关的ID，形如：`nat-df45454`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID，形如：`nat-df45454`。
 * @method array getNatGatewaySnatIds() 获取NAT网关的SNAT ID列表，形如：`snat-df43254`。
 * @method void setNatGatewaySnatIds(array $NatGatewaySnatIds) 设置NAT网关的SNAT ID列表，形如：`snat-df43254`。
 */
class DeleteNatGatewaySourceIpTranslationNatRuleRequest extends AbstractModel
{
    /**
     * @var string NAT网关的ID，形如：`nat-df45454`。
     */
    public $NatGatewayId;

    /**
     * @var array NAT网关的SNAT ID列表，形如：`snat-df43254`。
     */
    public $NatGatewaySnatIds;

    /**
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-df45454`。
     * @param array $NatGatewaySnatIds NAT网关的SNAT ID列表，形如：`snat-df43254`。
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewaySnatIds",$param) and $param["NatGatewaySnatIds"] !== null) {
            $this->NatGatewaySnatIds = $param["NatGatewaySnatIds"];
        }
    }
}
