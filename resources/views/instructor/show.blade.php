@extends('layouts.app')

@section('content')
<script>
    window.instructors = @json($instructors);
</script>
<div id="instructor-list" class="panel-body">
</div>
<script src="{{ asset('js/instructor.js') }}"></script>
@endsection
