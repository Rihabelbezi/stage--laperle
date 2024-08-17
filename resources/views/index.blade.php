@include('includes.header')
<form action="{{ route('search') }}" method="GET">

        <!-- TOP -->
   @include('includes.headertwo')
        <!-- HEADER -->

        <!-- SLIDER -->
        <div class="flexslider" id="slider">
            <ul class="slides">
                <li>
                    <img src="{{ asset('assets/images/villasidialimakkibenzart.jpg') }}" class="img-responsive" alt="Slider Image"  />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail">
                                    <div class="white">
                                        <h2>VILLA<br>AVEC PISCINE</h2>
                                        <span class="slide-location">Sidi Ali Makki, Benzart</span>
                                        <div class="bar"></div>
                                        <span class="slide-price">1 100 000 TND</span>
                                    </div>
                                    <div class="red">
                                        <span class="bath">3 Salle de bains</span>
                                        <span class="bed">5 Chambres à coucher</span>
                                        <span class="pool">1 Piscine</span>
                                    </div>
                                </div>
                            </div><div class="overlay">
                                <a href="javascript:void(0);" data-id="3000 " data-toggle="modal" class="btn btn-detail detailbtn"  data-target="#detailsModal">Detail</a>
                    </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/villablanchammemt.jpg" class="img-responsive" alt="Slider Image" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail">
                                    <div class="white">
                                        <h2>Villa Blanc<br>haut standing</h2>
                                        <span class="slide-location">Besbasia, Hammamet</span>
                                        <div class="bar"></div>
                                        <span class="slide-price">1 200 000 TND</span>
                                    </div>
                                    <div class="red">
                                        <span class="bath">4 Salle de bains</span>
                                        <span class="bed">5 Chambres à coucher</span>
                                        <span class="pool">1 Piscine</span>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay">
                                        <a href="javascript:void(0);" data-id="3000 " data-toggle="modal" class="btn btn-detail detailbtn"  data-target="#detailsModal">Detail</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- SLIDER -->

        <!-- FILTER -->
        <div class="container">
            <div class="filter">
                <select class="location" name="categorie">
                    <option value="">Categorie</option>
                    <option value="1">Villa</option>
                    <option value="2">Maisonnette</option>
                    <option value="3">Appartement</option>
                    <option value="4">Résidence</option>
                    <option value="5">Duplex</option>
                    <option value="6">Terrain</option>
                    <option value="7">commerce</option>
                    <option value="8">Demeures de charmes</option>
                </select>

                <select class="cata" name="type">
                    <option value="">Vente/Location</option>
                    <option value="1">Vente</option>
                    <option value="3">Location saisonnière</option>
                    <option value="2">Location annuelle</option>
                </select>

                <select class="type" name="chambres">
                    <option value="">Chambres</option>
                    @for ($i = 1; $i <= 9; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <select class="type" name="pieces">
                    <option value="">Pièces</option>
                    @for ($i = 1; $i <= 9; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>

                <div class="range">
                    <p>
                      <label for="price">Price</label>
                      <span>TND<input type="text" id="price" name="price"></span>
                    </p>
                    <div id="price-range"></div>
                </div>

                    <!-- Other form fields -->

                    <div class="search-btn-wrapper">
                        <button type="submit" class="btn search-btn">
                            <i class="fa fa-search"></i> Recherche
                        </button>
                    </div>


            </div>
        </div>

        <!-- FILTER -->

        <!-- ITEMS GRID -->
        <div class="container">
            <div class="row">
            @foreach ($posts as $post)

                <div class="col-md-4 col-sm-6">
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
            @endforeach
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination">
                            {{ $posts->links('pagination::default') }}
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
        <!-- ITEMS GRID -->

        <!-- FACTS -->
        <div class="facts_wrap animated">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="clearfix row">
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="{{asset('assets/images/fact1.png')}}" alt=""></figure>
                                    <small>Apartments</small>
                                    <span data-fact="416">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="{{asset('assets/images/fact2.png')}}" alt=""></figure>
                                    <small>Villas</small>
                                    <span data-fact="486">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="images/fact3.png" alt=""></figure>
                                    <small>Terrain</small>
                                    <span data-fact="413">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="{{asset('assets/images/fact4.png')}}" alt=""></figure>
                                    <small>Commercial</small>
                                    <span data-fact="29">000</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- FACTS -->



        <!-- CALL2ACTION -->
@include('includes.footertwo')
@include('modal')
@include('includes.footer');
