@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href="{{ route('prayers.create')}}"><span style="font-size: 2em;" class="glyphicon glyphicon-plus pull-right" title="Add Prayer" aria-hidden="true"></span></a></div>
                @include('prayers.index')
            </div>
        </div>
    </div>
</div>
@endsection
