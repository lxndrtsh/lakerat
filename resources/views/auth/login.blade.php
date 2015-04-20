@extends('auth.auth')
@section('content')
    <div id="content" class="col-sm-12 full">
        <div class="row">
            <div class="login-box">

                <div class="header">
                    Lake Rat Bar &amp; Grill Admin
                </div>
                <div class="text-with-hr">
                    <span>use your username</span>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form-horizontal login" role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset class="col-sm-12">
                        <div class="form-group">
                            <div class="controls row">
                                <div class="input-group col-sm-12">
                                    <input type="text" class="form-control" id="username"  name="email" value="{{ old('email') }}" placeholder="E-mail Address"/>
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="controls row">
                                <div class="input-group col-sm-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <button type="submit" class="btn btn-lg btn-primary col-xs-12">Login</button>

                        </div>

                    </fieldset>

                </form>
                <div class="clearfix"></div>

            </div>
        </div><!--/row-->

    </div>
@endsection