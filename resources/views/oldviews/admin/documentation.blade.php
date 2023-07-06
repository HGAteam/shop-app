@extends('layouts.front.base')
@section('content')
    <div class="container">

        <div class="accordion" id="accordionFAQ">

            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ __('How do I make a purchase?') }}
                            </button>
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{ __('How do I see the status of my purchase?') }}
                            </button>
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{ __('What are my details used for?') }}
                            </button>
                            @if (auth()->check() && auth()->user()->admin == 1)
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    {{ __('Manage Categories') }}
                                </button>
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    {{ __('Manage Products') }}
                                </button>
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    {{ __('Manage Users') }}
                                </button>
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    {{ __('Manage Orders') }}
                                </button>
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    {{ __('Change DLOCAL to production mode') }}
                                </button>
                            @endif
                        </div>
                        <div class="col-md-12 col-lg-8">

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionFAQ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                {{ __('How do I make a purchase?') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                {{ __('How do I see the status of my purchase?') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionFAQ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                {{ __('What are my details used for?') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if (auth()->check() && auth()->user()->admin == 1)
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionFAQ">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>
                                                    {{ __('Manage Categories') }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionFAQ">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>
                                                    {{ __('Manage Products') }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionFAQ">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>
                                                    {{ __('Manage Users') }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionFAQ">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>
                                                    {{ __('Manage Orders') }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                    data-parent="#accordionFAQ">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>
                                                    {{ __('Change DLOCAL to production mode') }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
