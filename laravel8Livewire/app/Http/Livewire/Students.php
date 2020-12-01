<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $ids;
    public $searchItems;

    public function resetInputFields()
    {
        
        $this->firstname = "";
        $this->lastname = "";
        $this->email = "";
        $this->phone = "";
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
    }
    //Store student
    public function store()
    {
        $validatedData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // dd($this->firstname, $this->lastname, $this->email, $this->phone);
        Student :: create( $validatedData );
        session()->flash('message', 'Student created Successfully!');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function edit($id)
    {
        $student = Student::where('id',$id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        if($this->ids)
        {
            $student = Student::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);

            session()->flash('message', 'Student updated Successfully!');
            $this->resetInputFields();
            $this->emit('studentUpdated');
        }
    }

    //student delete
    public function delete($id)
    {
        if($id)
        {
            Student::where('id', $id)->delete();
            session()->flash('message', 'Student deleted Successfully!');
        }
    }

    use WithPagination;
    public function render()
    {
        $searchItems = '%'.$this->searchItems . '%';
        $students = Student::where('firstname','LIKE',$searchItems)
        ->orWhere('lastname','LIKE',$searchItems)
        ->orWhere('email', 'LIKE', $searchItems)
        ->orWhere('phone', 'LIKE', $searchItems)
        ->orderBy('id','DESC')->paginate(5);
        return view('livewire.students', ['students'=>$students]);
    }
}
