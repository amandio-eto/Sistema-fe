
@extends('master.master')
@section('title','Conta-Osan')

@section('header')
<style>
    .thead{
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#fefcea+0,f1da36+100;Gold+3D */
background: #fefcea; /* Old browsers */
background: -moz-linear-gradient(top,  #fefcea 0%, #f1da36 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #fefcea 0%,#f1da36 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #fefcea 0%,#f1da36 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefcea', endColorstr='#f1da36',GradientType=0 ); /* IE6-9 */

color:black;
text-transform: uppercase;
text-align: center;
    }
</style>

@endsection

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="panel">
                        <div class="panel-heading "  >
                          <div class="row">
                              <div class="col-md text-center ">
                              <h1 class="" style="font-family: Arial, Helvetica, sans-serif;font-weight:900;">Update Conta Osan</h1>
                              </div>
                          </div>

                        </div>
                        <div class="left ml-4" style="margin-left:25px;">
                            <!-- Button trigger modal -->
                            <a class="a-btn-success" href="{{ url('/contaosan/show') }}">
                            Haree Total Osan Cash
                            </a>




                        </div>
                        <div class="panel-body">

                            <table class="table table-hover" border="1">
                                <thead class="thead">
                                    <tr>
                                        <th>Nu</th>
                                        <th>Montante Osan</th>
                                        <th>Quantidane Osan</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="{{ url('/contaosan/update/'.$edit->id) }}" method="POST">
                                        @method('PUT')

                                        @csrf

                                    <tr>
                                        <td>1</td>
                                        <td>$100 Cen dolares</td>
                                        <td>
                                            <input name="cen" value="{{ $edit->cen }}" type="text" class="form-control" id="cen" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" id="subcen" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>$50 Cinquenta Dolares</td>
                                        <td>
                                            <input value="{{ $edit->sinquenta }}" type="text" name="sinquenta" class="form-control" id="sinquenta" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" name="" id="subsinquenta" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>$20 Vinte Dolares</td>
                                        <td>
                                            <input name="vinte" value="{{ $edit->vinte }}" type="text" class="form-control" id="vinte" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" name="" id="subvinte" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>$10 Des Colares</td>
                                        <td>
                                            <input value="{{ $edit->des }}" name="des" type="text" class="form-control" id="des" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" name="" id="subdes" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>$5 Cinco Colares</td>
                                        <td>
                                            <input value="{{ $edit->sinco }}" type="text" name="sinco" class="form-control" id="sinco" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input  type="" name="" id="subsinco" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>$2 Dois Colares</td>
                                        <td>
                                            <input value="{{ $edit->dois }}" name="dois"  type="text" class="form-control" id="dois" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" name="" id="subdois" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>$1 Un Dolar</td>
                                        <td>
                                            <input name="un" value="{{ $edit->un }}" type="text" class="form-control" id="un" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input   type="" name="" id="subun" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>




                                    <tr>
                                        <td>8</td>
                                        <td>0.50 Cincoquenta Centavos</td>
                                        <td>
                                            <input value="{{ $edit->sinquentac }}" name="sinquentac" type="text" class="form-control" id="sincoc" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" name="" id="subsincoc" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>0.25 Vinte Cinco Centavos </td>
                                        <td>
                                            <input  name="vintesinco" value="{{ $edit->vintesinco }}" type="text" class="form-control" id="qualter" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" value="" name="" id="subqualter" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>10</td>
                                        <td>0.10 Des Centavos </td>
                                        <td>
                                            <input name="desc" value="{{ $edit->desc }}" type="text" class="form-control" id="desc" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" name="" id="subdesc" class="form-control" disabled style="width:120px;">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>9</td>
                                        <td>0.5 Cinco Centavos </td>
                                        <td>
                                            <input name="sincoc" value="{{ $edit->sincoc }}" type="text" class="form-control" id="csinco" style="width: 60px;border:none;">
                                        </td>
                                        <td>
                                            <input type="" name="" id="subcsinco" class="form-control" disabled style="width:120px;">
                                        </td>
                                       <tr>
                                           <td>Total</td>
                                           <td><input name="user_id" type="hidden" value="{{ auth()->user()->id }}"></td>
                                           <td><input name="status" value="cash"   class="form-control" type="text" placeholder="Total" readonly  ></td>
                                           <td><input name="total"   class="form-control" type="text" placeholder="Total" readonly id="total" ></td>
                                       </tr>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="modal-footer">



                                <button type="submit" class="btn btn-warning text-dark" style="color:black;"> Update</button>
                              </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>

@stop


@section('footer')
<script src="{{ asset('jquery/jquery.js') }}"></script>
<script>
    $(document).keyup(function(){



        var a = Number($('#cen').val());
        var ta = a * 100;
        $('#subcen').val(ta);

        var b = Number($('#sinquenta').val());
        var tb = b * 50;
        $('#subsinquenta').val(tb);


        var c = Number($('#vinte').val());
        var tc = c * 20;
        $('#subvinte').val(tc);


        var d = Number($('#des').val());
        var td = d * 10;
        $('#subdes').val(td);

        var f = Number($('#sinco').val());
        var tf = f * 5;
        $('#subsinco').val(tf);

        var g = Number($('#dois').val());
        var tg = g * 2;
        $('#subdois').val(tg);

        var h = Number($('#un').val());
        var th = h * 1;
        $('#subun').val(th);

        var i = Number($('#sincoc').val());
        var ti = i * 0.50;
        $('#subsincoc').val(ti);

        var k = Number($('#qualter').val());
        var tj = k * 0.25;
        $('#subqualter').val(tj);

        var k = Number($('#desc').val());
        var tk = k * 0.10;
        $('#subdesc').val(tk);

        var l = Number($('#csinco').val());
        var tl = l * 0.05;
        $('#subcsinco').val(tl);

        var total = ta + tb+tc +td+tf+th+ti+tj+tk+tl;
        $('#total').val(total);



    });
</script>


@stop


