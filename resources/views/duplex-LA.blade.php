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
                    <a href="{{ route('home') }}">Accueil</a>
                </div>
                <h2 class="page-title">Location annuelle Duplex</h2>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS -->

    <div class="container">
        <div class="row">
                    @foreach ($dups as $dup)
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3><a href="#">{{ $dup->titre }}</a></h3>
                            </div>
                            <figure>
                                <img src="{{ $dup->validImage }}" alt="Post Image" class="img-responsive">
                                <span class="label hot">Location annuelle</span>
                                <div class="overlay">
                                    <a href="javascript:void(0);" data-id="{{ $dup->id }}" data-toggle="modal" class="btn btn-detail detailbtn" data-target="#detailsModal">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>{{ $dup->emplacement }}</span>
                                    <span class="bed">{{ $dup->bedrooms }}</span>
                                    <span class="bath">{{ $dup->bathrooms }}</span>
                                </div>
                                <div class="right">
                                    <span class="area">{{ $dup->surface }}</span>
                                    @if ($dup->prix)
                                        <span class="price">{{ $dup->prix }} TND</span>
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
                    {{ $dups->links('pagination::default') }}
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
