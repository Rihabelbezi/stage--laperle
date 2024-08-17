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
                <h2 class="page-title">Villas à vende</h2>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS -->

    <div class="container">
        <div class="row">
                    @foreach ($ters as $ter)
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3><a href="#">{{ $ter->titre }}</a></h3>
                            </div>
                            <figure>
                                <img src="{{ $ter->validImage }}" alt="Post Image" class="img-responsive">
                                <span class="label sale">Vente</span>
                                <div class="overlay">
                                    <a href="javascript:void(0);" data-id="{{ $ter->id }}" data-toggle="modal" class="btn btn-detail detailbtn" data-target="#detailsModal">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>{{ $ter->emplacement }}</span>
                                    <span class="bed">{{ $ter->bedrooms }}</span>
                                    <span class="bath">{{ $ter->bathrooms }}</span>
                                </div>
                                <div class="right">
                                    <span class="area">{{ $ter->surface }}</span>
                                    @if ($ter->prix)
                                        <span class="price">{{ $ter->prix }} TND</span>
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
                    {{ $ters->links('pagination::default') }}
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
