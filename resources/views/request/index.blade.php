@extends("layouts.app")

@section("content")
    <div class="container">
        <form action="{{ route('request.store') }}" method="POST">
            @csrf
            <input type="text" hidden value="{{$id}}" name="user_id">
            <div class="form-group row">
                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                <div class="col-md-6">
                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                    @error('date')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="blood_type" class="col-md-4 col-form-label text-md-right">{{ __('Blood Type') }}</label>

                <div class="col-md-6">
                    <select class="form-control @error('blood_type') is-invalid @enderror" id="blood_type" name="blood_type">
                        <option>select ...</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                        <option value="O+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                    </select>

                    @error('blood_type')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Number of bags') }}</label>

                <div class="col-md-6">
                    <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                    @error('quantity')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <input type="submit" value="SEND">
        </form>
    </div>
@endsection
