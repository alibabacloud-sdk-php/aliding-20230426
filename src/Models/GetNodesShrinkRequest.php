<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetNodesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $nodeIdsShrink;

    /**
     * @var string
     */
    public $optionShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'nodeIdsShrink' => 'NodeIds',
        'optionShrink' => 'Option',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeIdsShrink) {
            $res['NodeIds'] = $this->nodeIdsShrink;
        }

        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
        if (isset($map['NodeIds'])) {
            $model->nodeIdsShrink = $map['NodeIds'];
        }

        if (isset($map['Option'])) {
            $model->optionShrink = $map['Option'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
