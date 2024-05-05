<?php

namespace App\Livewire\Backend;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Subject;

class Category extends Component
{
    #[Validate('required')]
    public $subject_name;

    public function subject_insert(){
        $this->validate();
        Subject::insert([
            'subject_name'=>$this->subject_name,
            'created_at'=>now(),
        ]);
        $this->reset();
        session()->flash('CtgrAdMsg', 'Subject Successfully Added.');
    }

    public function edit_subject($id){
        $edit_subjects = Subject::find($id);
        $this->subject_name = $edit_subjects->subject_name;
    }

    public function subject_update($id){
        Subject::find($id)->update([
            'subject_name'=>$this->subject_name,
            'updated_at'=>now(),
        ]);
        session()->flash('ctgrUpdtMsg', 'Subject Successfully Updated.');
    }

    public function delete_subject($id){
        Subject::find($id)->delete();
    }

    public function render()
    {
        $subjects = Subject::all();
        return view('livewire.backend.category', compact('subjects'));
    }
}
