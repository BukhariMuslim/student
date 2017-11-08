@extends('layouts.app')

@section('content')
<script>
    @isset($payments)
        window.payments = @json($payments);
    @endisset
</script>
<div class="panel-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="list-group">
                <a href="{{ action('StudentController@getTotalStudentWithCourse') }}" class="list-group-item">
                    Show total amount of students that enroll at least 1 course.
                </a>
                <a href="{{ action('InstructorController@getFemaleInstructor') }}" class="list-group-item">Show all female instructors.</a>
                <a href="{{ action('StudentController@inActiveStudent') }}" class="list-group-item">Show the students that are not active.</a>
                <a href="{{ action('StudentController@enrollMoreThanTwo') }}" class="list-group-item">Show the students that enrolls more than 2 courses.</a>
                <a href="{{ action('StudentController@totalPayment') }}" class="list-group-item">Show the total amount of payment by 1 student that pay for 3 courses.</a>
                <a href="{{ action('StudentController@haventPaid') }}" class="list-group-item">Show the students that haven't paid the course payment.</a>
                <a href="{{ action('StudentController@highestPayment') }}" class="list-group-item">Show the highest payment amongst all axisted payment.</a>
            </div>
        </div>
    </div>
    <div id="other-list">
    </div>
</div>
@endsection
