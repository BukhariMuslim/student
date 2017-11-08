@extends('layouts.app')

@section('content')
<script>
    window.courses = @json($courses);
</script>
<div id="course-list" class="panel-body">
</div>
<script src="{{ asset('js/course.js') }}"></script>
@endsection
