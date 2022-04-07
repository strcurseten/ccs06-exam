<html>
    <title>Students Grade</title>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-sm">
            <h1>Students Grade</h1>
            <form action="compute-grades" method="POST">
                <input type="hidden" name="student_1" value="{{ $student_1 }}">
                <input type="hidden" name="student_2" value="{{ $student_2 }}">
                <input type="hidden" name="student_3" value="{{ $student_3 }}">
                <input type="hidden" name="student_4" value="{{ $student_4 }}">
                <input type="hidden" name="student_5" value="{{ $student_5 }}">
                @csrf 
                
                <!--Student 1-->
                <div class="row">
                    <label>Student: <strong>{{ $student_1 }}</strong></label>
                    <div class="col col-md-4">
                        <label>Midterm Grade</label>
                        <input type="number" name="s1_midterm" class="form-control" required >
                    </div>
                    <div class="col col-md-4">
                        <label>Final Grade</label>
                        <input type="number" name="s1_final" class="form-control" required>
                    </div>
                </div> 

                <!--Student 2-->
                <br>
                <div class="row">
                    <label>Student: <strong>{{ $student_2 }}</strong></label>
                    <div class="col col-md-4">
                        <label>Midterm Grade</label>
                        <input type="number" name="s2_midterm" class="form-control" required>
                    </div>
                    <div class="col col-md-4">
                        <label>Final Grade</label>
                        <input type="number" name="s2_final" class="form-control" required>
                    </div>
                </div> 

                <!--Student 3-->
                <br>
                <div class="row">
                    <label>Student: <strong>{{ $student_3 }}</strong></label>
                    <div class="col col-md-4">
                        <label>Midterm Grade</label>
                        <input type="number" name="s3_midterm" class="form-control" required>
                    </div>
                    <div class="col col-md-4">
                        <label>Final Grade</label>
                        <input type="number" name="s3_final" class="form-control" required>
                    </div>
                </div> 

                <!--Student 4-->
                <br>
                <div class="row">
                    <label>Student: <strong>{{ $student_4 }}</strong></label>
                    <div class="col col-md-4">
                        <label>Midterm Grade</label>
                        <input type="number" name="s4_midterm" class="form-control" required>
                    </div>
                    <div class="col col-md-4">
                        <label>Final Grade</label>
                        <input type="number" name="s4_final" class="form-control" required>
                    </div>
                </div> 

                <!--Student 5-->
                <br>
                <div class="row">
                    <label>Student: <strong>{{ $student_5 }}</strong></label>
                    <div class="col col-md-4">
                        <label>Midterm Grade</label>
                        <input type="number" name="s5_midterm" class="form-control" required>
                    </div>
                    <div class="col col-md-4">
                        <label>Final Grade</label>
                        <input type="number" name="s5_final" class="form-control" required>
                    </div>
                </div> 
                <hr />
                <div class="row">
                    <button class="btn btn-primary btn-lg" type="submit">Compute Average Grade</button>
                </div>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>