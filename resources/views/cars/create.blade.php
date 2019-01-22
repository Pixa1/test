@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new car') }}</div>
                <div class="card-body">
                    <form class="form" role="form" method="POST">
                        @csrf
                            <div class="form-group row">
                                <label for="make" class="col-sm-4 col-form-label text-md-right">{{ __('Make') }}</label>

                                <div class="col-md-6">
                                    <input id="marka" type="text" class="form-control{{ $errors->has('marka') ? ' is-invalid' : '' }}" name="marka" value="{{ old('marka') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="model" class="col-sm-4 col-form-label text-md-right">{{ __('Model') }}</label>

                                <div class="col-md-6">
                                    <input id="model" type="text" class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" value="{{ old('model') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="color" class="col-sm-4 col-form-label text-md-right">{{ __('Color') }}</label>

                                <div class="col-md-6">
                                    <input id="color" type="text" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ old('color') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="reg" class="col-sm-4 col-form-label text-md-right">{{ __('Reg Ozn') }}</label>

                                <div class="col-md-6">
                                    <input id="reg" type="text" class="form-control{{ $errors->has('reg') ? ' is-invalid' : '' }}" name="reg" value="{{ old('reg') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create a car') }}
                                    </button>

                                </div>
                            </div>              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection