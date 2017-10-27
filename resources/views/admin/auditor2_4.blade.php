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
                <li>
                    <a href="{{route('adminauditor23')}}">
                        <i class="fa fa-circle-o"></i>
                        Komitmen Organisasional
                    </a>
                </li>
                <li class="active">
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
            <h1>Komitmen Profesional</h1>
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
                                    <td>Saya ingin melakukan usaha yang luar biasa melebihi yang diharapkan demi kesuksesan/keberhasilan Auditor Internal PLN.</td>
                                    <td>{{$k3a['k3ass']}}</td>
                                    <td>{{$k3a['k3as']}}</td>
                                    <td>{{$k3a['k3aks']}}</td>
                                    <td>{{$k3a['k3ats']}}</td>
                                    <td>{{$k3a['k3asts']}}</td>
                                    <td>{{(($k3a['k3ass']*5)+($k3a['k3as']*4)+($k3a['k3aks']*3)+($k3a['k3ats']*2)+($k3a['k3asts']*1))/($k3a['k3acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saya bangga memberitahu orang lain bahwa saya adalah Auditor Internal PLN.</td>
                                    <td>{{$k3b['k3bss']}}</td>
                                    <td>{{$k3b['k3bs']}}</td>
                                    <td>{{$k3b['k3bks']}}</td>
                                    <td>{{$k3b['k3bts']}}</td>
                                    <td>{{$k3b['k3bsts']}}</td>
                                    <td>{{(($k3b['k3bss']*5)+($k3b['k3bs']*4)+($k3b['k3bks']*3)+($k3b['k3bts']*2)+($k3b['k3bsts']*1))/($k3a['k3acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Menjadi Auditor Internal PLN sangat menginspirasi saya untuk bekerja dengan sebaik-baiknya.</td>
                                    <td>{{$k3c['k3css']}}</td>
                                    <td>{{$k3c['k3cs']}}</td>
                                    <td>{{$k3c['k3cks']}}</td>
                                    <td>{{$k3c['k3cts']}}</td>
                                    <td>{{$k3c['k3csts']}}</td>
                                    <td>{{(($k3c['k3css']*5)+($k3c['k3cs']*4)+($k3c['k3cks']*3)+($k3c['k3cts']*2)+($k3c['k3csts']*1))/($k3a['k3acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Saya sangat peduli dengan perkembangan auditor internal di Indonesia.</td>
                                    <td>{{$k3d['k3dss']}}</td>
                                    <td>{{$k3d['k3ds']}}</td>
                                    <td>{{$k3d['k3dks']}}</td>
                                    <td>{{$k3d['k3dts']}}</td>
                                    <td>{{$k3d['k3dsts']}}</td>
                                    <td>{{(($k3d['k3dss']*5)+($k3d['k3ds']*4)+($k3d['k3dks']*3)+($k3d['k3dts']*2)+($k3d['k3dsts']*1))/($k3a['k3acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Bagi saya, menjadi Auditor Internal PLN adalah profesi terbaik dibandingkan profesi lainnya.</td>
                                    <td>{{$k3e['k3ess']}}</td>
                                    <td>{{$k3e['k3es']}}</td>
                                    <td>{{$k3e['k3eks']}}</td>
                                    <td>{{$k3e['k3ets']}}</td>
                                    <td>{{$k3e['k3ests']}}</td>
                                    <td>{{(($k3e['k3ess']*5)+($k3e['k3es']*4)+($k3e['k3eks']*3)+($k3e['k3ets']*2)+($k3e['k3ests']*1))/($k3a['k3acount']*5)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer" align="center">
                            <a href="{{ route('cont3Auditorsmt') }}" class="btn btn-primary">Export to Excel</a>
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
