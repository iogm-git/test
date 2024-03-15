<?php

namespace App\Http\Livewire\Member;

use App\Models\UserSkill;
use Livewire\Component;

class User extends Component
{
    public $user;
    public $editSkill;
    public $skills;
    public $skillAdded;
    public $skillUpdated;
    public $skillDeleted;

    protected $listeners = ['skillAdded', 'skillUpdated', 'skillDeleted'];

    public function mount()
    {
        $this->skills = UserSkill::whereHas('user', function ($query) {
            $query->where('id', auth()->user()->id);
        })->get();

        $this->user = auth()->user()->nama;

        $this->editSkill = ['show' => false];
        $this->skillAdded = ['show' => false];
        $this->skillUpdated = ['show' => false];
        $this->skillDeleted = ['show' => false];
    }

    public function render()
    {
        return view('livewire.member.user');
    }

    public function edit($id, $nama_skill)
    {
        $this->editSkill = ['show' => true, 'id' => $id, 'nama_skill' => $nama_skill];
    }

    public function destroy($id)
    {
        UserSkill::where('id', $id)->delete();

        $this->emit('skillDeleted');
    }

    public function skillAdded()
    {
        $this->skills = UserSkill::whereHas('user', function ($query) {
            $query->where('id', auth()->user()->id);
        })->get();

        $this->skillAdded = ['show' => true, 'message' => 'Data berhasil ditambahkan'];

        $this->skillUpdated = ['show' => false];
        $this->skillDeleted = ['show' => false];
    }

    public function skillUpdated()
    {
        $this->skills = UserSkill::whereHas('user', function ($query) {
            $query->where('id', auth()->user()->id);
        })->get();

        $this->skillUpdated = ['show' => true, 'message' => 'Data berhasil diubah'];

        $this->editSkill = ['show' => false];

        $this->skillAdded = ['show' => false];
        $this->skillDeleted = ['show' => false];
    }

    public function skillDeleted()
    {
        $this->skills = UserSkill::whereHas('user', function ($query) {
            $query->where('id', auth()->user()->id);
        })->get();

        $this->skillDeleted = ['show' => true, 'message' => 'Data berhasil dihapus'];

        $this->skillAdded = ['show' => false];
        $this->skillUpdated = ['show' => false];
    }

    public function resetListeners()
    {
        $this->skillAdded = ['show' => false];
        $this->skillUpdated = ['show' => false];
        $this->skillDeleted = ['show' => false];
    }
}
