<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordResponseBody\createdBy;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordResponseBody\lastModifiedBy;

class GetMultiDimTableRecordResponseBody extends Model
{
    /**
     * @var createdBy
     */
    public $createdBy;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var mixed[]
     */
    public $fields;

    /**
     * @var string
     */
    public $id;

    /**
     * @var lastModifiedBy
     */
    public $lastModifiedBy;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'createdBy' => 'CreatedBy',
        'createdTime' => 'CreatedTime',
        'fields' => 'Fields',
        'id' => 'Id',
        'lastModifiedBy' => 'LastModifiedBy',
        'lastModifiedTime' => 'LastModifiedTime',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (null !== $this->createdBy) {
            $this->createdBy->validate();
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (null !== $this->lastModifiedBy) {
            $this->lastModifiedBy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = null !== $this->createdBy ? $this->createdBy->toArray($noStream) : $this->createdBy;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                foreach ($this->fields as $key1 => $value1) {
                    $res['Fields'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastModifiedBy) {
            $res['LastModifiedBy'] = null !== $this->lastModifiedBy ? $this->lastModifiedBy->toArray($noStream) : $this->lastModifiedBy;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBy'])) {
            $model->createdBy = createdBy::fromMap($map['CreatedBy']);
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                foreach ($map['Fields'] as $key1 => $value1) {
                    $model->fields[$key1] = $value1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastModifiedBy'])) {
            $model->lastModifiedBy = lastModifiedBy::fromMap($map['LastModifiedBy']);
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
