<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ticket;

class TicketsController extends Controller
{
    //

    public function getTicketByID($id){
        return response()->json(Ticket::find($id), 200);
    }

    public function createTicket(Request $request){
        $time = $request->input('time');
        $results = Ticket::where('time', $time)->get();
        if(count($results)<20){
            $ticket= Ticket::create($request->all());
            return response()->json($ticket,201);
        }
        else{
            return 'Seats full for given timings.';
        }
    }

    public function updateTicket(Request $request, Ticket $ticket){
        $ticket->update($request->all());
        return response()->json($ticket, 200);
    }

    public function deleteTicket(Request $request, Ticket $ticket){
        $ticket->delete();
        return response()->json(null,204);
    }

    public function showAllTickets($time){
        $results=Ticket::where('time', $time)->get();
        return response()->json($results,200);
    }
}
