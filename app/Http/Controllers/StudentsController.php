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

    protected function gradeRemarks($average)
    {
        if ($average >= 75) {
            return $remark = "PASSED";
        }
        return $remark = "FAILED";

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

        $s1_remark = $this->gradeRemarks($s1_average);
        $s2_remark = $this->gradeRemarks($s2_average);
        $s3_remark = $this->gradeRemarks($s3_average);
        $s4_remark = $this->gradeRemarks($s4_average);
        $s5_remark = $this->gradeRemarks($s5_average);

        return view('compute-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // Student 1 grades
            's1_midterm' => $request->s1_midterm,
            's1_final' => $request->s1_final,
            's1_average' => $s1_average,
            's1_remark' => $s1_remark,
            // Student 2 grades
            's2_midterm' => $request->s2_midterm,
            's2_final' => $request->s2_final,
            's2_average' => $s2_average,
            's2_remark' => $s2_remark,
            // Student 3 grades
            's3_midterm' => $request->s3_midterm,
            's3_final' => $request->s3_final,
            's3_average' => $s3_average,
            's3_remark' => $s3_remark,
            // Student 4 grades
            's4_midterm' => $request->s4_midterm,
            's4_final' => $request->s4_final,
            's4_average' => $s4_average,
            's4_remark' => $s4_remark,
            // Student 5 grades
            's5_midterm' => $request->s5_midterm,
            's5_final' => $request->s5_final,
            's5_average' => $s5_average,
            's5_remark' => $s5_remark,
        ]);
    }
}
