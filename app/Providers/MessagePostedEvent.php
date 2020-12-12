<?php

namespace App\Providers;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;
use App\Models\User;

class MessagePostedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    /**
     * Message
     *
     * @var Message
     */

    public $user;
    /**
     * User
     *
     * @var User
     */

    public function __construct(Message $message, User $user)
    {
        $this->message = $message;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('chatroom');
    }
}
