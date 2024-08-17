@include('includes.header')
 <form action="appartement-LA" method="post">

        <!-- TOP -->
   @include('includes.headertwo')
   <div class="page-wrap properties-page">

    <!-- BREADCRUMBS-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <a href="{{ route('home') }}">Accueil</a>
                </div>
                <h2 class="page-title">Location annuelle Appartements</h2>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS -->

    <div class="container">
        <div class="row">
                    @foreach ($apps as $app)
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3><a href="#">{{ $app->titre }}</a></h3>
                            </div>
                            <figure>
                                <img src="{{ $app->validImage }}" alt="Post Image" class="img-responsive">
                                <span class="label hot">Location annuelle</span>
                                <div class="overlay">
                                    <a href="javascript:void(0);" data-id="{{ $app->id }}" data-toggle="modal" class="btn btn-detail detailbtn" data-target="#detailsModal">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>{{ $app->emplacement }}</span>
                                    <span class="bed">{{ $app->bedrooms }}</span>
                                    <span class="bath">{{ $app->bathrooms }}</span>
                                </div>
                                <div class="right">
                                    <span class="area">{{ $app->surface }}</span>
                                    @if ($app->prix)
                                        <span class="price">{{ $app->prix }} TND</span>
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
                    {{ $apps->links('pagination::default') }}
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
