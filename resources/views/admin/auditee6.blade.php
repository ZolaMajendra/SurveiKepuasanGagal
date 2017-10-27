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

        <li class="active treeview">
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
                <li class="active">
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

        <li class="treeview">
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
    <!-- /.content-wrapper -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Proses Dan Laporan Audit</h1>
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
                                    <td>Auditor membeikan umpan balik kepada auditee atas isu – isu yang muncul</td>
                                    <td>{{$k5a['k5ass']}}</td>
                                    <td>{{$k5a['k5as']}}</td>
                                    <td>{{$k5a['k5aks']}}</td>
                                    <td>{{$k5a['k5ats']}}</td>
                                    <td>{{$k5a['k5asts']}}</td>
                                    <td>{{(($k5a['k5ass']*5)+($k5a['k5as']*4)+($k5a['k5aks']*3)+($k5a['k5ats']*2)+($k5a['k5asts']*1))/($k5a['k5acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Waktu pelaksanaan audit berjalan dengan efektif</td>
                                    <td>{{$k5b['k5bss']}}</td>
                                    <td>{{$k5b['k5bs']}}</td>
                                    <td>{{$k5b['k5bks']}}</td>
                                    <td>{{$k5b['k5bts']}}</td>
                                    <td>{{$k5b['k5bsts']}}</td>
                                    <td>{{(($k5b['k5bss']*5)+($k5b['k5bs']*4)+($k5b['k5bks']*3)+($k5b['k5bts']*2)+($k5b['k5bsts']*1))/($k5a['k5acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Laporan yang dihasilkan akurat, lengkap, objektif, meyakinkan, jelas, ringkas, bebas dari bahasa atau istilah-istilah yang menimbulkan multi  tafsir, serta tepat waktu</td>
                                    <td>{{$k5c['k5css']}}</td>
                                    <td>{{$k5c['k5cs']}}</td>
                                    <td>{{$k5c['k5cks']}}</td>
                                    <td>{{$k5c['k5cts']}}</td>
                                    <td>{{$k5c['k5csts']}}</td>
                                    <td>{{(($k5c['k5css']*5)+($k5c['k5cs']*4)+($k5c['k5cks']*3)+($k5c['k5cts']*2)+($k5c['k5csts']*1))/($k5a['k5acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Laporan mengemukakan penjelasan atau tanggapan auditee tentang hasil audit</td>
                                    <td>{{$k5d['k5dss']}}</td>
                                    <td>{{$k5d['k5ds']}}</td>
                                    <td>{{$k5d['k5dks']}}</td>
                                    <td>{{$k5d['k5dts']}}</td>
                                    <td>{{$k5d['k5dsts']}}</td>
                                    <td>{{(($k5d['k5dss']*5)+($k5d['k5ds']*4)+($k5d['k5dks']*3)+($k5d['k5dts']*2)+($k5d['k5dsts']*1))/($k5a['k5acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Laporan hasil audit memuat temuan dan simpulan hasil audit secara objektif, serta rekomendasi yang konstruktif</td>
                                    <td>{{$k5e['k5ess']}}</td>
                                    <td>{{$k5e['k5es']}}</td>
                                    <td>{{$k5e['k5eks']}}</td>
                                    <td>{{$k5e['k5ets']}}</td>
                                    <td>{{$k5e['k5ests']}}</td>
                                    <td>{{(($k5e['k5ess']*5)+($k5e['k5es']*4)+($k5e['k5eks']*3)+($k5e['k5ets']*2)+($k5e['k5ests']*1))/($k5a['k5acount']*5)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer" align="center">
                            <a href="{{ route('kat5Auditee') }}" class="btn btn-primary">Export to Excel</a>
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
        <!-- /.content -->
    </div>
@endsection
