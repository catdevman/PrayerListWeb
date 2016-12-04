@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: center; align-content: center; align-items: center; flex-wrap: wrap;">
    <div class="panel panel-default" style="min-width: 50%; padding: 5px;">
        {{Form::open(['url' => 'prayers'])}}
            <div class="form-group">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Description:') }}
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Add Prayer', ['class' => 'btn btn-primary form-control']) }}
            </div>
        {{Form::close()}}
    </div>
</div>
@endsection
