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
                                HEAT EXCHANGER
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
                                <table id="the" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Equipment Code</th>
                                            <th>Inspection Date</th>
                                            <th>Exchanger Type</th>
                                            <th>Planned TA 1</th>
                                            <th>Planned TA 2</th>
                                            <th>Shell Diameter</th>
                                            <th>Tube Length</th>
                                            <th>Tube Type</th>
                                            <th>Tube Material</th>
                                            <th>Tube Quantity</th>
                                            <th>Tube Outside Diameter</th>
                                            <th>Tube Furnished Thickness</th>
                                            <th>Tube Pitch</th>
                                            <th>Tube Joint Design</th>
                                            <th>Tubesheet Material Specification</th>
                                            <th>Baffle Type</th>
                                            <th>Baffle Cut</th>
                                            <th>Baffle Spacing</th>
                                            <th>POF</th>
                                            <th>POF Category</th>
                                            <th>Production Losses Cost</th>
                                            <th>Bundle Replacement Cost</th>
                                            <th>Environmental Impact</th>
                                            <th>Maintenance Cost</th>
                                            <th>Bundle Failure Final Consequence </th>
                                            <th>COF</th>
                                            <th>COF Category</th>
                                            <th>Risk Level</th>
                                            <th>Risk Ranking</th>
                                            <th>Action Taken</th>
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
                $('#the').dataTable({
                    "ajax": "{{ url('/he/data') }}",
                    "columns": [
                        { "data": "equipment_code" },
                        { "data": "inspection_date"},
                        { "data": "exchanger_type" },
                        { "data": "planned_ta1"},
                        { "data": "planned_ta2" },
                        { "data": "shell_diameter"},
                        { "data": "tube_length" },
                        { "data": "tube_type"},
                        { "data": "tube_material" },
                        { "data": "tube_quantity"},
                        { "data": "tube_outside_diameter" },
                        { "data": "tube_furnished_thickness"},
                        { "data": "tube_pitch" },
                        { "data": "tube_joint_design"},
                        { "data": "tubesheet_material_spec" },
                        { "data": "baffle_type"},
                        { "data": "baffle_cut" },
                        { "data": "baffle_spacing"},
                        { "data": "pof" },
                        { "data": "pof_cat"},
                        { "data": "prod_losses_cost" },
                        { "data": "bundle_repl_cost"},
                        { "data": "env_impact" },
                        { "data": "maintenance_cost"},
                        { "data": "bundle_fail_final_cost" },
                        { "data": "cof"},
                        { "data": "cof_cat" },
                        { "data": "risk_level"},
                        { "data": "risk_ranking" },
                        { "data": "action_taken"},
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