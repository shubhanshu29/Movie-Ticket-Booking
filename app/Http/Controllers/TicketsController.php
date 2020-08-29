<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketsController extends Controller
{
    //
    public function index(){
        return response()->json(Ticket::get(), 200);
    }

    public function getTicketByID($id){
        return response()->json(Ticket::find($id), 200);
    }

    public function createTicket(Request $request){
        $ticket= Ticket::create($request->all());
        return response()->json($ticket,201);
    }

    public function updateTicket(Request $request, Ticket $ticket){
        $ticket->update($request->all());
        return response()->json($ticket, 200);
    }

    public function deleteTicket(Request $request, Ticket $ticket){
        $ticket->delete();
        return response()->json(null,204);
    }
}
