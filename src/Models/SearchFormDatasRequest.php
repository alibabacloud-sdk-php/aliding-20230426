<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class SearchFormDatasRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $createFromTimeGMT;

    /**
     * @var string
     */
    public $createToTimeGMT;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dynamicOrder;

    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modifiedFromTimeGMT;

    /**
     * @var string
     */
    public $modifiedToTimeGMT;

    /**
     * @var string
     */
    public $originatorId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchFieldJson;

    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType' => 'AppType',
        'createFromTimeGMT' => 'CreateFromTimeGMT',
        'createToTimeGMT' => 'CreateToTimeGMT',
        'currentPage' => 'CurrentPage',
        'dynamicOrder' => 'DynamicOrder',
        'formUuid' => 'FormUuid',
        'language' => 'Language',
        'modifiedFromTimeGMT' => 'ModifiedFromTimeGMT',
        'modifiedToTimeGMT' => 'ModifiedToTimeGMT',
        'originatorId' => 'OriginatorId',
        'pageSize' => 'PageSize',
        'searchFieldJson' => 'SearchFieldJson',
        'systemToken' => 'SystemToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->createFromTimeGMT) {
            $res['CreateFromTimeGMT'] = $this->createFromTimeGMT;
        }

        if (null !== $this->createToTimeGMT) {
            $res['CreateToTimeGMT'] = $this->createToTimeGMT;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dynamicOrder) {
            $res['DynamicOrder'] = $this->dynamicOrder;
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->modifiedFromTimeGMT) {
            $res['ModifiedFromTimeGMT'] = $this->modifiedFromTimeGMT;
        }

        if (null !== $this->modifiedToTimeGMT) {
            $res['ModifiedToTimeGMT'] = $this->modifiedToTimeGMT;
        }

        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchFieldJson) {
            $res['SearchFieldJson'] = $this->searchFieldJson;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['CreateFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['CreateFromTimeGMT'];
        }

        if (isset($map['CreateToTimeGMT'])) {
            $model->createToTimeGMT = $map['CreateToTimeGMT'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DynamicOrder'])) {
            $model->dynamicOrder = $map['DynamicOrder'];
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ModifiedFromTimeGMT'])) {
            $model->modifiedFromTimeGMT = $map['ModifiedFromTimeGMT'];
        }

        if (isset($map['ModifiedToTimeGMT'])) {
            $model->modifiedToTimeGMT = $map['ModifiedToTimeGMT'];
        }

        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchFieldJson'])) {
            $model->searchFieldJson = $map['SearchFieldJson'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
