@extends('admin.layout.admin')

@section('content')


    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i> الرئيسيه</a>
                    <a href="{{ url('/dashboard/purchases') }}" class="breadcrumb-item">
                        الفواتير</a>
                    <span class="breadcrumb-item active">اضافه فاتوره</span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">

    </div>

@endsection