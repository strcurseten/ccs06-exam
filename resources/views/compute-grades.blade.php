<html>
    <title>Average Grade</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-sm">
            <h1>Students Average Grade</h1>
            <table class="table table-striped table-hover">
            <thread>
                <tr>
                    <th scope="col">Student</th>
                    <th scope="col">Midterm Grade</th>
                    <th scope="col">Finals Grade</th>
                    <th scope="col">Average Grade</th>
                    <th scope="col">Remarks</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>{{ $student_1 }}</td>
                    <td>{{ $s1_midterm }}</td>
                    <td>{{ $s1_final }}</td>
                    <td>{{ $s1_average }}</td>
                </tr>
                <tr>
                    <td>{{ $student_2 }}</td>
                    <td>{{ $s2_midterm }}</td>
                    <td>{{ $s2_final }}</td>
                    <td>{{ $s2_average }}</td>
                </tr>
                <tr>
                    <td>{{ $student_3 }}</td>
                    <td>{{ $s3_midterm }}</td>
                    <td>{{ $s3_final }}</td>
                    <td>{{ $s3_average }}</td>
                </tr>
                <tr>
                    <td>{{ $student_4 }}</td>
                    <td>{{ $s4_midterm }}</td>
                    <td>{{ $s4_final }}</td>
                    <td>{{ $s4_average }}</td>
                </tr>
                <tr>
                    <td>{{ $student_5 }}</td>
                    <td>{{ $s5_midterm }}</td>
                    <td>{{ $s5_final }}</td>
                    <td>{{ $s5_average }}</td>
                </tr>
            </tbody>
            </table>
        </div>
        
    </body>
</html>