<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function begin()
    {
        return view('begin');
    }

    public function enterGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('enter-grade', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageGrade($midterm, $final)
    {
        $average = ($midterm + $final) / 2;
        return round($average, 2);
    }

    public function computeGrades(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $s1_average = $this->computeAverageGrade($request->s1_midterm, $request->s1_final);
        $s2_average = $this->computeAverageGrade($request->s2_midterm, $request->s2_final);
        $s3_average = $this->computeAverageGrade($request->s3_midterm, $request->s3_final);
        $s4_average = $this->computeAverageGrade($request->s4_midterm, $request->s4_final);
        $s5_average = $this->computeAverageGrade($request->s5_midterm, $request->s5_final);

        return view('compute-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // student 1 grades
            's1_midterm' => $request->s1_midterm,
            's1_final' => $request->s1_final,
            's1_average' => $s1_average,
            // student 2 grades
            's2_midterm' => $request->s2_midterm,
            's2_final' => $request->s2_final,
            's2_average' => $s2_average,
            // student 3 grades
            's3_midterm' => $request->s3_midterm,
            's3_final' => $request->s3_final,
            's3_average' => $s3_average,
            // student 4 grades
            's4_midterm' => $request->s4_midterm,
            's4_final' => $request->s4_final,
            's4_average' => $s4_average,
            // student 5 grades
            's5_midterm' => $request->p5_midterm,
            's5_final' => $request->s5_final,
            's5_average' => $s5_average,
        ]);
    }
}