<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\TicketUpdateRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::latest()->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function delete(Ticket $ticket)
    {
        return view('tickets.delete', compact('ticket'));
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(TicketUpdateRequest $request, $token)
    {
        $user = User::where('token', $token)->first();
        $newTicket = Ticket::create([
            'summary' => request('summary'),
            'description' => request('description'),
            'status' => request('status'),
        ]);
        $mytickets = json_decode($user->mytickets, true) ?? [];

        $mytickets[] = [
            'id' => $newTicket->id,
            'tname' => request('summary'),
            'summary' => request('description'),
            'status' => request('status'),
        ];

        $user->mytickets = json_encode($mytickets);
        $user->save();
        return redirect()->route('client.page', ['token' => $token]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        $statuses = Status::get();
        return view('tickets.show', compact(['ticket', 'statuses']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketUpdateRequest $request, Ticket $ticket)
    {
        $ticket->summary = request('summary');
        $ticket->description = request('description');
        $ticket->status = request('status');
        $ticket->save();
        return redirect()->route('tickets.index')->withSuccess('Ticket has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->withError('Ticket has been deleted');
    }
}
