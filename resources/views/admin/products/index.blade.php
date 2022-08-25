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
                    <h4 class="m-3">{{ __('New Product')}}</h4>
                </div>
                <div class="card-body pt-0">
                    <form action="" method="post" enctype="multipart/form-data" id="new_product">
                    @csrf
                        <div class="form-group">
                            <label for="">{{ __('Name')}}</label>
                            <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label class="">{{ __('Category')}}</label>
                            <select class="form-control" name="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('Description')}}</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('Price')}}</label>
                            <input type="number" placeholder="US$ 1.0" step="0.01" name="price" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" data-process="submit" class="btn btn-primary">{{ __('Create')}}</button>
                            <button type="button" data-process="cancel" class="btn btn-danger">{{ __('Cancel')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-4">{{ __('Product List')}}</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive" id="products_table" style="width:100%;">
                        <thead class="p-0">
                            <tr>
                                <th>#</th>
                                <th width="125px">{{ __('Product')}}</th>
                                <th width="125px">{{ __('Category')}}</th>
                                <th width="125px">{{ __('Price')}}</th>
                                <th width="125px">{{ __('Description')}}</th>
                                <th style="min-width:200px;max-width:200px"></th>
                            </tr>
                            </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="edit_product" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Edit Product')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="edit_form">
                    <div class="form-group">
                        <label for="">{{ __('Name')}}</label>
                        <input type="text" name="edit_name" class="form-control">
                        <small id="error-edit_name" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Category')}}</label>
                        <select class="form-control" name="edit_category">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <small id="error-edit_category" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Description')}}</label>
                        <textarea name="edit_description" class="form-control"></textarea>
                        <small id="error-edit_description" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Price')}}</label>
                        <input type="number" placeholder="US$ 1.0" step="0.01" name="edit_price" class="form-control">
                        <small id="error-edit_price" class="text-danger"></small>
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
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(function() {
    var datatable;
    var table = document.querySelector('#products_table');
    var cancelButton = document.querySelector('[data-process="cancel"]');
    var submitButton = document.querySelector('[data-process="submit"]');
    var form = document.getElementById('new_product');
    var modal = document.getElementById('edit_product');  

    datatable = $(table).DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route('home.get_products') !!}",
        columns: [
            { data: 'id', name: 'id', className: 'text-center'},
            { data: 'name', name: 'name', className: 'text-center' },
            { data: 'category.name', name: 'category.name', searchable: false, className: 'text-center' },
            { data: 'price', name: 'price', searchable: false, className: 'text-center' },
            { data: 'description', name: 'description', searchable: false, orderable: false, className: 'text-center' },
            { data: null}
        ],
        "columnDefs": [
            {
                targets: 5,
                orderable: false, 
                searchable: false,
                className: 'text-center',
                render: function(data){
                    return `
                    <a href="/home/products/images=${data.id}" class="btn btn-sm btn-secondary text-white" data-process="image" data-toggle="tooltip" data-placement="bottom" title="Add Image"><i class="fa fa-image"></i></a>
                    <a href="/home/products/edit=${data.id}" class="btn btn-sm btn-success text-white" data-process="edit" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="/home/products/delete=${data.id}" class="btn btn-sm btn-danger text-white" data-process="delete">Delete</a>`;
                }
            }
        ]
    });
    
    datatable.on('draw', function() {
        $('[data-toggle="tooltip"]').tooltip();
        handleDeleteRow();
        handleEditRow();
    });

    cancelButton.addEventListener("click", function (e) {
        e.preventDefault();
        form.reset();
    });

    // ADD PRODUCTS
    submitButton.addEventListener("click", function (e) {
        e.preventDefault();   
        const name = document.querySelector('[name="name"]').value;
        const category = document.querySelector('[name="category"]').value;
        const description = document.querySelector('[name="description"]').value;  
        const price = document.querySelector('[name="price"]').value;
        $.ajax({
            url: "{{route('home.products.store')}}",
            type: "POST",
            data:{
                name:name,
                category:category,
                description:description,
                price:price,
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
                $('#error-category').text(response.responseJSON.errors.category);
                $('#error-description').text(response.responseJSON.errors.description);
                $('#error-price').text(response.responseJSON.errors.price);
            }
        });
    });

    // REMOVE PRODUCTS
    var handleDeleteRow = () => {
        const deleteButtons = table.querySelectorAll('[data-process="delete"]');

        deleteButtons.forEach((d) => {

            d.addEventListener("click", function (e ){
                e.preventDefault();

                const parent = e.target.closest("tr");
                const productName = parent.querySelectorAll("td")[1].innerText;
                const deleteUrl = parent.querySelectorAll("td")[5].querySelectorAll("a")[2].href;

                alert('Se eliminará '+ productName);
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

    var handleEditRow = () => {
        const editButtons = table.querySelectorAll('[data-process="edit"]');
        const updateButton = document.querySelector('[data-process="update"]');
        const cancelEditButton = document.querySelector('[data-process="cancel_edit"]');     
        var update_form = document.getElementById('edit_form');

        editButtons.forEach((ed) => {
            ed.addEventListener("click", function (e){
                e.preventDefault();
                $(modal).modal("show");
                const parent = e.target.closest("tr");
                update_form.querySelector('[name="edit_name"]').value = parent.querySelectorAll('td')[1].innerText; 
                update_form.querySelector('[name="edit_category"]').selected = parent.querySelectorAll('td')[2].innerText;
                update_form.querySelector('[name="edit_price"]').value = parent.querySelectorAll('td')[3].innerText;
                update_form.querySelector('[name="edit_description"]').value = parent.querySelectorAll('td')[4].innerText;
                update_form.action = parent.querySelectorAll("td")[5].querySelectorAll("a")[1].href;
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