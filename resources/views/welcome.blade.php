@extends('app')
@section('main-content')

    @include('sections.header')
    @include('sections.navigation')

    <!-- Unique Chain Section -->
    <section id="unique">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{--<span class="section-icon">s</span>--}}
                    <h2 class="section-heading">Lake Rat is a unique, fun and wild lakeside bar with good food and good times.</h2>
                    <h3 class="section-subheading">After spending time on the lake, come grab a drink and have a bite.</h3>
                    <div class="image col-lg-6 col-lg-offset-2 col-lg-no-padding">
                        <img src="assets/images/bar.jpg" />
                    </div>
                    <div class="clearfix"></div>
                    <a href="#menus" class="page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Unique Chain Section -->

    <!-- Menus Section -->
    <section id="menus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading wow fadeInDown">Get your drink on.</h2>
                    <h3 class="section-subheading wow fadeInDown">Choose a menu</h3>
                    <ul class="wow fadeInUp">
                        <li><a href="#menuModal1" data-toggle="modal">Domestic Beers</a></li>
                        <li><a href="#menuModal2" data-toggle="modal">Imported Beers</a></li>
                        <li><a href="#menuModal3" data-toggle="modal">Cocktails</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <a href="#events" class="page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Menus Section -->

    <!-- Events Section -->
    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center event-area">
                    <h2 class="section-heading wow fadeInDown">It's party time.</h2>
                    <h3 class="section-subheading wow fadeInDown">Check out what happens over here at Lake Rat Bar &amp; Grill</h3>
                    <ul class="wow fadeInUp">
                        <li><a href="#menuModal4" data-toggle="modal">Past Events</a></li>
                        <li><a href="#menuModal5" data-toggle="modal">Events this Month</a></li>
                        <li><a href="#menuModal6" data-toggle="modal">Future Events</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <a href="#footer" class="page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Events Section -->

    @include('modals.drinks.domestic')
    @include('modals.drinks.imported')
    @include('modals.drinks.cocktails')

    @include('modals.diningclub')

    @include('modals.events.past')
    @include('modals.events.current')
    @include('modals.events.future')

@endsection