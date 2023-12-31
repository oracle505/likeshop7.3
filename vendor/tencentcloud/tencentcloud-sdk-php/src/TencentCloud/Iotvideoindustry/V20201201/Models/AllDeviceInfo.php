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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询全部设备出参
 *
 * @method string getDeviceId() 获取设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceType() 获取设备类型；2：IPC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceType(integer $DeviceType) 设置设备类型；2：IPC
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取设备状态；0：设备不在线；1：设备在线；2：设备隔离中；3：设备未注册
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置设备状态；0：设备不在线；1：设备在线；2：设备隔离中；3：设备未注册
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInformation() 获取设备扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInformation(string $ExtraInformation) 设置设备扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickName() 获取设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickName(string $NickName) 设置设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupPath() 获取设备绑定分组路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupPath(string $GroupPath) 设置设备绑定分组路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceCode() 获取设备编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceCode(string $DeviceCode) 设置设备编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRecord() 获取是否存在录像,，0:不存在；1：存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRecord(integer $IsRecord) 设置是否存在录像,，0:不存在；1：存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordable() 获取该设备是否可录制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordable(integer $Recordable) 设置该设备是否可录制
注意：此字段可能返回 null，表示取不到有效值。
 */
class AllDeviceInfo extends AbstractModel
{
    /**
     * @var string 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var integer 设备类型；2：IPC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceType;

    /**
     * @var integer 设备状态；0：设备不在线；1：设备在线；2：设备隔离中；3：设备未注册
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 设备扩展属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInformation;

    /**
     * @var string 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickName;

    /**
     * @var string 设备绑定分组路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupPath;

    /**
     * @var string 设备编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceCode;

    /**
     * @var integer 是否存在录像,，0:不存在；1：存在
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRecord;

    /**
     * @var integer 该设备是否可录制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Recordable;

    /**
     * @param string $DeviceId 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceType 设备类型；2：IPC
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 设备状态；0：设备不在线；1：设备在线；2：设备隔离中；3：设备未注册
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInformation 设备扩展属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NickName 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupPath 设备绑定分组路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceCode 设备编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRecord 是否存在录像,，0:不存在；1：存在
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Recordable 该设备是否可录制
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExtraInformation",$param) and $param["ExtraInformation"] !== null) {
            $this->ExtraInformation = $param["ExtraInformation"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("GroupPath",$param) and $param["GroupPath"] !== null) {
            $this->GroupPath = $param["GroupPath"];
        }

        if (array_key_exists("DeviceCode",$param) and $param["DeviceCode"] !== null) {
            $this->DeviceCode = $param["DeviceCode"];
        }

        if (array_key_exists("IsRecord",$param) and $param["IsRecord"] !== null) {
            $this->IsRecord = $param["IsRecord"];
        }

        if (array_key_exists("Recordable",$param) and $param["Recordable"] !== null) {
            $this->Recordable = $param["Recordable"];
        }
    }
}
