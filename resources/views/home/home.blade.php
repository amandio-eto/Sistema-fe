


@extends('master.master')
@section('header')

<style>
    .i{
        height: 200px;
        padding: 20px;
        border: 1px solid black;
        margin: 40,  40px;
        border-left: 2px solid black;
    }
    .icon ul {
        position: relative;
        display: flex;
        justify-content: center;
        list-style: none;
        flex-wrap: wrap;
        margin: 10px 0;

    }
    .icon ul li a{
        font-size: 4em;
        margin: 0 20px;
        display: inline-block;
        transition: 0.5px;
    }

    .icon ul li{
        padding: 40px;
        margin-left: 40px;
        margin-bottom:40px;
        border-radius: 20px;
        background:/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f0f9ff+0,cbebff+47,a1dbff+100;Blue+3D+%2313 */
        background: rgb(240,249,255); /* Old browsers */
        background: -moz-linear-gradient(top,  rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */
;





    }
    .icon ul li:hover{
        background: #d9534f;
        color:white;
        border: 1px solid black;
        
    }
  


</style>

@endsection

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="container text-center" style="margin: 60px;">
            <div class="col-md text-white icon" >
               <ul>
                   <li><a href="{{ url('/Dasboard')}}"><i class=" text-white bi bi-bank2"></i> <br>
                    <p class="" style="font-size: 10px;color:black;">Dasboard</p>
                  </li>

                    <li><a href="{{ url('/chatify') }}"><ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        <br>
                        <p class="" style="font-size: 10px;color:black;">Live Chat</p></li>
                        <li><a href="{{ url('/Dadoscredito') }}"><i class="fa fa-database"></i> <br>
                            <p class="" style="font-size: 10px;color:black;">Dados Credito</p></li>
                   <li>
                    <a href="{{ url('/setoran/show') }}"><i class="bi bi-bank"></i>
                    <br>
                    <p class="" style="font-size: 10px;color:black;">Selu Setor</p>
                  </li>
               </ul>


            </div>
            <div class="icon" >
                <ul>
                    <li><a href=""><i class="lnr lnr-chart-bars"></i>
                       <br>
                   <p class="" style="font-size: 10px;color:black;">Report</p>
                   </li>
                    <li><a href="{{ url('/arquivo/file') }}"><i class="bi bi-file-earmark-image-fill"></i> <br>
                        <p class="" style="font-size: 10px;color:black;">Arquivo Documentos</p></li>

                    <li><a href=""><i class="bi bi-wallet2"></i>
                        <br>
                        <p class="{{ url('/transaction') }}" style="font-size: 10px;color:black;">Transaction</p></li>
                    <li><a href=""><i class="bi bi-currency-exchange"></i>
                        <br>
                        <p class="{{ url('/contaosan') }}" style="font-size: 10px;color:black;">Conta Osan</p></li>
                </ul>


             </div>
             <div class="icon" >
                <ul>
                    <li><a href="{{ url('/setting/osan') }}"><ion-icon name="cash-outline"></ion-icon>
                        <br>
                        <p class="" style="font-size: 10px;color:black;">Setting Saldo</p>
                    </li>

                    <li><a href="{{ url('/auth/create/user') }}"><ion-icon name="person-add-outline"></ion-icon><br>
                        <p class="" style="font-size: 10px;color:black;">Setting Saldo</p></li>
                     <li><a href=""><ion-icon name="chatbox-ellipses-outline"></ion-icon></li>
                    <li><a href=""><i class="fa fa-database"></i></li>
                </ul>


             </div>






        </div>
    </div>
</div>

@stop
@section('footer')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@stop
