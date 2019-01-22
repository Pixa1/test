@extends ('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Car Request') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Car Request') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="start" class="col-sm-4 col-form-label text-md-right">{{ __('Start') }}</label>

                            <div class="col-md-6">
                                <input id="start" type="date" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="start" value="{{ old('start') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end" class="col-md-4 col-form-label text-md-right">{{ __('End') }}</label>

                            <div class="col-md-6">
                                <input id="end" type="date" class="form-control{{ $errors->has('end') ? ' is-invalid' : '' }}" name="end" required>
                            </div>
                        </div>

                        <div class="form-group row">
	                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Trip Description') }}</label>

	                        <div class="col-md-6">
	                            <input id="description" type="text" class="form-control{{ $errors->has('end') ? ' is-invalid' : '' }}" name="description" required>
	                        </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Request') }}
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