<?php

namespace App\Livewire;

use Livewire\Component;

class DisplayTicket extends Component
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

        return view('livewire.display-ticket', [
            'tickets' => $tickets
        ]);
    }
}
