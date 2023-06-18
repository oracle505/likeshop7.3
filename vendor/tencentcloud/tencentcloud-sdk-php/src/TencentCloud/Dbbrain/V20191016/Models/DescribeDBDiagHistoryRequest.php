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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBDiagHistory请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method string getStartTime() 获取开始时间，如“2019-09-10 12:13:14”。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2019-09-10 12:13:14”。
 * @method string getEndTime() 获取结束时间，如“2019-09-11 12:13:14”，结束时间与开始时间的间隔最大可为2天。
 * @method void setEndTime(string $EndTime) 设置结束时间，如“2019-09-11 12:13:14”，结束时间与开始时间的间隔最大可为2天。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 */
class DescribeDBDiagHistoryRequest extends AbstractModel
{
    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，如“2019-09-10 12:13:14”。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如“2019-09-11 12:13:14”，结束时间与开始时间的间隔最大可为2天。
     */
    public $EndTime;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例 ID 。
     * @param string $StartTime 开始时间，如“2019-09-10 12:13:14”。
     * @param string $EndTime 结束时间，如“2019-09-11 12:13:14”，结束时间与开始时间的间隔最大可为2天。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
