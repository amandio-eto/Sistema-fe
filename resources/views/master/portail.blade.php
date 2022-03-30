<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ url('Dasboard') }}" class="active"><i class="lnr lnr-home"></i>
                        <span>Dashboard</span></a></li>
                <li><a href="{{ url('Dadoscredito') }}" class=""><i class="fa fa-database"></i>
                        <span>Dados Credito</span></a></li>
                <li><a href="{{ url('/Report') }}" class=""><i class="lnr lnr-chart-bars"></i>
                        <span>Report</span></a></li>
                <li><a href="{{ url('/request/credito') }}" class=""><i class="lnr lnr-cog"></i>
                        <span>Request Credito</span></a></li>
                <li><a href="{{ url('/Notifikasaun') }}" class=""><i class="lnr lnr-alarm"></i>
                        <span>Notifikasaun</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i>
                        <span>Setting</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="/setting/logo" class="">Setting Logo</a></li>
                            <li><a href="/setting/saldo" class="">Setting Logo</a></li>
                            <li><a href="page-login.html" class="">Password</a></li>
                            <li><a href="page-lockscreen.html" class="">Cria User</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
