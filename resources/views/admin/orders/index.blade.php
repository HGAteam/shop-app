@extends('layouts.dashboard.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-4">{{ __('Orders')}}</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive" id="categories_table" style="width:100%;">
                        <thead class="p-0">
                            <tr>
                                <th>#</th>
                                <th colspan="3">{{ __('From')}}</th>
                                <th colspan="4">{{ __('Product')}}</th>
                                <th width="125px">{{ __('Price')}}</th>
                                <th width="200px"></th>
                            </tr>
                        </thead>
                        <tfoot>
                          <tr></tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection