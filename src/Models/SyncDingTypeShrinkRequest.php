<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SyncDingTypeShrinkRequest extends Model
{
    /**
     * @example ANT_DING
     *
     * @var string
     */
    public $dingType;

    /**
     * @example antding
     *
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example 012345
     *
     * @var string
     */
    public $workNo;
    protected $_name = [
        'dingType'            => 'DingType',
        'source'              => 'Source',
        'tenantContextShrink' => 'TenantContext',
        'workNo'              => 'WorkNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingType) {
            $res['DingType'] = $this->dingType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->workNo) {
            $res['WorkNo'] = $this->workNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncDingTypeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingType'])) {
            $model->dingType = $map['DingType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['WorkNo'])) {
            $model->workNo = $map['WorkNo'];
        }

        return $model;
    }
}
