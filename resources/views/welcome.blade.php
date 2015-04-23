@extends('app')
@section('main-content')

    @include('sections.header')
    @include('sections.navigation')

    <!-- Unique Chain Section -->
    <section id="unique">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {!! $content->where('alias','the-grill-text')->first()->content !!}
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
                    {!! $content->where('alias','drinks-text')->first()->content !!}
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
                    {!! $content->where('alias','events-text')->first()->content !!}
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