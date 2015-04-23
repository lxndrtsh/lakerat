<!-- Main Slider -->
<header id="header" class="intro">
    <div id="hero-carousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <!-- Start slide -->
            <div class="item active">
                <div class="fill grill_item_one"></div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="slide-content animated fadeInDown">
                            {!! $content->where('alias','header-text')->first()->content !!}
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <!-- End slide -->

        </div><!-- /.carousel-inner -->

        <a href="#nav" class="btn page-scroll header-scroll">
            <i class="fa fa-angle-down animated"></i>
        </a>

    </div><!-- /#hero-carousel -->
</header><!-- /.intro -->
<!-- End Main Slider -->