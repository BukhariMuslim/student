@extends('layouts.app')

@section('content')
<script>
    @isset($payments)
        window.datas = @json($payments);
    @endisset
    @isset($students)
        window.datas = @json($students);
    @endisset
    @isset($query)
        window.datasQuery = @json($query);
    @endisset
    @isset($name)
        window.queryName = @json($name);
    @endisset

    console.log(window.datas)
    console.log(window.queryName)
    console.log(window.datasQuery)
</script>
<div class="panel-body">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="list-group">
                <a href="{{ route('getTotalStudentWithCourse') }}" class="list-group-item">
                    Show total amount of students that enroll at least 1 course.
                </a>
                <a href="{{ route('getFemaleInstructor') }}" class="list-group-item">Show all female instructors.</a>
                <a href="{{ route('inActiveStudent') }}" class="list-group-item">Show the students that are not active.</a>
                <a href="{{ route('enrollMoreThanTwo') }}" class="list-group-item">Show the students that enrolls more than 2 courses.</a>
                <a href="{{ route('totalPayment') }}" class="list-group-item">Show the total amount of payment by 1 student that pay for 3 courses.</a>
                <a href="{{ route('haventPaid') }}" class="list-group-item">Show the students that haven't paid the course payment.</a>
                <a href="{{ route('highestPayment') }}" class="list-group-item">Show the highest payment amongst all axisted payment.</a>
            </div>
        </div>
    </div>
</div>
<div id="other-list" class="panel-body">
</div>  
<script src="{{ asset('js/other.js') }}"></script>
@endsection
