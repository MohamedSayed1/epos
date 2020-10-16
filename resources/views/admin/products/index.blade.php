@extends('admin.layout.admin')

@section('content')
    <!-- Model  add  -->
    <div id="modal_default" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">اضافه منتج جديد</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="addForm" method="post" action="#" enctype="multipart/form-data">
                    <div class="modal-body modael_here">
                        <div class="col-md-12">
                            <label><span class="text-danger">*</span>الاسم</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"
                                   required>
                            <span class="help-block">
                                     <strong class="name-error text-danger"></strong>
                                </span>

                        </div>
                        <div class="col-md-12">
                            <label>البركود</label>
                            <input type="text" name="parcod" id="parcod" class="form-control" value="{{old('parcod')}}">
                            <span class="help-block">
                                     <strong class="parcod-error text-danger"></strong>
                                </span>

                        </div>
                        <div class="col-md-12">
                            <label><span class="text-danger">*</span>العدد</label>
                            <input type="number" min="0" id="count" step='any' name="count" class="form-control"
                                   value="{{old('count')}}" required>
                            <span class="help-block">
                                     <strong class="count-error text-danger"></strong>
                                </span>

                        </div>
                        <div class="col-md-12">
                            <label><span class="text-danger">*</span>سعر التكلفة </label>
                            <input type="number" min="0" step='any' id="pruch_prices" name="pruch_prices"
                                   class="form-control"
                                   value="{{old('pruch_prices')}}" required>
                            @if ($errors->has('pruch_prices'))
                                <span class="help-block">
                                     <strong class="pruch_prices-error text-danger"></strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label><span class="text-danger">*</span>سعر البيع</label>
                            <input type="number" min="0" step='any' id="prices" name="prices" class="form-control"
                                   value="{{old('prices')}}" required>
                            <span class="help-block">
                                     <strong class="prices-error text-danger"></strong>
                                </span>
                        </div>
                        <div class="form-group">
                            <label>الصوره</label>
                            <input type="file" name="photo" id="photo" class="form-input-styled" data-fouc>
                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                            <span class="help-block">
                                     <strong class="photo-error text-danger"></strong>
                                </span>

                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>

                    <div class="modal-footer ">

                        <button type="button" id="addSubmit"
                                class="btn btn-primary btn-labeled btn-labeled-left btn-sm"><b><i
                                        class="icon-checkmark2"></i></b>حفظ
                        </button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">اغلاق</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Model  add  -->
    <div id="modal_default_2" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">تعديل</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{url('dashboard/expenses/updated')}}" method="post">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label>الاسم</label>
                            <input type="text" name="name" id="name_updated" class="form-control"
                                   value="{{old('name')}}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                     <strong class="text-danger">{{$errors->first('name')}}</strong>
                                </span>
                            @endif
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input id="id" type="hidden" name="id" value="">
                    </div>

                    <div class="modal-footer ">
                        <button type="submit" class="btn btn-primary btn-labeled btn-labeled-left btn-sm"><b><i
                                        class="icon-checkmark2"></i></b>حفظ
                        </button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">اغلاق</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i>
                    <span class="font-weight-semibold">المنتجات</span></h4>
            </div>
        </div>
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i> الرئيسيه</a>
                    <span class="breadcrumb-item active">المنتجات</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">
                            <button id="no-overlay" type="button"
                                    class="btn btn-primary btn-labeled btn-labeled-left btn-lg"><b><i
                                            class="icon-plus-circle2"></i></b> اضافه منتج جديد
                            </button>
                        </h6>
                    </div>
                    <div class="card-body">

                        <table id="xtreme-table55" class="tasks-list table expensessetupPage">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>البركود</th>
                                <th>العدد</th>
                                <th>سعر الشراء</th>
                                <th>سعر البيع</th>
                                <th>صوره المنتج</th>
                                <th>الخصم</th>
                                <th>الاعدادات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($products))
                                @foreach($products as $pro)
                                    <tr>
                                        <td>{{ $pro->name }}</td>
                                        <td>{{ $pro->parcod }}</td>
                                        <td>{{ $pro->count }}</td>
                                        <td>{{ $pro->pruch_prices }}</td>
                                        <td>{{ $pro->prices }}</td>
                                        <td>
                                            @if(!empty($pro->photo) && file_exists(public_path().'/upload/'.$pro->photo))
                                            <div class="mr-md-3 mb-2 mb-md-0">
                                                <a target="_blank" href="{{url('upload/'.$pro->photo)}}">
                                                    <img src="{{url('upload/'.$pro->photo)}}" class="rounded-circle" width="42" height="42" alt="">
                                                </a>
                                            </div>
                                                @endif
                                           </td>
                                        <td>{{ $pro->discount }}</td>
                                        <td>
                                            <div class="list-icons">
                                                <div class="dropdown show">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"
                                                       aria-expanded="top"><i class="icon-menu9"></i></a>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                         style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 21px, 0px);">
                                                        <a href="#"
                                                           class="dropdown-item  updated_expenses{{$pro->product_id}}"
                                                           data-toggle="tooltip"
                                                           data-placement="bottom" title=""
                                                           data-original-title="تعديل "
                                                           onclick="updated({{$pro->product_id}})"
                                                           data-name="{{ $pro->name }}"
                                                        > <i
                                                                    class="icon-pencil7"></i> تعديل
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('template/back/assets/global_assets/js/plugins/ui/prism.min.js')}}"></script>
    <script src="{{asset('template/back/assets/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('template/back/assets/global_assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script>
        $('#no-overlay').on('click', function () {
            $('#modal_default').modal('show');

            var block = $('.modael_here');
            $(block).block({
                message: '<span class="font-weight-semibold float-left left">..برجاء الانتظار</span>',
                timeout: 200,
                overlayCSS: {
                    backgroundColor: '#1b2024',
                    opacity: 0.8,
                    zIndex: 1200,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    color: '#fff',
                    padding: 10,
                    zIndex: 1201,
                    backgroundColor: 'transparent'
                },
            });

        });

        function updated(id) {
            var name = $('.updated_expenses' + id).data('name');
            $('#name_updated').val(name);
            $('#id').val(id);
            $('#modal_default_2').modal('show');
        }

        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-pink-400'
        });


        $(document).ready(function () {
            $('#addSubmit').click(function () {
                if($('#photo')[0].files.length != 0)
                {
                    var photo = $('#photo')[0].files[0];

                }else
                var name = $('#name').val();
                var parcod = $('#parcod').val();
                var count = $('#count').val();
                var pruch_prices = $('#pruch_prices').val();
                var prices = $('#prices').val();

                var formItem = new FormData();
                formItem.append("_token", '{!! csrf_token() !!}');
                formItem.append("name", name);
                formItem.append("parcod", parcod);
                formItem.append("count", count);
                formItem.append("pruch_prices", pruch_prices);
                formItem.append("prices", prices);
                if($('#photo')[0].files.length != 0)
                {
                    formItem.append("photo", photo);
                }



                $.ajax({
                    url: '{{url("/dashboard/products")}}',
                    method: 'POST',
                    data: formItem,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        document.getElementById("addSubmit").disabled = true;
                        var block = $('.modael_here');
                        $(block).block({
                            message: '<span class="font-weight-semibold float-left left">..برجاء الانتظار</span>',
                            overlayCSS: {
                                backgroundColor: '#1b2024',
                                opacity: 0.8,
                                zIndex: 1200,
                                cursor: 'wait'
                            },
                            css: {
                                border: 0,
                                color: '#fff',
                                padding: 10,
                                zIndex: 1201,
                                backgroundColor: 'transparent'
                            },
                        });
                        $('.photo-error').html('');
                        $('.name-error').html('');
                        $('.parcod-error').html('');
                        $('.count-error').html('');
                        $('.pruch_prices-error').html('');
                        $('.prices-error').html('');
                    },
                    success: function (data) {
                        var block = $('.modael_here');
                        $(block).unblock();
                        document.getElementById("addSubmit").disabled = false;
                        if (data.status == 200) {
                            Swal.fire({
                                title: 'تم الحفظ  عمل رائع',
                                text: "هل تريد ادخال المزيد",
                                icon: 'success',
                                showCancelButton: true,
                                confirmButtonColor: '#008000',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'حفظ وعوده',
                                cancelButtonText: 'حفظ والاستمرار للاضافه منتج اخري',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();

                                } else {
                                    $('#photo').val('');
                                    $('#name').val('');
                                    $('#parcod').val('');
                                    $('#count').val('');
                                    $('#pruch_prices').val('');
                                    $('#prices').val('');
                                    $('.photo-error').html('');
                                    $('.name-error').html('');
                                    $('.parcod-error').html('');
                                    $('.count-error').html('');
                                    $('.pruch_prices-error').html('');
                                    $('.prices-error').html('');
                                }
                            })
                        } else {
                            $.each(data.data, function (key, value) {
                                $('.' + key + '-error').html(value);
                            });
                        }

                    },
                    error: function (data) {
                        alert('برجاء المحاوله مره اخري .. ');
                        var block = $('.modael_here');
                        $(block).unblock();
                        document.getElementById("addSubmit").disabled = false;

                    }
                });


            });
        });
    </script>
    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 1)
        <script>
            $(function () {
                $('#modal_default').modal('show');
            });
        </script>
    @elseif(!empty(Session::get('error_code')) && Session::get('error_code') == 2)
        <script>
            $(function () {
                $('#modal_default_2').modal('show');
            });
        </script>
    @endif
@endsection