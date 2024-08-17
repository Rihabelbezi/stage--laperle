@include('includes.header')
 <form action="dcharms-LS" method="post">

        <!-- TOP -->
   @include('includes.headertwo')
        <!-- HEADER -->
        <div class="page-wrap properties-page">

            <!-- BREADCRUMBS-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a>
                        </div>
                        <h2 class="page-title">Location saisonnière Demeures de charmes</h2>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMBS -->

            <div class="container">
                <div class="row">
                            @foreach ($demeures as $demeure)
                            <div class="col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="item-header clearfix">
                                        <h3><a href="#">{{ $demeure->titre }}</a></h3>
                                    </div>
                                    <figure>
                                        <img src="{{ $demeure->validImage }}" alt="Post Image" class="img-responsive">
                                        <span class="label rent">Location saisonnière</span>
                                        <div class="overlay">
                                            <a href="javascript:void(0);" data-id="{{ $demeure->id }}" data-toggle="modal" class="btn btn-detail detailbtn" data-target="#detailsModal">Detail</a>
                                        </div>
                                    </figure>
                                    <div class="item-detail">
                                        <div class="left">
                                            <span class="place"><i class="fa fa-map-marker"></i>{{ $demeure->emplacement }}</span>
                                            <span class="bed">{{ $demeure->bedrooms }}</span>
                                            <span class="bath">{{ $demeure->bathrooms }}</span>
                                        </div>
                                        <div class="right">
                                            <span class="area">{{ $demeure->surface }}</span>
                                            @if ($demeure->prix)
                                                <span class="price">{{ $demeure->prix }} TND</span>
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
                            {{ $demeures->links('pagination::default') }}
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
        <!-- FOOTER -->
        @include('includes.footer')
