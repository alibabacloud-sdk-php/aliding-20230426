<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class StartCloudRecordRequest extends Model
{
    /**
     * @example speech
     *
     * @var string
     */
    public $mode;

    /**
     * @example relative_right
     *
     * @var string
     */
    public $smallWindowPosition;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example 61289fxxx
     *
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'mode'                => 'Mode',
        'smallWindowPosition' => 'SmallWindowPosition',
        'tenantContext'       => 'TenantContext',
        'conferenceId'        => 'conferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->smallWindowPosition) {
            $res['SmallWindowPosition'] = $this->smallWindowPosition;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCloudRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SmallWindowPosition'])) {
            $model->smallWindowPosition = $map['SmallWindowPosition'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        return $model;
    }
}