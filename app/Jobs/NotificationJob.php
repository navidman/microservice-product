<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\User;

class NotificationJob extends Job
{
    private $method;
    private $changes;

    public function __construct($changes, $method)
    {
        $this->onQueue('notification');
        $this->method = $method;
        $this->changes = $changes;
    }

    public function handle()
    {
        try {
            $changes = $this->changes;

            switch ($this->method) {
                case 'store':
                    User::create([
                        'id' => $changes->id,
                        'mobile' => $changes->mobile,
                        'otp' => $changes->otp,
                        'otp_expired_at' => $changes->otp_expired_at,
                    ]);
                    break;
                case 'update':
                    User::update([
                        'id' => $changes->id,
                        'mobile' => $changes->mobile,
                        'otp' => $changes->otp,
                        'otp_expired_at' => $changes->otp_expired_at,
                    ]);
                    break;
                case 'delete':
                    break;
                case 'restore':
                    break;
                case 'forceDelete':
                    break;
            }
        } catch (\Exception $exception) {

        }
    }
}
