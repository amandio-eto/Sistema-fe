<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">

        {{--  ida nee Mak Modal Ba Iha Edit Husi Dados  --}}

        <!-- Button trigger modal -->
<nav>


            <ul class="nav">

                @if(auth()->user()->role == 'admin');
                <li><a href="{{ url('/home') }}" class=""><i class="bi bi-house-fill"></i>
                    <span>Home</span></a></li>
                <li><a href="{{ url('Dasboard') }}" class="active"><i class="bi bi-bank2"></i>
                        <span>Dashboard</span></a>
                </li>


                 @endif
                        <li><a href="{{ url('/chatify') }}" class="">
                            <span> <i class="bi bi-chat-dots"></i> Live Chat</span></a></li>

                        {{--  ida nee mak Protege admin nia Dasboard  --}}
                        <li><a href="{{ url('Dadoscredito') }}" class=""><i class="fa fa-database"></i>
                            <span>Dados Credito</span></a></li>
                            <li><a href="{{ url('/setoran/show') }}" class=""><i class="bi bi-bank"></i>
                            <span>Selu Setor</span></a></li>
                            <li>
                                <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i>
                                    <span>Setting</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                                    <div id="subPages" class="collapse ">
                                    <ul class="nav">
                                        <li><a href="{{ url('/setting/osan') }}" class="">Setting Saldo</a></li>
                                        <li><a href="{{ url('setting/durasaun') }}" class="">Setting Durasaun</a></li>
                                        <li><a href="{{ url('/auth/create/user') }}" class="">Cria User</a></li>
                                    </ul>
                                </div>
                            </li>

            @if(auth()->user()->role == 'admin')
                <li><a href="{{ url('/Report') }}" class=""><i class="lnr lnr-chart-bars"></i>
                        <span>Report</span></a></li>
                <li><a href="{{ url('/request/credito') }}" class=""><i class="lnr lnr-cog"></i>
                            <span>Request Credito</span></a></li>
                                <li><a href="{{ url('/arquivo/file') }}" class=""><i class="bi bi-file-earmark-image-fill"></i>
                                    <span>Arquivo Tranferensia</span></a></li>
                                    <li><a href="{{ url('recredito') }}" class=""><i class="bi bi-plus-circle"></i>Recredito</span></a></li>

                                <li><a href="{{ url('/Transaction') }}" class=""><i class="bi bi-wallet2"></i>
                                    <span>Transaction</span></a></li>
                <li>
                    <li><a href="{{ url('/contaosan') }}" class="">
                        <span><i class="bi bi-currency-exchange"></i>Conta Osan</span></a></li>

                <li>
                    <li>
                        <li><a href="{{ url('/logs') }}" class="">
                            <i class="bi bi-file-text"></i> Logs File </span></a></li>

                @endif

                {{--  ida nee Mak Ending Husi Dasboard  --}}

            </ul>

        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
