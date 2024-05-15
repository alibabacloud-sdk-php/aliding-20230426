<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class DeleteDriveSpaceShrinkHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $accountContextShrink;
    protected $_name = [
        'accountContextShrink' => 'AccountContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->accountContextShrink) {
            $res['AccountContext'] = $this->accountContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDriveSpaceShrinkHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['AccountContext'])) {
            $model->accountContextShrink = $map['AccountContext'];
        }

        return $model;
    }
}
