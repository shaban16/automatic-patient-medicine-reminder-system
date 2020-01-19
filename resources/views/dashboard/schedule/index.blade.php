@extends('layouts.main')

@section('title')
APMRS | Medicine Schedule
@endsection

@section('custom_css')
 <!-- DataTables -->
        <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="{{asset('assets/plugins/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('heading')
Medicine Schedule
@endsection


@section('content')

<a class="btn btn-primary m-b-20" href="{{ route('schedule.create') }}"> Add Schedule</a>

<div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                                                   

                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Patient Name</th>
                            <th>Phone Number</th>
                            <th>Medicine</th>
                            <th>Restricted Food</th>
                            <th>Medicine Time</th>
                        </tr>
                        </thead>

                        <tbody>

                           {{--  @foreach($patients as $patient)
                              <tr>
                                 <td>{{$loop->index + 1}}</td>
                                 <td>{{$patient->name}}</td>
                                 <td>{{$patient->phone}}</td>
                                 <td>{{$patient->type}}</td>
                                 <td>
                                    <a class="btn btn-primary " href="{{ route('patient_detail.edit',$patient->id) }}">Edit</a> 
                                    <a class="btn btn-danger m-l-10" href="#"
                                       onclick="event.preventDefault();
                                                      document.getElementById('delete-form').submit();">Delete
                                     </a> 
                                    <form id="delete-form" action="{{route('patient_detail.destroy',$patient->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                              </tr>
                            @endforeach --}}
                        
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                        <!-- end row -->

@endsection

@section('custom_js')

 <!-- Required datatable js -->
        <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>

        <!-- Key Tables -->
        <script src="{{asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Selection table -->
        <script src="{{asset('assets/plugins/datatables/dataTables.select.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });

        </script>

@endsection