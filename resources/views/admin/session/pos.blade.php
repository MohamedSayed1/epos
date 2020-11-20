@extends('admin.layout.admin')

@section('content')
    <!-- Model  add  -->
    <div id="modal_default" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">فتح جلسه جديده</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="post" action="{{url('/dashboard/session')}}">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label>الرصيد الافتتاحي</label>
                            <input type="number" min="0" step='any' name="opening_balance" class="form-control" value="{{old('opening_balance')}}" required>
                                <span class="help-block">
                                     <strong class="text-danger opening_balance-errors">{{$errors->first('opening_balance')}}</strong>
                                </span>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                            <input type="text" name="name" id="name_updated" class="form-control" value="{{old('name')}}">
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


    <div id="modal_default3" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" id="modal_close">

            </div>
        </div>
    </div>

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i>
                    <span class="font-weight-semibold">الجلسات</span></h4>
            </div>
        </div>
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i> الرئيسيه</a>
                    <span class="breadcrumb-item active">الجلسات</span>
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
                            @if(Auth()->user()->open_seesion == null)
                            <button id="no-overlay" type="button"
                                    class="btn btn-primary btn-labeled btn-labeled-left btn-lg"><b><i
                                            class="icon-plus-circle2"></i></b> فتح جلسه
                            </button>
                           @endif
                        </h6>
                    </div>
                    <div class="card-body">

                        <table id="xtreme-table55" class="tasks-list table expensessetupPage">
                            <thead>
                            <tr>
                                <th>الحاله</th>
                                <th>رقم الجلسه</th>
                                <th>تاريخ الفتح</th>
                                <th>رصيد الافتتاحي</th>
                                <th>فاتح الجلسه</th>
                                <th>غلق الجلسه</th>
                                <th>رصيد الختامي</th>
                                <th>تاريخ الغلق</th>
                                <th>الاعدادات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($sessions))
                                @foreach($sessions as $session)
                                    <tr>
                                        <td>{{ $session->type == 1 ?'مفتوحه':'مغلقه' }}</td>
                                        <td>{{ $session->num_session }}</td>
                                        <td>{{ $session->created_at}}</td>
                                        <td>{{ $session->opening_balance }}</td>
                                        <td>{{ $session->user_id_open }}</td>
                                        <td>{{ $session->user_id_close }}</td>
                                        <td>{{ $session->close_balance }}</td>
                                        <td>{{ $session->close_at }}</td>
                                        <td>
                                            <div class="list-icons">
                                                <div class="dropdown show">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"
                                                       aria-expanded="top"><i class="icon-menu9"></i></a>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                         style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 21px, 0px);">
                                                        <a href="#"
                                                           class="dropdown-item  updated_expenses{{$session->session_id}}"
                                                           data-toggle="tooltip"
                                                           data-placement="bottom" title=""
                                                           data-original-title="تعديل "
                                                           onclick="updated({{$session->session_id}})"
                                                        > <i class="icon-pencil7"></i> تعديل
                                                        </a>
                                                        <a href="#"
                                                           class="dropdown-item"
                                                           data-toggle="tooltip"
                                                           data-placement="bottom" title="غلق الورديه"
                                                           data-original-title="غلق الورديه "
                                                           onclick="closeSession({{$session->session_id}})"
                                                        > <i class="icon-close2"></i> غلق الورديه
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
    <script src="{{asset('template/back/assets/global_assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script>
        $('#no-overlay').on('click', function () {
            $('#modal_default').modal('show');
        });

        function  updated(id)
        {
            var name =  $('.updated_expenses'+id).data('name');
            $('#name_updated').val(name);
            $('#id').val(id);
            $('#modal_default_2').modal('show');
        }


        function closeSession(id) {
            $('#modal_default3').modal('show');

            $.ajax({
                url: '{{url("dashboard/session/point/pref/total")}}'+'/'+id,
                method: 'get',
                success: function (data) {
                    $('#modal_close').html(data);
                },
                error: function (data) {
                    alert('برجاء المحاوله مره اخري .. ');
                }
            });
        }

        function closeResponse() {
            var data = $('#closeSession').serialize();

            $.ajax({
                url: '{{url("dashboard/session/point/pref/total")}}',
                method: 'post',
                data:data,
                success: function (data) {
                    if (data.status == 200) {
                        Swal.fire(
                            'احسنت',
                            'تم غلق الورديه',
                            'success'
                        );
                        location.reload();
                    }else{
                        $.each(data.data, function (key, value) {
                            $('.' + key + '-updated-error').html(value);
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