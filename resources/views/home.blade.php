@extends('layouts.dashboard.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-3">
                        {{ __('Welcome Back') }}
                        <small>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are successfully logged in!') }}
                        </small>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-5 text-center">
                                    <h4>
                                        {{ __('Productcs')}}
                                    </h4>
                                    <h1>({{count(\App\Models\Product::all())}})</h1>
                                </div>
                            </div>                        
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-5 text-center">
                                    <h4>
                                        {{ __('Orders')}}
                                    </h4>
                                    <h1>
                                        0
                                    </h1>                                
                                </div>
                            </div>
                        </div>  
                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-5 text-center">
                                    <h4>
                                        {{ __('Earning')}}
                                    </h4>
                                    <h1>
                                        US$ 0.0
                                    </h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
