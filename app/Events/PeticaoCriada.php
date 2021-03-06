<?php

namespace App\Events;

use App\Peticao;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PeticaoCriada
{
    use InteractsWithSockets, SerializesModels;

    public $peticao;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Peticao $pet)
    {
        $this->peticao = $pet;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
