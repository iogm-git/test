<?php

namespace App\Http\Livewire\Member;

use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Livewire\Component;

class EditSkill extends Component
{
    public $skill = '';
    public $skills = '';
    public $skill_id = '';
    public $edit_skill_id;
    public $edit_skill_nama;

    public function mount($id, $nama_skill)
    {
        $this->skills = Skill::all();
        $this->edit_skill_id = $id;
        $this->edit_skill_nama = $nama_skill;
    }

    public function render()
    {
        return view('livewire.member.edit-skill');
    }

    public function setSkill($id, $name)
    {
        $this->skill = $name;
        $this->skill_id = $id;
        return null;
    }

    public function update()
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

        UserSkill::where('id', $this->edit_skill_id)->update([
            'skill_id' => $id
        ]);

        $this->emit('skillUpdated');

        $this->skill = '';
        $this->skill_id = '';
        $this->edit_skill_id = '';
    }
}
