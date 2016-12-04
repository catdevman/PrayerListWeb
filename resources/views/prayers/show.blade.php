@extends('layouts.app')

@section('content')

<a href="{{ url('home') }}"><button type="button" class="btn btn-primary" style="margin: 5px">Back</button></a>
<div style="display: flex; justify-content: center; align-content: center; align-items: center; flex-wrap: wrap;">
    <div class="panel panel-default" style="min-width: 50%">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $prayer->title }}</h3>
        </div>
        <div class="panel-body">
            {{ $prayer->description }}
        </div>
        <div class="panel-footer">
          By: {{ $prayer->user->name }}
      </div>
    </div>
</div>
<div style="display: flex; justify-content: center; align-content: center; align-items: center; flex-wrap: wrap;">
    <button id="edit" type="button" class="btn btn-warning" style="margin: 5px">Edit Prayer</button>
    <button id="delete" type="button" class="btn btn-danger" style="margin: 5px">Delete Prayer</button>
</div>

<script>
$( document ).ready( function(){
    $.ajaxPrefilter(function(options, originalOptions, xhr) { // this will run before each request
        var token = $('meta[name="csrf-token"]').attr('content'); // or _token, whichever you are using

        if (token) {
            return xhr.setRequestHeader('X-CSRF-TOKEN', token); // adds directly to the XmlHttpRequest Object
        }
    });
    $( "#delete" ).click( function(){
        $.ajax({
            url: '/prayers/' + {{ $prayer->id }},
            type: 'DELETE',
            success: function(result) {
                window.location = "{{ url('home') }}";
            }
        });
    });
    $( "#edit" ).click( function(){

    });
});
</script>
@endsection
