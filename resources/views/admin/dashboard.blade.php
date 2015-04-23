@extends('admin.layout')

@section('main-section')
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body padding-horizontal">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Traffic</h3>
                            <p><small>This chart shows a general understanding of the traffic the website has seen in a <strong>7 Day Period</strong>. The dates are on the <strong>x-axis</strong> and the aggregate views are on the <strong>y-axis</strong>.</small></p>
                            </br/>
                            <div id="flot-main" style="height:290px"></div>
                        </div><!--/col-->
                    </div><!--/row-->
                </div>
            </div>
        </div><!--/col-->

        <div class="col-md-3">
            <div class="panel panel-default">

                <div class="panel-body padding-horizontal">
                    <h3>Browsers</h3>
                    <p><small>This graph shows a general understanding of the web browsers your visitors have used in a <strong>30 Day Period</strong>.</small></p>
                    </br/>
                    <div class="graph-container">
                        <div id="hero-donut" class="graph"></div>
                    </div>
                </div>
            </div>
        </div><!--/col-->

    </div><!--/row-->
@endsection