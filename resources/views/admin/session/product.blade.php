<div class="overflow-auto order-2 order-md-1">

    <!-- Grid -->

    <div class="row">
        @foreach($products as $product)
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img-actions">
                            @if(!empty($product->photo) && file_exists(public_path().'/upload/'.$product->photo))
                                <a href="" data-popup="lightbox">
                                    <img src="{{url('upload/'.$product->photo)}}" class="card-img" width="160" height="160" alt="">
                                    <span class="card-img-actions-overlay card-img">
                                <i class="icon-plus3 icon-2x"></i>
							</span>
                                </a>
                            @else
                                <a href="" data-popup="lightbox">
                                    <img src="{{asset("/template/back/assets/global_assets/images/no-image.png")}}" class="card-img" width="96" alt="">
                                    <span class="card-img-actions-overlay card-img">
                                <i class="icon-plus3 icon-2x"></i>
							</span>
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="card-body bg-light text-center">
                        <div class="mb-2">
                            <h6 class="font-weight-semibold mb-0">
                                {{$product->name}}
                            </h6>
                        </div>

                        <button type="button" class="btn bg-teal-400 legitRipple"><i class="icon-cart-add mr-2"></i> Add
                            to cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- /grid -->


    <!-- Pagination -->
    <div class="d-flex justify-content-center pt-3 mb-3">
        <ul class="pagination shadow-1">
            <li class="page-item">{!! $products->links() !!}</li>

        </ul>
    </div>
    <!-- /pagination -->

</div>