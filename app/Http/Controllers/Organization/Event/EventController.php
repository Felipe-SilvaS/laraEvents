<?php

namespace App\Http\Controllers\Organization\Event;

use App\Http\Requests\Organization\Event\EventRequest;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        //código para pesquisa
        $events = Event::query();

        if (isset($request->search) && $request->search !== '') {
            $events->where('name', 'like', '%'.$request->search.'%');
        }

        return view(
            'organization.events.index',
            ['events' => $events->paginate(2),
            'search' => isset($request->search) ? $request->search : ''
            ]
        );
    }

    public function create()
    {
        return view('organization.events.create');
    }

    public function store(EventRequest $request)
    {
        Event::create($request->validated());

        return redirect()
            ->route('organization.events.index')
            ->with('success', 'Evento cadastro com sucesso');
    }
}
