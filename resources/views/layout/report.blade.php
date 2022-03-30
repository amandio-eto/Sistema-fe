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
                <div class="right">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                </div>

                <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Naran Completo</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
