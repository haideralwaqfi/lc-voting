<?php

namespace App\Http\Livewire;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;
use Livewire\Component;

class StatusFilter extends Component
{

    public $status = 'all';

    protected $queryString = [
        'status'
    ];

    public function getPreviousRouteName()
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;

        // if ($this->getPreviousRouteName() === 'idea.show') {
            return redirect()->route('idea.index', [
                'status' => $this->status,
            ]);
        // }
    }



    public function mount()
    {
        if (FacadesRoute::currentRouteName() === 'idea.show') {
            $this->status = null;
            $this->queryString = [];
        }
    }

    public function render()
    {
        return view('livewire.status-filter');
    }
}
