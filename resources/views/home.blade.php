@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <dashboard-component class="col-md-12" user="{{Auth::id()}}"></dashboard-component>
    </div>
</div>
@endsection
