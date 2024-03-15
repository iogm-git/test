<?php

namespace App\Http\Livewire\Member;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class Skills extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $skills = Skill::where('nama_skill', 'like', '%' . $this->search . '%')->paginate(2);

        $skills->withQueryString();

        return view('livewire.member.skills', ['skills' => $skills]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
