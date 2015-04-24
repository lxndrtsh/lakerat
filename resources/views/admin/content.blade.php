@extends('admin.layout')

@section('main-section')
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body padding-horizontal">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Edit Content For {{ $content->alias }}</h3>

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

                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ Session::pull('message') }}
                                </div>
                            @endif
                            <form method="post" action="/admin/content">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ $content->id }}" />
                                    <textarea id="content" class="form-control" rows="25" name="content">{{ $content->content }}</textarea>
                                    <div class="editor-area">
                                        <div id="editor">{{ $content->content }}</div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <div class="clearfix"><br /><br /></div>
                        </div><!--/col-->
                    </div><!--/row-->
                </div>
            </div>
        </div><!--/col-->

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body padding-horizontal">
                    <h3>Hints:</h3>
                    <p>
                        Search for the text you are looking to change, if you don't know HTML.<br /><br />
                        <code>&lt;strong&gt;<strong>BOLD</strong>&lt;/strong&gt;</code><br />
                        <code>&lt;em&gt;<em>ITALIC</em>&lt;/em&gt;</code><br />
                        <code>&lt;u&gt;<u>underline</u>&lt;/u&gt;</code><br />
                        <br />
                        <code>&lt;br /&gt; New Line</code>
                    </p>
                </div>
            </div>
        </div><!--/col-->

    </div><!--/row-->
@endsection

@section('custom-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.1.9/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $('#content').hide();
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode("ace/mode/html");
        editor.on("change", function(e) {
            var val = editor.getSession().getValue();
            $('#content').val(val);
            console.log($('#content').val());
        });
    </script>
@endsection