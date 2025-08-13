<?php

namespace App\Livewire;

use Livewire\Component;

class Ticket extends Component
{
    public function render()
    {
        $polis = \App\Models\Poli::with('tickets')->get();

        $tickets = $polis->map(function ($poli) {
            return collect([
                'id' => $poli->id,
                'code' => $poli->code,
                'name' => $poli->name,
                'ticket' => $poli->code . str_pad($poli->tickets->count() + 1, 3, '0', STR_PAD_LEFT),
                'waiting' => $poli->tickets->where('status', false)->count(),
            ])->toArray();
        });

        return view(
            'livewire.ticket',
            [
                'tickets' => $tickets
            ]
        );
    }

    public function store($poliId)
    {
        $poli = \App\Models\Poli::findOrFail($poliId);
        $ticketNumber = $poli->tickets->count() + 1;

        $poli->tickets()->create([
            'number' => $poli->code . str_pad($ticketNumber, 3, '0', STR_PAD_LEFT),
            'status' => false,
        ]);
    }
}
