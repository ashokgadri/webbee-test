<?php

namespace App\Repositories\Event;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;

class EventRepository
{

    protected $model;

    public function __construct(Event $model)
    {
        $this->model = $model;
    }

    public function getEventsWithWorkshops(){
        return $this->model->with('workshops')->get();
    }
}
