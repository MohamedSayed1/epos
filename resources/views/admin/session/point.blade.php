@extends('admin.layout.admin')

@section('content')


    <div class="col-md-12">
        <div class="row">
            <div class="col-md-9">
                <!-- Inner container -->
                <div class="d-flex align-items-start flex-column flex-md-row h-100">
                    <!-- Left content -->
                    <div class="card">
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
            </div>
            <div class="col-md-3">
                <!-- Right sidebar component -->
                <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

                    <!-- Sidebar content -->
                    <div class="sidebar-content">

                        <!-- Categories -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 font-size-base text-muted"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="card-body border-0 p-0">
                                <ul class="nav nav-sidebar mb-2">
                                    <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                                        <a href="#" class="nav-link legitRipple">Street wear</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Hoodies</a></li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Jackets</a></li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link active legitRipple">Pants</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Shirts</a>
                                            </li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Sweaters</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Tank
                                                    tops</a></li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Underwear</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link legitRipple">Snow wear</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Fleece
                                                    jackets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Gloves</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Ski
                                                    jackets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Ski
                                                    pants</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Snowboard
                                                    jackets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Snowboard
                                                    pants</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Technical
                                                    underwear</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link legitRipple">Shoes</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Laces</a>
                                            </li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Sandals</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Skate
                                                    shoes</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Slip
                                                    ons</a></li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Sneakers</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Winter
                                                    shoes</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link legitRipple">Accessories</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Beanies</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Belts</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Caps</a>
                                            </li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Sunglasses</a></li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Headphones</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link legitRipple">Video
                                                    cameras</a></li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Wallets</a></li>
                                            <li class="nav-item"><a href="#"
                                                                    class="nav-link legitRipple">Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /categories -->


                        <!-- Filters -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Filter products</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                            </div>
                        </div>
                        <!-- /filters -->

                    </div>
                    <!-- /sidebar content -->

                </div>
                <!-- /right sidebar component -->

            </div>
        </div>
    </div>

    <!-- /inner container -->

@endsection

@section('script')
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
    </script>


@endsection