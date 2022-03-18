<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Database\Eloquent\Model;

class NotificationJob extends Job
{
    private $model;
    private $method;
    private $changes;

    public function __construct(Model $model, $changes, $method)
    {
        $this->onQueue('notification');
        $this->model = $model;
        $this->method = $method;
        $this->changes = $changes;
    }

    public function handle()
    {
        try {
            $model = $this->model;
            $changes = $this->changes;

            switch ($this->method) {
                case 'store':
                    //TODO publish created changes to message broker
                    break;
                case 'update':
                    //TODO publish updated changes to message broker
                    break;
                case 'delete':
                    //TODO publish deleted changes to message broker
                    break;
                case 'restore':
                    //TODO publish restored changes to message broker
                    break;
                case 'forceDelete':
                    //TODO publish forceDeleted changes to message broker
                    break;
            }
        } catch (\Exception $exception) {

        }
    }
}
