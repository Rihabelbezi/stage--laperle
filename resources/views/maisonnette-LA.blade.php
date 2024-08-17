@include('includes.header')
 <form action="villas-vente" method="post">

        <!-- TOP -->
   @include('includes.headertwo')
   <div class="page-wrap properties-page">

    <!-- BREADCRUMBS-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <a href="{{ route('home') }}">Home</a>
                </div>
                <h2 class="page-title">Location annuelle Maisonnette</h2>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS -->

    <div class="container">
        <div class="row">
                    @foreach ($mais as $mai)
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3><a href="#">{{ $mai->titre }}</a></h3>
                            </div>
                            <figure>
                                <img src="{{ $mai->validImage }}" alt="Post Image" class="img-responsive">
                                <span class="label hot">Location annuelle</span>
                                <div class="overlay">
                                    <a href="javascript:void(0);" data-id="{{ $mai->id }}" data-toggle="modal" class="btn btn-detail detailbtn" data-target="#detailsModal">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>{{ $mai->emplacement }}</span>
                                    <span class="bed">{{ $mai->bedrooms }}</span>
                                    <span class="bath">{{ $mai->bathrooms }}</span>
                                </div>
                                <div class="right">
                                    <span class="area">{{ $mai->surface }}</span>
                                    @if ($mai->prix)
                                        <span class="price">{{ $mai->prix }} TND</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

    </div>


    <!-- PAGINATION -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pagination">
                    {{ $mais->links('pagination::default') }}
                </div>
            </div>
        </div>
    </div>
    <!-- PAGINATION -->

    <!-- BLOG POSTS -->

    <!-- FOOTER -->
    @include('includes.footertwo')
    <!-- FOOTER -->
@include('modal')

@include('includes.footer')
