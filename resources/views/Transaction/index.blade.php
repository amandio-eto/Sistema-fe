@extends('master.master')
@section('header')

<style>
    .thead{
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#e1ffff+0,e1ffff+7,e1ffff+12,fdffff+24,e6f8fd+45,c8eefb+66,bee4f8+81 */
background: #e1ffff; /* Old browsers */
background: -moz-linear-gradient(top,  #e1ffff 0%, #e1ffff 7%, #e1ffff 12%, #fdffff 24%, #e6f8fd 45%, #c8eefb 66%, #bee4f8 81%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #e1ffff 0%,#e1ffff 7%,#e1ffff 12%,#fdffff 24%,#e6f8fd 45%,#c8eefb 66%,#bee4f8 81%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #e1ffff 0%,#e1ffff 7%,#e1ffff 12%,#fdffff 24%,#e6f8fd 45%,#c8eefb 66%,#bee4f8 81%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e1ffff', endColorstr='#bee4f8',GradientType=0 ); /* IE6-9 */

    }
    .table{
        overflow: scroll;
        height: 500px;
    }
</style>


@stop

@section('content')
<div class="main-content">
    <div class="container-fluid">




        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">DADOS CREDITO</h3>
                <div class="left">
                    <i type="button" class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i>
                    <a href="" class="btn btn-success"><i class="bi bi-book"></i> Impor Exel</a>



                </div>



            </div>
            <div class="pull-right">
                <form class="navbar-form navbar-center" method="GET" action="/Dadoscredito">
                    <div class="input-group text-center">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard..." name="cari">
                        <span class="input-group-btn"><button type="submit" class="btn btn-success"><i class="bi bi-search"></i></button></span>
                    </div>
                </form>
            </div>






            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="http://localhost/fe/public/Dadoscredito/create" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="LlqCC0vqiVIufLOxZ5bCeAEZ1QdjXyGtYsr1udRA">                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Registo Cliente Fundu
                                    Esperanca
                                </h5>
                                <img src="http://localhost/fe/public/assets/img/ma.png" alt="" width="100" height="100">








                            </div>



                            <div class="modal-body">
                                <div class="form-group ">
                                    <label for="exampleFormControlInput1">Client Id :</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="clientid">
                                                                        </div>

                                <div class="form-group ">
                                    <label for="exampleFormControlInput1">Naran Completo :</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="naran">
                                                                        </div>



                                <div class="form-group  ">
                                    <label for="exampleFormControlInput1">Suco :</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="suco">
                                                                        </div>  <div class="form-group  ">
                                    <label for="exampleFormControlInput1">Data Moris :</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" name="data_moris">
                                                                        </div>

                                <div class="form-group  >
                                    <label for=" exampleformcontrolinput1"="">Hela Fatin :
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="hela_fatin">
                                                                        </div>
                                <div class="form-group  ">
                                    <label for="exampleFormControlInput1">Posco Administrativo :</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="padministrativo">
                                                                        </div>
                                <div class="form-group  ">
                                    <label for="exampleFormControlInput1">Municipio :</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="municipio">

                                </div>
                                <div class="form-group  ">
                                    <label for="exampleFormControlInput1">Salario :</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="salario">

                                                                        </div>
                                <div class="form-group  ">
                                    <label for="exampleFormControlInput1">Total Credito :</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="total_credito">
                                                                        </div>

                                <div class="form-check">




                                </div>


                                <div class="form-group ">

                                    <select class="form-control input-lg" name="durasaun_id">
                                        <option value="">-- Hili --</option>

                                                                                        <option value="1">Duarsaun 6

                                            </option>
                                                                                        <option value="6">Duarsaun 12

                                            </option>
                                                                                        <option value="7">Duarsaun 24

                                            </option>
                                                                                        <option value="8">Duarsaun 18

                                            </option>

                                    </select>
                                </div>
                                                                    <label class="fancy-checkbox">

                                    <input type="checkbox" value="1" name="osanfunan_id">
                                    <span> Osan Funan 0.015</span>
                                                                        </label>
                                <div class="form-group ">
                                    <label for="exampleFormControlInput1">Numero Telemovel :</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="phone">

                                                                        </div>



                                <div class="form-group  ">
                                    <label for="exampleFormControlInput1">Upload Foto :</label>
                                    <input type="file" class="form-control" name="foto">
                                                                        </div>







                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 40px;">Taka</button>
                                <button type="submit" class="btn btn-success" style="border-radius: 40px;">Guarda
                                    Dados</button>



                </div>
            </div></form>
        </div>
    </div>


    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <div class="col-8" style="margin-left: 40px;">
                    <div class="dataTables_length" id="sampleTable_length">
                        <label>Haree
                            <select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm">
                                <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50 </option>
                                 <option value="100">100</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>

          <div class="card">
            <div class="table-responsive pt-3">
              <table class="table table-striped project-orders-table">
                <thead class="thead">
                  <tr>
                    <th class="ml-5">Nu</th>
                    <th>Foto</th>
                    <th>Id Cliente</th>
                    <th>Naran</th>
                    <th>Total Credito</th>
                    <th>Total Setoran</th>
                    <th>Durasaun</th>
                    <th>Juru Mensal</th>
                    <th>Setoran Mensal</th>
                    <th>Total Dividas</th>
                    <th>Progresso</th>
                    <th style="padding-left: 100px;">Actions</th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td> <img src="http://localhost/fe/public/images/20170610_202750.jpg" width="40" height="40"> </td>
                        <td>27300001</td>
                    <td>Plinio Lewis Gusmao</td>
                    <td>$5,000.00</td>
                    <td>$4,034.33</td>
                    <td>12</td>
                    <td>$75.00</td>
                    <td>$491.67</td>
                    <td>$5,900.00</td>
                    <td>


                         <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:68%">
                            <p>68%</p>
                        </div>
                        </div>

                     </td>


                     </tr>
                </tbody>
              </table>
              <div class="row">
                  <div class="col text-center">
                      <ul class="pagination" role="navigation">

                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
            <span class="page-link" aria-hidden="true">‹</span>
        </li>





                                                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                            <li class="page-item"><a class="page-link" href="http://localhost/fe/public/Dadoscredito?page=2">2</a></li>
                                                                            <li class="page-item"><a class="page-link" href="http://localhost/fe/public/Dadoscredito?page=3">3</a></li>
                                                                            <li class="page-item"><a class="page-link" href="http://localhost/fe/public/Dadoscredito?page=4">4</a></li>
                                                                            <li class="page-item"><a class="page-link" href="http://localhost/fe/public/Dadoscredito?page=5">5</a></li>


                <li class="page-item">
            <a class="page-link" href="http://localhost/fe/public/Dadoscredito?page=2" rel="next" aria-label="Next »">›</a>
        </li>
        </ul>


                  </div>
              </div>

            </div>
          </div>
        </div>
      </div>
</div>

</div>
</div>

@endsection
