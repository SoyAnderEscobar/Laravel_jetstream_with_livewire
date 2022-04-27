<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        $lista_cursos= Course::take(9)->get();
        // $lista_cursos='anderson';

        return view('livewire.course-list',
        ['lista_cursos'=>$lista_cursos]);
    }
}
