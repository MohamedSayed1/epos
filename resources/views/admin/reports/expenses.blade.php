@extends('admin.layout.admin')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i>
                    <span class="font-weight-semibold">حركه المصورفات</span></h4>
            </div>
        </div>
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ url('/dashboard') }}" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i> الرئيسيه</a>
                    <span class="breadcrumb-item active">تقرير المصاريف</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table id="xtreme-table55" class="tasks-list table expensessetupPage">
                            <thead>
                            <tr>
                                <th>نوع الصرف</th>
                                <th>التفاصيل</th>
                                <th>السعر</th>
                                <th>التاريخ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($expenses))
                                @foreach($expenses as $exp)
                                    <tr>

                                        <td>{{ $exp->getSlit->name }}</td>
                                        <td>{{ $exp->desc }}</td>
                                        <td>{{ $exp->prices }}</td>
                                        <td>
                                            {{ $exp->created_at }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>الاجمالي</th>
                                <th></th>
                                <th>{{$total}}</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection