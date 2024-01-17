<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class ListTeamsRequest extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 2023-05-15T11:29Z
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTeamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
