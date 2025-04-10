<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateVideoConferenceSettingRequest\tenantContext;

class UpdateVideoConferenceSettingRequest extends Model
{
    /**
     * @var bool
     */
    public $allowUnmuteSelf;

    /**
     * @var bool
     */
    public $autoTransferHost;

    /**
     * @var bool
     */
    public $forbiddenShareScreen;

    /**
     * @var bool
     */
    public $lockConference;

    /**
     * @var bool
     */
    public $muteAll;

    /**
     * @var bool
     */
    public $onlyInternalEmployeesJoin;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'allowUnmuteSelf' => 'AllowUnmuteSelf',
        'autoTransferHost' => 'AutoTransferHost',
        'forbiddenShareScreen' => 'ForbiddenShareScreen',
        'lockConference' => 'LockConference',
        'muteAll' => 'MuteAll',
        'onlyInternalEmployeesJoin' => 'OnlyInternalEmployeesJoin',
        'tenantContext' => 'TenantContext',
        'conferenceId' => 'conferenceId',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUnmuteSelf) {
            $res['AllowUnmuteSelf'] = $this->allowUnmuteSelf;
        }

        if (null !== $this->autoTransferHost) {
            $res['AutoTransferHost'] = $this->autoTransferHost;
        }

        if (null !== $this->forbiddenShareScreen) {
            $res['ForbiddenShareScreen'] = $this->forbiddenShareScreen;
        }

        if (null !== $this->lockConference) {
            $res['LockConference'] = $this->lockConference;
        }

        if (null !== $this->muteAll) {
            $res['MuteAll'] = $this->muteAll;
        }

        if (null !== $this->onlyInternalEmployeesJoin) {
            $res['OnlyInternalEmployeesJoin'] = $this->onlyInternalEmployeesJoin;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
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
        if (isset($map['AllowUnmuteSelf'])) {
            $model->allowUnmuteSelf = $map['AllowUnmuteSelf'];
        }

        if (isset($map['AutoTransferHost'])) {
            $model->autoTransferHost = $map['AutoTransferHost'];
        }

        if (isset($map['ForbiddenShareScreen'])) {
            $model->forbiddenShareScreen = $map['ForbiddenShareScreen'];
        }

        if (isset($map['LockConference'])) {
            $model->lockConference = $map['LockConference'];
        }

        if (isset($map['MuteAll'])) {
            $model->muteAll = $map['MuteAll'];
        }

        if (isset($map['OnlyInternalEmployeesJoin'])) {
            $model->onlyInternalEmployeesJoin = $map['OnlyInternalEmployeesJoin'];
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
