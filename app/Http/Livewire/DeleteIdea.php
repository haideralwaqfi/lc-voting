<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Vote;
use Livewire\Component;

class DeleteIdea extends Component
{

    public $idea;
    public $title;


    public function mount(Idea $idea)
    {
        $this->idea = $idea;
    }

    public function deleteIdea()
    {

        if(auth()->guest() || auth()->user()->cannot('delete', $this->idea))
        {
            abort(403);
        }

        Vote::where('idea_id', $this->idea->id)->delete();
        Idea::destroy($this->idea->id);

        return redirect()->route('idea.index');
    }

    public function render()
    {
        return view('livewire.delete-idea');
    }
}
