@extends('admin.layout.admin')
@section('css')
    <style>

        #calac_tabel {
            width: 100%;
            border-color: #f4f4f4;
            max-width: 73%;
            margin:0 auto;
        }

        .calactor_buttom {
            width: 73%;
            height: 50px;
            font-size: 20px;
            background-color: white;
            border: none;
        }

        #inputLabel {
            height: 40px;
            font-size: 20px;
            vertical-align: bottom;
            text-align: right;
            padding-right: 16px;
            background-color: #ececec;
            overflow-wrap: break-word !important;
            word-wrap: break-word !important;
            hyphens: auto !important;

        }

        #acButton {
            background-color: #a0144b;
        }

        .media-list {
            max-height: 28%;
            overflow-y: auto;
             height: 300px;
        }

    </style>
@endsection
@section('content')
    <div id="modal_default" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" id="modal_pay">

            </div>
        </div>
    </div>
    <!-- Page header -->
    <div class="page-header page-header-light">
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
        <div class="col-md-8">
            <div class="card scroll_product">
                <div class="card-header bg-light header-elements-inline">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="text" id="serach" class="form-control form-control-lg"
                               placeholder="اسم المنتج , الباركود">
                        <div class="form-control-feedback form-control-feedback-lg">
                            <i class="icon-search4"></i>
                        </div>
                    </div>
                </div>

                <div class="card-body" id="fetch_data">
                    @include('admin.session.product')
                </div>
                <!-- /left content -->
            </div>
        </div>
        <div class="col-md-4">

            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">الفاتوره</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body" id="cart_product">
                   @include('admin.session.cart')
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold"><i class="icon-calculator2"></i></span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body text-wrap">
                    <table id="calac_tabel" class="pull-sm-left" border="1" cellspacing="0">
                        <tr>
                            <td colspan="4" class="text-nowrap" id="inputLabel">0</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <button class="calactor_buttom" id="acButton" onclick="pushBtn(this);">AC</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">/</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">7</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">8</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">9</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">*</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">4</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">5</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">6</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">-</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">1</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">2</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">3</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">+</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="calactor_buttom" onclick="pushBtn(this);">0</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">.</button>
                            </td>
                            <td>
                                <button class="calactor_buttom" onclick="pushBtn(this);">=</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card border-left-3 border-left-success rounded-left-0">
                <div class="card-body">
                    <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                        <div>
                            <h6 class="font-weight-semibold">Rebecca Manes</h6>
                            <ul class="list list-unstyled mb-0">
                                <li>Invoice #: &nbsp;0027</li>
                                <li>Issued on: <span class="font-weight-semibold">2015/02/24</span></li>
                            </ul>
                        </div>

                        <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                            <h6 class="font-weight-semibold">$5,100</h6>
                            <ul class="list list-unstyled mb-0">
                                <li>Method: <span class="font-weight-semibold">Paypal</span></li>
                                <li class="dropdown">
                                    Status: &nbsp;
                                    <a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
                                        <a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
                                        <a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
                                        <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
														<span>
															<span class="badge badge-mark border-success mr-2"></span>
															Due:
															<span class="font-weight-semibold">2015/03/24</span>
														</span>

                    <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                        <li class="list-inline-item">
                            <a href="#" class="text-default"><i class="icon-eye8"></i></a>
                        </li>
                        <li class="list-inline-item dropdown">
                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>

                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(33px, 0px, 0px);">
                                <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
                                <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
                            </div>
                        </li>
                    </ul>
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
    <script src="{{asset('template/back/assets/global_assets/js/demo_pages/form_input_groups.js')}}"></script>
    <script src="{{asset('template/back/assets/global_assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.page-link', function (event) {
                event.preventDefault();

                var page = $(this).attr('href').split('page=')[1];
                var serach = $('#serach').val();
                fetch_data(page, serach);
            });

            $(document).on('keyup', '#serach', function () {
                var serach = $('#serach').val();
                fetch_data(1, serach);
            });

            function fetch_data(page, serach) {
                $.ajax({
                    url: "{{url('/dashboard/session/pagintaion/fetch_data?page=')}}" + page + "&serach=" + serach,
                    beforeSend: function () {

                    },
                    success: function (data) {
                        $('#fetch_data').html(data);
                    }
                });
            }
        });

        var inputLabel = document.getElementById('inputLabel');

        function pushBtn(obj) {

            var pushed = obj.innerHTML;

            if (pushed == '=') {
                // Calculate
                inputLabel.innerHTML = eval(inputLabel.innerHTML);

            } else if (pushed == 'AC') {
                // All Clear
                inputLabel.innerHTML = '0';

            } else {
                if (inputLabel.innerHTML == '0') {
                    inputLabel.innerHTML = pushed;

                } else {
                    inputLabel.innerHTML += pushed;
                }
            }

        }

        function quty(id, object) {
            $.ajax({
                url: '{{url("card/updated")}}',
                method: 'post',
                data: {
                    id: id,
                    q: object.value,
                    _token: '{{csrf_token()}}'
                },
                success: function (data) {
                    $('#cart_product').html(data);
                    $('.touchspin-no-mousewheel').TouchSpin({
                        mousewheel: false
                    });
                    $('.media-list').css({
                         'max-height' :'28%',
                          'overflow-y':'auto',
                        'height': '300px',
                    });

                },
                error: function (data) {
                    alert('برجاء المحاوله مره اخري .. ');
                }
            });
        }

        function addCard(id) {
            $.ajax({
                url: '{{url("card/add/")}}/' + id,
                method: 'get',
                success: function (data) {
                    $('#cart_product').html(data);
                    $('.touchspin-no-mousewheel').TouchSpin({
                        mousewheel: false
                    });
                    $('.media-list').css({
                        'max-height' :'28%',
                        'overflow-y':'auto',
                        'height': '300px',
                    });

                },
                error: function (data) {
                    alert('برجاء المحاوله مره اخري .. ');
                }
            });

        }
        function deleteCart(id) {

            $.ajax({
                url: '{{url("card/del/")}}/' + id,
                method: 'get',
                beforeSend:function(){
                    return confirm("تاكيد الحذف من الفاتوره");
                },
                success: function (data) {
                    $('#cart_product').html(data);
                    $('.touchspin-no-mousewheel').TouchSpin({
                        mousewheel: false
                    });

                    $('.media-list').css({
                        'max-height' :'28%',
                        'overflow-y':'auto',
                        'height': '300px',
                    });

                },
                error: function (data) {
                    alert('برجاء المحاوله مره اخري .. ');
                }
            });


        }

        function dumpbill() {
            $.ajax({
                url: '{{url("card/dump")}}',
                method: 'get',
                beforeSend:function(){
                    return confirm("تاكيد تفريغ الفاتوره ؟؟");
                },
                success: function (data) {
                    $('#cart_product').html(data);
                },
                error: function (data) {
                    alert('برجاء المحاوله مره اخري .. ');
                }
            });
        }

        function pay() {

            $('#modal_default').modal('show');

            $.ajax({
                url: '{{url("card/pay/view")}}',
                method: 'get',
                success: function (data) {
                    $('#modal_pay').html(data);
                },
                error: function (data) {
                    alert('برجاء المحاوله مره اخري .. ');
                }
            });

        }
        function rest(object,total) {
            var paid = object.value;
            var oprate = Number(paid) -  Number(total) ;
            $('#rest_total').html(oprate);


        }

        function savebill() {
            $.ajax({
                url: '{{url("card/paid")}}',
                method: 'get',
                success: function (data) {

                    $('#modal_default').modal('hide');
                    $('#cart_product').html('');
                    var url = "{{url('/dashboard/session/point/get/bill')}}"+'/'+data.data ;
                    if(data.status == 200)
                    {
                        Swal.fire({
                            title: 'عمل رائع',
                            text: "هل تريد طباعه الفاتوره",
                            showCancelButton: true,
                            confirmButtonColor: '#008000',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'طباعه',
                            cancelButtonText: 'غلق',
                        }).then((result) => {
                            if (result.value) {
                                window.open(url, "_blank", "width=500, height=500");
                            }
                            else {
                                var serach = $('#serach').val();
                                fetch_data(1, serach);
                            }
                        });
                    }
                },
                error: function (data) {
                    alert('برجاء المحاوله مره اخري .. ');
                }
            });

        }

    </script>


@endsection