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
                                PRESSURE RELIEF DEVICE
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
                                <table id="tprd" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Equipment Code</th>
                                            <th>Inspection Date</th>
                                            <th>POF</th>
                                            <th>Component Damage</th>
                                            <th>Surrounding Equipment Damage</th>
                                            <th>Unit Production lost</th>
                                            <th>Environmental Cleanup Cost</th>
                                            <th>Personel Injury</th>
                                            <th>Total Financial Cost</th>
                                            <th>POF / POL</th>
                                            <th>Mild / Moderate</th>
                                            <th>Stuck to Open</th>
                                            <th>COF / COL</th>
                                            <th>Generic Failure Frequency</th>
                                            <th>POF Overpressure Demand</th>
                                            <th>POF Overpressure Demand Category</th>
                                            <th>COF Overpressure Demand</th>
                                            <th>COF Overpressure Demand Category</th>
                                            <th>Fail To Open Risk Ranking</th>
                                            <th>Probability Of Leaking</th>
                                            <th>Probability Of Leaking Category</th>
                                            <th>Consequence Of Leaking</th>
                                            <th>Consequence Of Leaking Category</th>
                                            <th>Leaking Final Risk Ranking</th>
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
                $('#tprd').dataTable({
                    "ajax": "{{ url('/prd/data') }}",
                    "columns": [
                        { "data": "equipment_code" },
                        { "data": "inspection_date"},
                        { "data": "pof" },
                        { "data": "component_damage"},
                        { "data": "surr_equip_damage" },
                        { "data": "unit_prod_lost"},
                        { "data": "env_cleanup_cost" },
                        { "data": "personel_injury"},
                        { "data": "cof" },
                        { "data": "pof_pol"},
                        { "data": "mild_moderate" },
                        { "data": "stuck_to_open"},
                        { "data": "cof_col" },
                        { "data": "gff"},
                        { "data": "pof_od" },
                        { "data": "pof_od_cat"},
                        { "data": "cof_od" },
                        { "data": "cof_od_cat"},
                        { "data": "fail_to_open_risk_ranking" },
                        { "data": "pol" },
                        { "data": "pol_cat"},
                        { "data": "col" },
                        { "data": "col_cat"},
                        { "data": "leaking_final_risk_ranking" },
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