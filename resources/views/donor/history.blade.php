@extends('layouts.app')

@section('content')
    <div class="container">
        @if( empty($histo) )
            <p>there no results</p>
        @else
            <table>
                <tr>
                    <td>User id</td>
                    <td>Date</td>
                </tr>
                @foreach($histo as $h)
                    <tr>
                        <td>{{$h->user_id}}</td>
                        <td>{{$h->date}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
