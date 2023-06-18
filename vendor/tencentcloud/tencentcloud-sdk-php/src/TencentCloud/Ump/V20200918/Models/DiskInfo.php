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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 硬盘监控信息
 *
 * @method string getDiskName() 获取硬盘名字
 * @method void setDiskName(string $DiskName) 设置硬盘名字
 * @method float getUsage() 获取硬盘使用率
 * @method void setUsage(float $Usage) 设置硬盘使用率
 */
class DiskInfo extends AbstractModel
{
    /**
     * @var string 硬盘名字
     */
    public $DiskName;

    /**
     * @var float 硬盘使用率
     */
    public $Usage;

    /**
     * @param string $DiskName 硬盘名字
     * @param float $Usage 硬盘使用率
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
        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }
    }
}
