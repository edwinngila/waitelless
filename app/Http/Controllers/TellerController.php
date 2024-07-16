<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use App\Models\ActiveUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TellerController extends Controller
{
    //
    public function getUserTickets(){

        $user = Auth::user();
        $getUsers = ActiveUsers::where('user_id',$user->id);
        $getTickets = Tickets::where('service_point_id',$getUsers->service_point_id);

        // send the respose to the ui
        $cancelledTickets = Tickets::where('service_point_id',$getUsers->service_point_id)
            ->where('cancelled', true)
            ->count();

        $completedTickets = Tickets::where('service_point_id',$getUsers->service_point_id)
            ->where('completed', true)
            ->count();

        $activeTickets = Tickets::where('service_point_id',$getUsers->service_point_id)
            ->where('cancelled', false)
            ->where('completed', false)
            ->orderBy('created_at', 'asc')
            ->get();

            return view('teller.tellardash', compact('activeTickets','cancelledTickets','completedTickets'));
            // return view('teller.tellardash');
    }

    public function completeTicket(Request $request)
    {
        $ticketId = $request->input('id');
        // Save the completed ticket to the database logic here
        // Remove the active ticket


        $user = Auth::user();

        $newTransactions = new Transaction();
        $newTransactions->user_id =$user->id;
        $newTransactions->service_time =$request->ticket_timer;
        $newTransactions->ticket_id =$ticketId;
        $newTransactions->save();

        Tickets::where('id', $ticketId)->update(['completed' => true]);

        return redirect()->back();
    }

    public function clearTicket(Request $request)
    {
        $ticketId = $request->input('id');

        Tickets::where('id', $ticketId)->update(['completed' => true]);

        return redirect()->back();
    }

    public function nextTicket()
    {
            $user = Auth::user();
            $getUsers = ActiveUsers::where('user_id',$user->id);

            // Get all active tickets for the user
            $activeTickets = Tickets::where('service_point_id',$getUsers->service_point_id)
                ->where('cancelled', false)
                ->where('completed', false)
                ->orderBy('created_at', 'asc')
                ->get();

            if ($activeTickets->isEmpty()) {
                return redirect()->back()->with('message', 'No more tickets in line.');
            }

            // Get the current first ticket
            $currentTicket = $activeTickets->first();
            // Mark the current ticket as completed
            if ($currentTicket) {
                $currentTicket->update(['completed' => true]);
            }

            // Get the new first ticket after marking the current one as completed
            $nextTicket = $activeTickets->skip(1)->first();
            if ($nextTicket) {
                return redirect()->back()->with('message', 'Moved to next ticket.');
            } else {
                return redirect()->back()->with('message', 'No more tickets in line.');
            }
    }
}
