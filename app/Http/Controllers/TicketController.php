<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $polis = Poli::with('tickets')->get();

        $tickets = $polis->map(function ($poli) {
            return collect([
                'id' => $poli->id,
                'code' => $poli->code,
                'name' => $poli->name,
                'ticket' => $poli->code . str_pad($poli->tickets->count() + 1, 3, '0', STR_PAD_LEFT),
                'waiting' => $poli->tickets->where('status', false)->count(),
            ])->toArray();
        });

        return view('tickets.index', compact('tickets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'poli_id' => 'required|exists:polis,id',
        ]);

        $poli = Poli::findOrFail($request->poli_id);
        $ticketNumber = $poli->tickets->count() + 1;

        $ticket = $poli->tickets()->create([
            'number' => $poli->code . str_pad($ticketNumber, 3, '0', STR_PAD_LEFT),
            'status' => false,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully: ' . $ticket->number);
    }
}
