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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePackIndex返回参数结构体
 *
 * @method array getData() 获取字段值，如下：
TotalPackCount：资源数
AttackPackCount：清洗中的资源数
BlockPackCount：封堵中的资源数
ExpiredPackCount：过期的资源数
ExpireingPackCount：即将过期的资源数
IsolatePackCount：隔离中的资源数
 * @method void setData(array $Data) 设置字段值，如下：
TotalPackCount：资源数
AttackPackCount：清洗中的资源数
BlockPackCount：封堵中的资源数
ExpiredPackCount：过期的资源数
ExpireingPackCount：即将过期的资源数
IsolatePackCount：隔离中的资源数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePackIndexResponse extends AbstractModel
{
    /**
     * @var array 字段值，如下：
TotalPackCount：资源数
AttackPackCount：清洗中的资源数
BlockPackCount：封堵中的资源数
ExpiredPackCount：过期的资源数
ExpireingPackCount：即将过期的资源数
IsolatePackCount：隔离中的资源数
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 字段值，如下：
TotalPackCount：资源数
AttackPackCount：清洗中的资源数
BlockPackCount：封堵中的资源数
ExpiredPackCount：过期的资源数
ExpireingPackCount：即将过期的资源数
IsolatePackCount：隔离中的资源数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
