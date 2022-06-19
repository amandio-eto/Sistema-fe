@extends('master.master')
@section('title','Recyclebin')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Recent Purchases</h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Naran</th>
                                <th>Credito Id</th>
                                <th>Data Moris Cliente</th>
                                <th>Data Delete</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($delete as $del)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="#">{{ $del->naran }}</a></td>
                                <td>{{ $del->clientid }}</td>
                                <td>{{date('d-F-Y',strtotime($del->data_moris ))}}</td>
                                <td>{{ date('d-F-Y',strtotime($del->deleted_at)) }}</td>
                                <td>
                                    <a href="{{ url('/delete/restore/'.$del->id) }}" class="btn-xs btn-primary">Restore</a> |
                                    <a  class="btn-xs btn-danger" href="{{ url('/delete/forcedelete/'.$del->id) }}">Delete Permanete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                       {{ $delete->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
