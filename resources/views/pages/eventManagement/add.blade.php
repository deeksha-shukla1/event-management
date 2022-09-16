@extends('.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add Content') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="event_name" class="col-md-4 col-form-label text-md-end">{{ __('Content Name:') }}</label>

                            <div class="col-md-6">
                                <input id="event_name" type="text" class="form-control @error('event_name') is-invalid @enderror" name="event_name" value="{{ old('event_name') }}" required autocomplete="off" autofocus>

                                @error('event_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="event_description" class="col-md-4 col-form-label text-md-end">{{ __('Content Description:') }}</label>

                            <div class="col-md-6">
                                <input id="event_description" type="text" class="form-control @error('event_description') is-invalid @enderror" name="event_description" required autocomplete="off">

                                @error('event_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="start_date" class="col-md-4 col-form-label text-md-end">{{ __('Start Date:') }}</label>

                            <div class="col-md-2">
                                <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" required autocomplete="off">

                                @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

							<label for="end_date" class="col-md-2 col-form-label text-md-end">{{ __('End Date:') }}</label>

                            <div class="col-md-2">
                                <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" required autocomplete="off">

                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                            <label for="organizer_name" class="col-md-4 col-form-label text-md-end">{{ __('Class Name:') }}</label>

                            <div class="col-md-6">
                                <input id="organizer_name" type="text" class="form-control @error('organizer_name') is-invalid @enderror" name="organizer_name" required autocomplete="off">

                                @error('organizer_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" class="btn btn-info">
                                    {{ __('Add Content') }}
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
