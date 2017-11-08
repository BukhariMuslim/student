@extends('layouts.app')

@section('content')
<script>
    window.payments = @json($payments);
</script>
<div id="payment-list" class="panel-body">
</div>
<script src="{{ asset('js/payment.js') }}"></script>
@endsection
