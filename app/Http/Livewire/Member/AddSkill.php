<?php

namespace App\Http\Livewire\Member;

use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Livewire\Component;

class AddSkill extends Component
{
    public $skill_id = '';
    public $skill = '';

    public function render()
    {
        return view('livewire.member.add-skill', ['skills' => Skill::all(), 'skill' => $this->skill_id]);
    }

    public function setSkill($id, $name)
    {
        $this->skill_id = $id;
        $this->skill = $name;
        return null;
    }

    public function store()
    {
        $id = $this->skill_id;

        if ($id == '') {
            $this->addError('skill', 'Please select a skill.');
            return;
        }

        $check = User::find(auth()->user()->id)->skills()->where(
            'skill_id',
            $this->skill_id
        )->exists();

        if ($check) {
            $this->addError('skill', 'The skills are there.');
            return;
        }

        UserSkill::create([
            'user_id' => auth()->user()->id,
            'skill_id' => $id
        ]);

        $this->skill_id = '';
        $this->skill = '';

        $this->emit('skillAdded');
    }
}
