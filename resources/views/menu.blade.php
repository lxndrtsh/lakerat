@extends('app')

@section('main-content')
    @include('sections.navigation')
    <!-- Unique Chain Section -->
    <section id="unique">
        <div class="container wow fadeInUp">
            <div class="row">
                {!! $content->where('alias','full-menu')->first()->content !!}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Unique Chain Section -->
@endsection