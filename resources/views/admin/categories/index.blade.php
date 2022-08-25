@extends('layouts.dashboard.base')
@section('content')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-3">{{ __('New Category')}}</h4>
                </div>
                <div class="card-body pt-0">
                    <form method="post" enctype="multipart/form-data" id="add_new">
                        <div class="form-group">
                            <label for="">{{ __('Name')}}</label>
                            <input type="text" name="name" class="form-control">
                            <small id="error-name" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('Description')}}</label>
                            <textarea name="description" class="form-control"></textarea>
                            <small id="error-description" class="text-danger"></small>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" data-process="submit">{{ __('Create')}}</button>
                            <button type="button" class="btn btn-danger" data-process="cancel">{{ __('Cancel')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-4">List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive" id="categories_table" style="width:100%;">
                        <thead class="p-0">
                            <tr>
                                <th>#</th>
                                <th width="125px">{{ __('Name')}}</th>
                                <th width="125px">{{ __('Slug')}}</th>
                                <th width="125px">{{ __('Description')}}</th>
                                <th width="200px"></th>
                            </tr>
                            </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="edit_category" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Edit Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="update_category">
                    <div class="form-group">
                        <label for="">{{ __('Name')}}</label>
                        <input type="text" name="edit_name" class="form-control">
                        <small id="error-edit_name" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Description')}}</label>
                        <textarea name="edit_description" class="form-control"></textarea>
                        <small id="error-edit_description" class="text-danger"></small>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-success" data-process="update">{{ __('Update')}}</button>
                        <button type="button" class="btn btn-danger" data-process="cancel_edit">{{ __('Cancel')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
$(function() {
    var table = document.querySelector('#categories_table');
    var datatable;
    var cancelButton = document.querySelector('[data-process="cancel"]');
    var submitButton = document.querySelector('[data-process="submit"]');   
    var form = document.getElementById('add_new');
    var modal = document.getElementById('edit_category');

    datatable = $(table).DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('home.get_categories') !!}',
        columns: [
            { data: 'id', name: 'id', className: 'text-center'},
            { data: 'name', name: 'name', className: 'text-center' },
            { data: 'slug', name: 'slug', searchable: false, className: 'text-center' },
            { data: 'description', name: 'description', searchable: false, orderable: false, className: 'text-center' },
            { data: null}
        ],
        "columnDefs": [
            {
                targets: 4,
                orderable: false, 
                searchable: false,
                className: 'text-center',
                render: function(data){
                    if(data.slug == 'online-courses'){
                    return `<div class="alert alert-primary" role="alert">
                        No Actions
                        </div>`;
                        }
                    else{
                     return `<a href="/home/categories/edit=${data.id}" class="btn btn-sm btn-success text-white" data-process="edit"><i class="fa fa-edit"></i></a>
                     <a href="/home/categories/delete=${data.id}" class="btn btn-sm btn-danger text-white" data-process="delete">Delete</a>`;
                    }
                }
            }
        ]
    });

    datatable.on('draw', function (){
        handleDeleteRow();
        handleEditRow();
    });
    
    cancelButton.addEventListener("click", function (e) {
        e.preventDefault();
        form.reset();
    });

    // ADD CATEGORIES
    submitButton.addEventListener("click", function (e) {
    e.preventDefault();   
        const name = document.querySelector('[name="name"]').value;
        const description = document.querySelector('[name="description"]').value;  
        $.ajax({
        url: "{{route('home.categories.store')}}",
        type: "POST",
        data:{
            name:name,
            description:description,
            _token: "{{ csrf_token() }}",
        },
        success:function(response){
            if (response) {
            alert(response.success); 
            form.reset();
            datatable.draw();
            }
        },
        error: function(response) {
            $('#error-name').text(response.responseJSON.errors.name);
            $('#error-description').text(response.responseJSON.errors.description);
        }
        });
    });
   
    
    // REMOVE CATEGORIES
    var handleDeleteRow = () => {
        const deleteButtons = table.querySelectorAll('[data-process="delete"]');

        deleteButtons.forEach((d) => {

            d.addEventListener("click", function (e ){
                e.preventDefault();

                const parent = e.target.closest("tr");
                const categoryName = parent.querySelectorAll("td")[1].innerText;
                const deleteUrl = parent.querySelectorAll("td")[4].querySelectorAll("a")[1].href;

                alert('Se eliminará '+categoryName);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    success: function(result) {
                        datatable.rows().remove().draw();
                    }
                });

            });
        });
    }

    //EDIT ROWS
    var handleEditRow = () => {
        const editButtons = table.querySelectorAll('[data-process="edit"]');
        const updateButton = document.querySelector('[data-process="update"]');
        const cancelEditButton = document.querySelector('[data-process="cancel_edit"]');     
        var update_form = document.getElementById('update_category');

        editButtons.forEach((ed) => {
            ed.addEventListener("click", function (e){
                e.preventDefault();
              
                $(modal).modal("show");
              
                const parent = e.target.closest("tr");
                update_form.querySelector('[name="edit_name"]').value = parent.querySelectorAll('td')[1].innerText; 
                update_form.querySelector('[name="edit_description"]').value = parent.querySelectorAll('td')[4].innerText;
                update_form.action = parent.querySelectorAll("td")[4].querySelectorAll("a")[0].href;
            });            
        });

        updateButton.addEventListener("click", function (e) {
            e.preventDefault();   
            let url = update_form.action;
            axios.post(url,new FormData(update_form))
            .then(function (response) {
                update_form.reset();
                datatable.draw();
                $(modal).modal('hide');
            })
            .catch(function (error){
            });
        }); 

        cancelEditButton.addEventListener("click", function (e) {
            e.preventDefault();
            update_form.reset();
            $(modal).modal('hide');
        });
    }

    });
    </script>
@endsection
@endsection