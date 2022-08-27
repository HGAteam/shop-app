@extends('layouts.dashboard.base')
@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .material-icons.md-14 { font-size: 14px; }
    </style>
@endsection
@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">{{ __('Product images')}} "{{ $product->name }}"</h2>

            <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="photo" required>    
                <button type="submit" class="btn btn-primary btn-round">{{ __('Upload New Image')}}</button>
                <a href="{{ url('/home/products') }}" class="btn btn-default btn-round">{{ __('Back to Products')}}</a>
            </form>

            <hr>

            <div class="row">
            @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="{{ $image->url }}" width="250">
                        <form method="post" action="">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="image_id" value="{{ $image->id }}">
                            <button type="submit" class="btn btn-danger btn-round">{{ __('Delete Image')}}</button>
                            @if ($image->featured)
                            <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada actualmente">
                                <span class="material-icons md-14">favorite</span>
                            </button>
                            @else
                                <a href="{{ url('/home/products'.'/images='.$image->id.'/select/'.$product->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                    <span class="material-icons md-14">favorite</span>
                                </a>
                            @endif
                        </form>
                      </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

</div>

@endsection
