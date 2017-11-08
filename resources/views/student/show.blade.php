@extends('layouts.app')

@section('content')
<script>
    window.students = @json($students);
</script>
<div id="student-list" class="panel-body">
</div>
<script src="{{ asset('js/student.js') }}"></script>
@endsection
