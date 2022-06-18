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
                                <th>Total Credito</th>
                                <th>Date &amp; Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><a href="#">763650</a></td>
                                <td>Michael</td>
                                <td>$34</td>
                                <td>Oct 18, 2016</td>
                                <td>
                                    <a href=""><i class="bi bi-bootstrap-reboot text-primary"></i></a> |
                                    <a  href=""><i class="bi bi-x-octagon-fill text-danger"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
