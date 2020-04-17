@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Donate
                </div>
                <div class="card-body">
                    <a href='{{ route("donate") }}' class="btn btn-primary">Go to donate</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Receive
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Go to receive</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
