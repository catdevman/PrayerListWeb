@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href="{{ route('prayers.create')}}">Create Prayer</a></div>
                @include('prayers.index')
            </div>
        </div>
    </div>
</div>
@endsection
