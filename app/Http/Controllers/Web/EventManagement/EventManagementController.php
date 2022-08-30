<?php

namespace App\Http\Controllers\Web\EventManagement;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventManagementController extends Controller
{
    // Add Event view
	public function index()
	{
		return view('pages.eventManagement.add');
    }

	public function addTicket()
	{
		$this->validate($request, [
			'ticket_id' => ['required', 'integer', 'unique:tickets, ticket_id'],
			'ticket_no' => 'required|number|integer',		
			'price'     => 'required|number|integer',		
		]);

		$ticket = new Ticket;
	
		$ticket->ticket_id	= $request->ticket_id;
		$ticket->ticket_no 	= $request->ticket_no;
		$ticket->price 		= $request->price;
	
		$ticket->save();

	}

	// Add event action 
	public function addEvent()
	{
		$this->validate($request, [
			'event_name' 		=> ['required', 'string', 'unique:tickets, ticket_id'],
			'event_description' => 'required|string',		
			'organizer_name'    => 'required|string',	
			'start_date' 		=> 'required|date',		
			'end_date'     		=> 'required|date',			
		]);

		$event = new Event;
	
		$event->name			= $request->event_name;
		$event->description		= $request->event_description;
		$event->organizer_name	= $request->organizer_name;
		$event->start_date		= $request->start_date;
		$event->end_date		= $request->end_date;
	
		$event->save();

		$event_id = $event->id;
		$tickets = Ticket::whereIn('ticket_id' ,$ticket_ids)->get()->toArray();
		
		foreach ($tickets as $ticket) {
			$ticket->event_id = $event_id;
			$ticket->save();
		}
		

	}

}
