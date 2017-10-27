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
                <li>
                    <a href="{{route('adminauditor24')}}">
                        <i class="fa fa-circle-o"></i>
                        Komitmen Profesional
                    </a>
                </li>
                <li class="active">
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
            <h1>Motivasi Kerja</h1>
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
                                    <td>Saya selalu berusaha semaksimal mungkin agar mendapatkan hasil terbaik.</td>
                                    <td>{{$k4a['k4ass']}}</td>
                                    <td>{{$k4a['k4as']}}</td>
                                    <td>{{$k4a['k4aks']}}</td>
                                    <td>{{$k4a['k4ats']}}</td>
                                    <td>{{$k4a['k4asts']}}</td>
                                    <td>{{(($k4a['k4ass']*5)+($k4a['k4as']*4)+($k4a['k4aks']*3)+($k4a['k4ats']*2)+($k4a['k4asts']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saya selalu menyelesaikan pekerjaan yang diberikan atasan tepat waktu.</td>
                                    <td>{{$k4b['k4bss']}}</td>
                                    <td>{{$k4b['k4bs']}}</td>
                                    <td>{{$k4b['k4bks']}}</td>
                                    <td>{{$k4b['k4bts']}}</td>
                                    <td>{{$k4b['k4bsts']}}</td>
                                    <td>{{(($k4b['k4bss']*5)+($k4b['k4bs']*4)+($k4b['k4bks']*3)+($k4b['k4bts']*2)+($k4b['k4bsts']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Saya berusaha lebih dekat dengan atasan agar komunikasi berjalan baik.</td>
                                    <td>{{$k4c['k4css']}}</td>
                                    <td>{{$k4c['k4cs']}}</td>
                                    <td>{{$k4c['k4cks']}}</td>
                                    <td>{{$k4c['k4cts']}}</td>
                                    <td>{{$k4c['k4csts']}}</td>
                                    <td>{{(($k4c['k4css']*5)+($k4c['k4cs']*4)+($k4c['k4cks']*3)+($k4c['k4cts']*2)+($k4c['k4csts']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Saya mendapatkan saran yang membangun untuk mendapatkan hasil kerja maksimal.</td>
                                    <td>{{$k4d['k4dss']}}</td>
                                    <td>{{$k4d['k4ds']}}</td>
                                    <td>{{$k4d['k4dks']}}</td>
                                    <td>{{$k4d['k4dts']}}</td>
                                    <td>{{$k4d['k4dsts']}}</td>
                                    <td>{{(($k4d['k4dss']*5)+($k4d['k4ds']*4)+($k4d['k4dks']*3)+($k4d['k4dts']*2)+($k4d['k4dsts']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Saya selalu berusaha untuk menjadi lebih baik daripada rekan kerja saya.</td>
                                    <td>{{$k4e['k4ess']}}</td>
                                    <td>{{$k4e['k4es']}}</td>
                                    <td>{{$k4e['k4eks']}}</td>
                                    <td>{{$k4e['k4ets']}}</td>
                                    <td>{{$k4e['k4ests']}}</td>
                                    <td>{{(($k4e['k4ess']*5)+($k4e['k4es']*4)+($k4e['k4eks']*3)+($k4e['k4ets']*2)+($k4e['k4ests']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Hasil evaluasi kerja saya selalu memuaskan.</td>
                                    <td>{{$k4f['k4fss']}}</td>
                                    <td>{{$k4f['k4fs']}}</td>
                                    <td>{{$k4f['k4fks']}}</td>
                                    <td>{{$k4f['k4fts']}}</td>
                                    <td>{{$k4f['k4fsts']}}</td>
                                    <td>{{(($k4f['k4fss']*5)+($k4f['k4fs']*4)+($k4f['k4fks']*3)+($k4f['k4fts']*2)+($k4f['k4fsts']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Pencapaian kerja saya di  tempat saya bekerja membuat orang respect kepada saya.</td>
                                    <td>{{$k4g['k4gss']}}</td>
                                    <td>{{$k4g['k4gs']}}</td>
                                    <td>{{$k4g['k4gks']}}</td>
                                    <td>{{$k4g['k4gts']}}</td>
                                    <td>{{$k4g['k4gsts']}}</td>
                                    <td>{{(($k4g['k4gss']*5)+($k4g['k4gs']*4)+($k4g['k4gks']*3)+($k4g['k4gts']*2)+($k4g['k4gsts']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Saya selalu berusaha menjaga hubungan baik dengan auditee.</td>
                                    <td>{{$k4h['k4hss']}}</td>
                                    <td>{{$k4h['k4hs']}}</td>
                                    <td>{{$k4h['k4hks']}}</td>
                                    <td>{{$k4h['k4hts']}}</td>
                                    <td>{{$k4h['k4hsts']}}</td>
                                    <td>{{(($k4h['k4hss']*5)+($k4h['k4hs']*4)+($k4h['k4hks']*3)+($k4h['k4hts']*2)+($k4h['k4hsts']*1))/($k4a['k4acount']*5)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer" align="center">
                            <a href="{{ route('cont4Auditorsmt') }}" class="btn btn-primary">Export to Excel</a>
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
