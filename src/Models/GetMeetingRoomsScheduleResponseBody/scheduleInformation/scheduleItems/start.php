<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation\scheduleItems;

use AlibabaCloud\Dara\Model;

class start extends Model
{
    /**
     * @var string
     */
    public $dateTime;
    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'dateTime' => 'DateTime',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
