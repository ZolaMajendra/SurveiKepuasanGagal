@extends('layouts.headerfooteradmin')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="{{route('adminhome')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Survei Kepuasan Auditee</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('adminauditee1')}}">
                        <i class="fa fa-circle-o"></i>
                        Identitas
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee2')}}">
                        <i class="fa fa-circle-o"></i>
                        Persepsi Mnjmn Terhadap SPI
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee3')}}">
                        <i class="fa fa-circle-o"></i>
                        Staff Audit Internal
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee4')}}">
                        <i class="fa fa-circle-o"></i>
                        Ruang Lingkup Pekerjaan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee5')}}">
                        <i class="fa fa-circle-o"></i>
                        Pelaksanaan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee6')}}">
                        <i class="fa fa-circle-o"></i>
                        Proses dan Laporan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee7')}}">
                        <i class="fa fa-circle-o"></i>
                        Nilai Tambah
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Kegiatan Audit</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('adminauditor11')}}">
                        <i class="fa fa-circle-o"></i>
                        Identitas
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor12')}}">
                        <i class="fa fa-circle-o"></i>
                        Pertanyaan Terbuka
                    </a>
                </li>
            </ul>
        </li>

        <li class="active treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Semester</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('adminauditor21')}}">
                        <i class="fa fa-circle-o"></i>
                        Identitas
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor22')}}">
                        <i class="fa fa-circle-o"></i>
                        Pelatihan dan Kompetensi
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('adminauditor23')}}">
                        <i class="fa fa-circle-o"></i>
                        Komitmen Organisasional
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor24')}}">
                        <i class="fa fa-circle-o"></i>
                        Komitmen Profesional
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor25')}}">
                        <i class="fa fa-circle-o"></i>
                        Motivasi Kerja
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor29')}}">
                        <i class="fa fa-circle-o"></i>
                        Gaya Kepemimpinan Konsideran
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor210')}}">
                        <i class="fa fa-circle-o"></i>
                        Gaya Kepemimpinan Structure
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor211')}}">
                        <i class="fa fa-circle-o"></i>
                        Time Budget
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor212')}}">
                        <i class="fa fa-circle-o"></i>
                        Kinerja
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor213')}}">
                        <i class="fa fa-circle-o"></i>
                        Turnover Intention
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor214')}}">
                        <i class="fa fa-circle-o"></i>
                        Promosi
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor215')}}">
                        <i class="fa fa-circle-o"></i>
                        Komunikasi
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor216')}}">
                        <i class="fa fa-circle-o"></i>
                        Co Worker
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor28')}}">
                        <i class="fa fa-circle-o"></i>
                        Keluhan dan Saran
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Laporan Hasil Survei</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        Survei Kepuasan Auditee
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('upAuditee')}}">
                                <i class="fa fa-cloud-upload"></i>
                                Upload
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        SKKA per PO
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('upAuditor1')}}">
                                <i class="fa fa-cloud-upload"></i>
                                Upload
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        SKKA per Semester
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('upAuditor2')}}">
                                <i class="fa fa-cloud-upload"></i>
                                Upload
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <!-- /.content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Komitmen Organisasional</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Pernyataan</th>
                                    <th>Sangat Setuju</th>
                                    <th>Setuju</th>
                                    <th>Kurang Setuju</th>
                                    <th>Tidak Setuju</th>
                                    <th>Sangat Tidak Setuju</th>
                                    <th>Skor</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Saya merasa terikat secara emosional dengan PLN.</td>
                                    <td>{{$k2a['k2ass']}}</td>
                                    <td>{{$k2a['k2as']}}</td>
                                    <td>{{$k2a['k2aks']}}</td>
                                    <td>{{$k2a['k2ats']}}</td>
                                    <td>{{$k2a['k2asts']}}</td>
                                    <td>{{(($k2a['k2ass']*5)+($k2a['k2as']*4)+($k2a['k2aks']*3)+($k2a['k2ats']*2)+($k2a['k2asts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PLN sangat berarti bagi saya.</td>
                                    <td>{{$k2b['k2bss']}}</td>
                                    <td>{{$k2b['k2bs']}}</td>
                                    <td>{{$k2b['k2bks']}}</td>
                                    <td>{{$k2b['k2bts']}}</td>
                                    <td>{{$k2b['k2bsts']}}</td>
                                    <td>{{(($k2b['k2bss']*5)+($k2b['k2bs']*4)+($k2b['k2bks']*3)+($k2b['k2bts']*2)+($k2b['k2bsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Saya merasa menjadi bagian dari PLN.</td>
                                    <td>{{$k2c['k2css']}}</td>
                                    <td>{{$k2c['k2cs']}}</td>
                                    <td>{{$k2c['k2cks']}}</td>
                                    <td>{{$k2c['k2cts']}}</td>
                                    <td>{{$k2c['k2csts']}}</td>
                                    <td>{{(($k2c['k2css']*5)+($k2c['k2cs']*4)+($k2c['k2cks']*3)+($k2c['k2cts']*2)+($k2c['k2csts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Saya merasa masalah PLN seperti masalah saya.</td>
                                    <td>{{$k2d['k2dss']}}</td>
                                    <td>{{$k2d['k2ds']}}</td>
                                    <td>{{$k2d['k2dks']}}</td>
                                    <td>{{$k2d['k2dts']}}</td>
                                    <td>{{$k2d['k2dsts']}}</td>
                                    <td>{{(($k2d['k2dss']*5)+($k2d['k2ds']*4)+($k2d['k2dks']*3)+($k2d['k2dts']*2)+($k2d['k2dsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Saya mau berusaha diatas batas normal untuk memajukan PLN.</td>
                                    <td>{{$k2e['k2ess']}}</td>
                                    <td>{{$k2e['k2es']}}</td>
                                    <td>{{$k2e['k2eks']}}</td>
                                    <td>{{$k2e['k2ets']}}</td>
                                    <td>{{$k2e['k2ests']}}</td>
                                    <td>{{(($k2e['k2ess']*5)+($k2e['k2es']*4)+($k2e['k2eks']*3)+($k2e['k2ets']*2)+($k2e['k2ests']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Saat ini saya tetap tinggal di PLN karena komitmen terhadap PLN.</td>
                                    <td>{{$k2f['k2fss']}}</td>
                                    <td>{{$k2f['k2fs']}}</td>
                                    <td>{{$k2f['k2fks']}}</td>
                                    <td>{{$k2f['k2fts']}}</td>
                                    <td>{{$k2f['k2fsts']}}</td>
                                    <td>{{(($k2f['k2fss']*5)+($k2f['k2fs']*4)+($k2f['k2fks']*3)+($k2f['k2fts']*2)+($k2f['k2fsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Alasan utama saya tetap bekerja di PLN adalah karena loyalitas terhadap PLN.</td>
                                    <td>{{$k2g['k2gss']}}</td>
                                    <td>{{$k2g['k2gs']}}</td>
                                    <td>{{$k2g['k2gks']}}</td>
                                    <td>{{$k2g['k2gts']}}</td>
                                    <td>{{$k2g['k2gsts']}}</td>
                                    <td>{{(($k2g['k2gss']*5)+($k2g['k2gs']*4)+($k2g['k2gks']*3)+($k2g['k2gts']*2)+($k2g['k2gsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer" align="center">
                            <a href="{{ route('cont2Auditorsmt') }}" class="btn btn-primary">Export to Excel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        {!! Charts::assets() !!}
                        <div class="box-body">
                            {!! $chart->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
