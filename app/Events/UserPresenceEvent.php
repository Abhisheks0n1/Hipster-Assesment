<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserPresenceEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userId;
    public $guard;
    public $isOnline;

    public function __construct($userId, $guard, $isOnline)
    {
        $this->userId = $userId;
        $this->guard = $guard;
        $this->isOnline = $isOnline;
    }

    public function broadcastOn(): array
    {
        return [new PresenceChannel('presence.users')];
    }

    public function broadcastWith(): array
    {
        return [
            'userId' => $this->userId,
            'guard' => $this->guard,
            'isOnline' => $this->isOnline,
        ];
    }
}