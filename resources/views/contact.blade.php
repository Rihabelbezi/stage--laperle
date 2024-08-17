@include('includes.header')
 <form action="contact" method="post">

        <!-- TOP -->
   @include('includes.headertwo')
        <!-- HEADER -->

        <div class="page-wrap">

            <!-- BREADCRUMBS-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Contact Us</span>
                        </div>
                        <h2 class="page-title">Contact Us</h2>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMBS -->

            <!-- MAP&FORM -->
            <div class="full-width map-wrap">
                <div id="map-canvas" style="width: 100%; height: 625px;"></div>
                <div class="contact-form-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-8 col-sm-offset-6">
                                <div class="contact-form">
                                    <h3>Feedback</h3>
                                    <form action="#">
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="eMail">
                                        <input type="text" placeholder="Phone">
                                        <input type="text" placeholder="Subject">
                                        <textarea placeholder="Message"></textarea>
                                        <input type="submit" class="btn btn-danger" value="Send Message">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- MAP&FORM -->

            <!-- ADDRESS -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-map-marker"></i>
                        <span>Avenue des états unis 8050, Hammamet, Tunisie</span>
                    </div>
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-phone"></i>
                        <span>+216 72 282 120</span>
                        <span>+216 54 590 027</span>
                        <span>+216 23 402 852</span>
                    </div>
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-envelope"></i>
                        <span>contact@laperle-immobiliere.com</span>
                    </div>
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-skype"></i>
                        <span>laperle-immobiliere</span>
                    </div>
                </div>
            </div>
            <!-- ADDRESS -->

        </div>

        <!-- CALL2ACTION -->
        @include('includes.footertwo')
        <!-- FOOTER -->
@include('includes.footer')
