@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size:60px;">{{ __('WELCOME TO GETIT.') }}</div>

                <div class="card-body" style="font-size:40px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You lose it, we GETIT!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



