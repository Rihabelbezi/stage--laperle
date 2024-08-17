@include('includes.header')
 <form action="villas-LS" method="post">

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
                <h2 class="page-title">Location saisonnaire Villa</h2>
            </div>
        </div>
    </div>
   <div class="container">
    <div class="row">
                @foreach ($villas as $villa)
                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">{{ $villa->titre }}</a></h3>
                        </div>
                        <figure>
                            <img src="{{ $villa->validImage }}" alt="Post Image" class="img-responsive">
                            <span class="label rent">Location saisonnaire</span>
                            <div class="overlay">
                                <a href="javascript:void(0);" data-id="{{ $villa->id }}" data-toggle="modal" class="btn btn-detail detailbtn" data-target="#detailsModal">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">
                                <span class="place"><i class="fa fa-map-marker"></i>{{ $villa->emplacement }}</span>
                                <span class="bed">{{ $villa->bedrooms }}</span>
                                <span class="bath">{{ $villa->bathrooms }}</span>
                            </div>
                            <div class="right">
                                <span class="area">{{ $villa->surface }}</span>
                                @if ($villa->prix)
                                    <span class="price">{{ $villa->prix }} TND</span>
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
                {{ $villas->links('pagination::default') }}
            </div>
        </div>
    </div>
</div>
@include('includes.footertwo')

        @include('modal')
        @include('includes.footer')
