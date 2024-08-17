@include('includes.header')
 <form action="comerce-LS" method="post">

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
                <h2 class="page-title">Location saisonnière locales comercial</h2>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS -->

    <div class="container">
        <div class="row">
                    @foreach ($comercs as $comerc)
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3><a href="#">{{ $comerc->titre }}</a></h3>
                            </div>
                            <figure>
                                <img src="{{ $comerc->validImage }}" alt="Post Image" class="img-responsive">
                                <span class="label rent">Location saisonnière</span>
                                <div class="overlay">
                                    <a href="javascript:void(0);" data-id="{{ $comerc->id }}" data-toggle="modal" class="btn btn-detail detailbtn" data-target="#detailsModal">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>{{ $comerc->emplacement }}</span>
                                    <span class="bed">{{ $comerc->bedrooms }}</span>
                                    <span class="bath">{{ $comerc->bathrooms }}</span>
                                </div>
                                <div class="right">
                                    <span class="area">{{ $comerc->surface }}</span>
                                    @if ($comerc->prix)
                                        <span class="price">{{ $comerc->prix }} TND</span>
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
                    {{ $comercs->links('pagination::default') }}
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
