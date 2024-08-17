@include('includes.header')

<form action="{{ route('search') }}" method="post">

    @include('includes.headertwo')
    <!-- HEADER -->

    <div class="page-wrap properties-page">

        <!-- BREADCRUMBS-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span class="sep">/</span>
                        <span class="current">Liste de votre Recherche</span>
                    </div>
                    <h2 class="page-title">Recherche Resultat</h2>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS -->

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row properties-list">
                        @forelse ($posts as $post)
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="item-header clearfix">
                                        <h3><a href="#">{{$post['titre']}}</a></h3>
                        </div>
                        <figure>
                            <img src="{{ $post->validImage }}" alt="Post Image" class="img-responsive">
                            @if ($post['id_type']==1)
                             <span class="label sale">Vente</span>
                            @elseif ($post['id_type']==2)
                             <span class="label hot">Location annuelle</span>
                            @elseif ($post['id_type']==3)
                             <span class="label rent">Location saisonnière</span>
                            @endif
                            <div class="overlay">
                                <a href="javascript:void(0);" data-id="{{ $post['id'] }} " data-toggle="modal" class="btn btn-detail detailbtn"  data-target="#detailsModal">Detail</a>
                            </div>
                        </figure>
                        <div class="item-detail">
                            <div class="left">

                                <span class="place"><i class="fa fa-map-marker"></i>{{$post['emplacement']}}</span>
                                <span class="bed">{{$post['bedrooms']}}</span>
                                <span class="bath">{{$post['bathrooms']}}</span>
                                <!--<span class="garage">0</span>
                                <span class="gym">0</span> -->
                            </div>
                            <div class="right">
                                <span class="area">{{$post['surface']}}</span>
                                @if (($post['prix'])>0)
                                  <span class="price">{{$post['prix']}}TND</span>
                                @elseif (is_null($post['prix']))
                                 <span class="price">{{$post['prix']}}</span>
                                @endif

                            </div>
                        </div>
                                </div>
                            </div>
                        @empty
                            <p>No properties found.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGINATION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination">
                        {{ $posts->links('pagination::default') }}
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION -->

    </div>

    <!-- CALL2ACTION -->
@include('includes.footertwo')

 @include('modal')

@include('includes.footer')
