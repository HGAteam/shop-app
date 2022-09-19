@extends('layouts.dashboard.base')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="now-ui-icons ui-2_like"></i>
                            </div>
                            <strong>{{ __('Great') }}!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="now-ui-icons objects_support-17"></i>
                            </div>
                            <strong>{{ __('Oh snap') }}!</strong> {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif

                <table class="table table-striped table-bordered table-responsive" id="users_table" style="width:100%;">
                    <thead class="p-0">
                        <th>#</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('User') }}</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('Email') }}</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('Created At') }}</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('Terms') }}</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('Country') }}</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('City') }}</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('Street') }}</th>
                        <th style="min-width:160px;max-width:200px;font-size:14px;">{{ __('Phone') }}</th>
                        {{-- <th style="min-width:160px;max-width:200px;font-size:14px;"></th> --}}
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Modals -->
    {{-- <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="modelEditForm"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Edit User Info') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="edit_form">
                    @csrf
                    <div class="modal-body">
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-process="cancel_edit" class="btn btn-danger"
                            data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="button" data-process="update" class="btn btn-primary">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {

            var datatable;

            var table = document.querySelector('#users_table');

            // var modal = document.getElementById('edit_user');

            datatable = $(table).DataTable({

                processing: true,

                serverSide: true,

                ajax: "{!! route('home.get_users') !!}",

                columns: [

                    {
                        className: 'text-center',
                        data: 'id'
                    }, 
                    
                    {
                        className: 'text-center',
                        data: 'name'
                    },
                    
                    {
                        className: 'text-center',
                        data: 'email'
                    }, 
                    
                    {
                        className: 'text-center',
                        data: 'created_at'
                    },
                    
                    {
                        className: 'text-center',
                        data: 'terms'
                    },
                    
                    {
                        className: 'text-center',
                        data: 'country'
                    }, 
                    
                    {
                        className: 'text-center',
                        data: 'city'
                    },
                    
                    {
                        className: 'text-center',
                        data: 'street'
                    },
                    
                    {
                        className: 'text-center',
                        data: 'phone'
                    }

                ],

            });

            datatable.on('draw', function() {

                $('[data-toggle="tooltip"]').tooltip();

                // handleDeleteRow();

                // handleEditRow();
            });
            // REMOVE USERS

            // var handleDeleteRow = () => {

            //     const deleteButtons = table.querySelectorAll('[data-process="delete"]');

            //     deleteButtons.forEach((d) => {

            //         d.addEventListener("click", function(e) {

            //             e.preventDefault();

            //             const parent = e.target.closest("tr");

            //             const orderId = parent.querySelectorAll("td")[0].innerText;

            //             const deleteUrl = parent.querySelectorAll("td")[5].querySelectorAll(
            //                 "a")[1].href;

            //             if (confirm('The order ' + orderId + ' will be deleted') == true) {

            //                 $.ajaxSetup({

            //                     headers: {

            //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
            //                             'content')

            //                     }

            //                 });

            //                 $.ajax({

            //                     url: deleteUrl,

            //                     type: 'DELETE',

            //                     success: function(result) {

            //                         datatable.rows().remove().draw();

            //                     }

            //                 });

            //             } else {

            //                 alert('The order ' + orderId + ' was not removed');

            //             }

            //         });

            //     });

            // }

            // var handleEditRow = () => {

            //     const editButtons = table.querySelectorAll('[data-process="edit"]');

            //     const updateButton = document.querySelector('[data-process="update"]');

            //     const cancelEditButton = document.querySelector('[data-process="cancel_edit"]');

            //     let update_form = document.getElementById('edit_form');

            //     editButtons.forEach((ed) => {

            //         ed.addEventListener("click", function(e) {

            //             e.preventDefault();

            //             $(modal).modal("show");

            //             const parent = e.target.closest("tr");

            //             update_form.querySelector('[name="status"]').value = parent
            //                 .querySelectorAll('td')[2].innerText;

            //             update_form.action = parent.querySelectorAll("td")[5].querySelectorAll(
            //                 "a")[0].href;
            //         });

            //     });

            //     updateButton.addEventListener("click", function(e) {

            //         e.preventDefault();

            //         let url = update_form.action;

            //         axios.post(url, new FormData(update_form))

            //             .then(function(response) {

            //                 update_form.reset();

            //                 datatable.draw();

            //                 $(modal).modal('hide');

            //             })

            //             .catch(function(error) {

            //             });

            //     });

            //     cancelEditButton.addEventListener("click", function(e) {

            //         e.preventDefault();

            //         update_form.reset();

            //         $(modal).modal('hide');

            //     });

            // }
        });
    </script>
@endsection
@endsection
