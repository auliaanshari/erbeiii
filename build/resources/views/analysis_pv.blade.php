@extends('layouts.main')

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>ANALYSIS</h2>
            </div>

            <!-- Widgets -->
            <!-- <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TASKS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TICKETS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Widgets -->

            <!-- Data -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PRESSURE VESSEL
                            </h2>
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
                            <div class="table-responsive">
                                <table id="tpv" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Equipment Code</th>
                                            <th>Inspection Date</th>
                                            <th>Thinning</th>
                                            <th>External Damage</th>
                                            <th>Brittle Fracture</th>
                                            <th>Stress Corrosion Cracking</th>
                                            <th>HTHA</th>
                                            <th>Mechanical Fatigue</th>
                                            <th>Total DF</th>
                                            <th>Management System Factor</th>
                                            <th>Generic Failure Frequency Total</th>
                                            <th>POF</th>
                                            <th>POF Category</th>
                                            <th>Flammable Component Damage</th>
                                            <th>Flammable Personal Injury</th>
                                            <th>Toxic Component Damage</th>
                                            <th>Toxic Personal Injury</th>
                                            <th>Non Component Damage</th>
                                            <th>Non Personal Injury</th>
                                            <th>Final Area Based COF</th>
                                            <th>Area Based COF Category</th>
                                            <th>Final Financial Based COF</th>
                                            <th>Financial Based COF Category</th>
                                            <th>Area Risk Category</th>
                                            <th>Area Risk Ranking</th>
                                            <th>Financial Risk Category</th>
                                            <th>Financial Risk Ranking</th>
                                            <th>Every Turn Around</th>
                                            <th>2 Turn Around</th>
                                            <th>3 Turn Around</th>
                                            <th>4 Turn Around</th>
                                            <th>Suggested Action</th>
                                            <th>Optimal Bundle Replacement Frequency</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Data -->
        </div>
        </div>
@endsection

@section('js')

<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf8" src="plugins/DataTables/datatables.js"></script>

<script type="text/javascript">
            function loadData() {
                $('#tpv').dataTable({
                    "ajax": "{{ url('/pv/data') }}",
                    "columns": [
                        { "data": "equipment_code" },
                        { "data": "inspection_date"},
                        { "data": "thinning" },
                        { "data": "ext_damage"},
                        { "data": "brittle_fracture" },
                        { "data": "stress_corr_crack"},
                        { "data": "htha" },
                        { "data": "mechanical_fatigue"},
                        { "data": "total_df" },
                        { "data": "msf"},
                        { "data": "gff_total" },
                        { "data": "pof"},
                        { "data": "pof_cat" },
                        { "data": "flammable_cd"},
                        { "data": "flammable_pi" },
                        { "data": "toxic_cd"},
                        { "data": "toxic_pi" },
                        { "data": "non_cd"},
                        { "data": "non_pi" },
                        { "data": "final_area_cof"},
                        { "data": "area_cof_cat" },
                        { "data": "final_financial_cof"},
                        { "data": "financial_cof_cat" },
                        { "data": "area_risk_cat"},
                        { "data": "area_risk_ranking" },
                        { "data": "financial_risk_cat"},
                        { "data": "financial_risk_ranking" },
                        { "data": "eta"},
                        { "data": "2ta" },
                        { "data": "3ta"},
                        { "data": "4ta" },
                        { "data": "suggested_action"},
                        { "data": "obrf"},
                        {
                            data: 'equipment_code',
                            sClass: 'text-center',
                            render: function(data) {
                                return'<a href="#" data-id="'+data+'" id="print" class="text-danger" title="print"><i class="anticon anticon-printer"></i> </a>';
                            }
                        }
                    ],

                    scrollX: true,
                    scrollY: '350px',
                    scrollCollapse: true,
                });
            } loadData();
            </script>
@endsection