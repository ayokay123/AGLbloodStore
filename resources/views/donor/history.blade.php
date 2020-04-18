@extends('layouts.app')

@section('content')
    <div class="container">
        @if( empty($history['items']) )
            <p>there no results</p>
        @else
            <p>you have results</p>
        @endif
    </div>
@endsection
