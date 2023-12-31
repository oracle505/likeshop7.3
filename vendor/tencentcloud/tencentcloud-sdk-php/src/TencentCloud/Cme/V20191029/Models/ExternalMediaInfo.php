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
 * 媒资绑定资源信息，包含媒资绑定模板 ID 和文件信息。
 *
 * @method integer getDefinition() 获取媒资绑定模板 ID。
 * @method void setDefinition(integer $Definition) 设置媒资绑定模板 ID。
 * @method string getMediaKey() 获取媒资绑定媒体路径或文件 ID。
 * @method void setMediaKey(string $MediaKey) 设置媒资绑定媒体路径或文件 ID。
 */
class ExternalMediaInfo extends AbstractModel
{
    /**
     * @var integer 媒资绑定模板 ID。
     */
    public $Definition;

    /**
     * @var string 媒资绑定媒体路径或文件 ID。
     */
    public $MediaKey;

    /**
     * @param integer $Definition 媒资绑定模板 ID。
     * @param string $MediaKey 媒资绑定媒体路径或文件 ID。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("MediaKey",$param) and $param["MediaKey"] !== null) {
            $this->MediaKey = $param["MediaKey"];
        }
    }
}
