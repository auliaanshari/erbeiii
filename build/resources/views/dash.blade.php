@extends('layouts.main')

@section('content')
<div class="container-fluid">
            <div class="block-header">
                <h2>
                    DASHBOARD
                    
                </h2>
            </div>
            
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>LINE CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						<div class="panel">
						<div id="pie" style="width:100%; height:188px;">
								
						</div>
					</div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BAR CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <!-- <h6 align="center">Data is missing</h6> -->
                        <img align="center"; style="height:188px" src="images/images (1).jpeg" >
                            <!-- <canvas id="bar_chart" height="150"></canvas> -->
                            
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div>

            <div class="row clearfix">
                <!-- Radar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>RADAR CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <h6 align="center">Data is missing</h6>
                            <canvas id="radar_chart" height="150"></canvas>
                           

                        </div>
                    </div>
                </div>
                <!-- #END# Radar Chart -->
                <!-- Pie Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PIE CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <!-- <h6 align="center">Data is missing</h6> -->
                        <img align="center"; style="height:188px" src="images/images.jpeg" >
                            <!-- <canvas id="pie_chart" height="150"></canvas> -->
                            
                        </div>
                    </div>
                </div>
                <!-- #END# Pie Chart -->
            </div>
        </div>
@endsection
<!-- @section('js')
<script src="//code.highcharts.com/highcharts-3d.js"></script>
	<script type="text/javascript">
	$('.grafik').highcharts({
	 chart: {
	  type: 'pie',
	  options3d: {
      enabled: true,
      alpha: 45,
      beta: 0
    },
	  marginTop: 80
	 },
	 credits: {
	  enabled: false
	 }, 
	 tooltip: {
	  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	 },
	 title: {
	  text: 'Quality Control Chart - Warehouse'
	 },
	 subtitle: {
	
	 },
	 xAxis: {
	  categories: ['Quality Control Chart'],
	  labels: {
	   style: {
	    fontSize: '10px',
	    fontFamily: 'Verdana, sans-serif'
	   }
	  }
	 },
	 legend: {
	  enabled: true
	 },
	 plotOptions: {
	   pie: {
	     allowPointSelect: true,
	     cursor: 'pointer',
	     depth:45,
	     dataLabels: {
	       enabled: true
	     },
	     showInLegend: true
	   }
	 },
	 series: [{
	   name: 'Warehouse',
	   colorByPoint: true,
	   data: {!! json_encode($hasil) !!}
	 }]
	});
	</script>
@endsection -->