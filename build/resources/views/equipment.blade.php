@extends('layouts.main')

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA MASTER</h2>
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
                                EQUIPMENT
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
                                <table id="tequipment" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Equipment Code</th>
                                            <th>Equipment Name</th>
                                            <th style="display:none"></th>
                                            <th>Action</th>
                                            <th style="display:none"></th>
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
                $('#tequipment').dataTable({
                    "ajax": "{{ url('/equipment/data') }}",
                    "columns": [
                        { "data": "equipment_code" },
                        { "data": "equipment_name"},
                        {
                            data: 'equipment_code',
                            sClass: 'text-center',
                            render: function(data) {
                                // <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                                return'<button class="btn btn-primary btn-lg waves-effect btn-block">Detail<i class="anticon anticon-printer"></i> </button>';
                            }
                        },
                        {
                            data: 'equipment_code',
                            sClass: 'text-center',
                            render: function(data) {
                                // <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                                return'<button class="btn btn-success btn-lg waves-effect btn-block">Edit<i class="anticon anticon-printer"></i> </button>';
                            }
                        },
                        {
                            data: 'equipment_code',
                            sClass: 'text-center',
                            render: function(data) {
                                // <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                                return'<button class="btn btn-danger btn-lg waves-effect btn-block">Hapus<i class="anticon anticon-printer"></i> </button>';
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