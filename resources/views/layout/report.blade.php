@extends('master.master')
@section('title', 'Report')
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Report </h3>
                    <div class="left">
                        <a href="" class="btn btn-success">Export Exel</a>
                        <a href="" class="btn btn-danger">Export PDF</a>

                    </div>

                </div>


                <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr style="text-transform: uppercase">
                                <th>Nu</th>
                                <th>Naran Completo</th>
                                <th>Id Cliente</th>
                                <th>Data Moris</th>
                                <th>Total Credito</th>
                                <th>Total Setoran</th>
                                <th>Total Dividas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($credito as $data)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->naran }}</td>
                                <td>{{ $data->clientid }}</td>
                                <td>{{ date('d-F-Y',strtotime($data->data_moris))}}</td>
                                <td>{{osan( $data->total_credito) }}</td>
                                <td>{{ osan($data->osancredito()) }}</td>
                                <td>{{ osan($data->osancredito()) }}</td>
                            </tr>
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
