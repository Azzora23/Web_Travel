@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadcrumbs', 'Dashboard')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .traffic-chart {
            min-height: 335px;
        }
    </style>
@endsection

@section('content')
    <!-- Widgets -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <a href="{{ route('articles.index', ['status' => 'publish']) }}">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="fa fa-file-o"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $data['publish'] }}</span></div>
                                    <div class="stat-heading">Article Published</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-12">
            <a href="{{ route('articles.index', ['status' => 'draft']) }}">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="fa fa-clipboard"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $data['draft'] }}</span></div>
                                    <div class="stat-heading">Articles in Draft</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">298</span></div>
                                <div class="stat-heading">Visitors</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->

    <!-- Traffic -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Traffic</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div id="traffic-chart" class="traffic-chart"></div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div>
        </div><!-- /# column -->
    </div>
    <!-- /Traffic -->
@endsection

@section('script')
    <!-- Chartist Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            "use strict";
            
            // Traffic Chart using Chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    series: [
                        [0, 18000, 33000, 25000, 22000, 30000]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function(data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
        });
    </script>
@endsection
