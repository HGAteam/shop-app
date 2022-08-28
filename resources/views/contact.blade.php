@extends('layouts.front.base')
@section('page-type', 'index-page')
@section('content')
    <div class="section section-contact-us text-center py-0">
        <div class="container">
            <h2 class="title">{{ __('Do you have any question?') }}</h2>
            <p class="description">{{ __('Your question is very important to us') }}.</p>
            <div class="row">
                <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                    <div class="input-group input-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ __('Full Name') }}...">
                    </div>
                    <div class="input-group input-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ __('Email') }}...">
                    </div>
                    <div class="input-group input-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="now-ui-icons travel_info"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ __('Subject') }}...">
                    </div>
                    <div class="textarea-container">
                        <textarea class="form-control" name="name" rows="4" cols="80" placeholder="{{ __('Type a message') }}..."></textarea>
                    </div>
                    <div class="send-button">
                        <a href="#pablo"
                            class="btn btn-primary btn-round btn-block btn-lg">{{ __('Send Message') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
