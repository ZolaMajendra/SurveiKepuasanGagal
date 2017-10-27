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
                <li>
                    <a href="{{route('adminauditor25')}}">
                        <i class="fa fa-circle-o"></i>
                        Motivasi Kerja
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor26')}}">
                        <i class="fa fa-circle-o"></i>
                        Konflik Peran
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('adminauditor27')}}">
                        <i class="fa fa-circle-o"></i>
                        Lain - Lain
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
            <h1>Lain-Lain</h1>
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
                                    <td>Saya merasa puas dengan gaji saya saat ini.</td>
                                    <td>{{$k6a['k6ass']}}</td>
                                    <td>{{$k6a['k6as']}}</td>
                                    <td>{{$k6a['k6aks']}}</td>
                                    <td>{{$k6a['k6ats']}}</td>
                                    <td>{{$k6a['k6asts']}}</td>
                                    <td>{{(($k6a['k6ass']*5)+($k6a['k6as']*4)+($k6a['k6aks']*3)+($k6a['k6ats']*2)+($k6a['k6asts']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saya sangat menyukai pekerjaan saya saat ini.</td>
                                    <td>{{$k6b['k6bss']}}</td>
                                    <td>{{$k6b['k6bs']}}</td>
                                    <td>{{$k6b['k6bks']}}</td>
                                    <td>{{$k6b['k6bts']}}</td>
                                    <td>{{$k6b['k6bsts']}}</td>
                                    <td>{{(($k6b['k6bss']*5)+($k6b['k6bs']*4)+($k6b['k6bks']*3)+($k6b['k6bts']*2)+($k6b['k6bsts']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Saya merasa tidak ingin pindah dari pekerjaan saya saat ini.</td>
                                    <td>{{$k6c['k6css']}}</td>
                                    <td>{{$k6c['k6cs']}}</td>
                                    <td>{{$k6c['k6cks']}}</td>
                                    <td>{{$k6c['k6cts']}}</td>
                                    <td>{{$k6c['k6csts']}}</td>
                                    <td>{{(($k6c['k6css']*5)+($k6c['k6cs']*4)+($k6c['k6cks']*3)+($k6c['k6cts']*2)+($k6c['k6csts']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Saya lebih menyukai pekerjaan saya daripada teman lainnya.</td>
                                    <td>{{$k6d['k6dss']}}</td>
                                    <td>{{$k6d['k6ds']}}</td>
                                    <td>{{$k6d['k6dks']}}</td>
                                    <td>{{$k6d['k6dts']}}</td>
                                    <td>{{$k6d['k6dsts']}}</td>
                                    <td>{{(($k6d['k6dss']*5)+($k6d['k6ds']*4)+($k6d['k6dks']*3)+($k6d['k6dts']*2)+($k6d['k6dsts']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Saya merasa yakin akan segera dipromosikan.</td>
                                    <td>{{$k6e['k6ess']}}</td>
                                    <td>{{$k6e['k6es']}}</td>
                                    <td>{{$k6e['k6eks']}}</td>
                                    <td>{{$k6e['k6ets']}}</td>
                                    <td>{{$k6e['k6ests']}}</td>
                                    <td>{{(($k6e['k6ess']*5)+($k6e['k6es']*4)+($k6e['k6eks']*3)+($k6e['k6ets']*2)+($k6e['k6ests']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Saya puas terhadap penilaian kinerja Auditor Internal PLN.</td>
                                    <td>{{$k6f['k6fss']}}</td>
                                    <td>{{$k6f['k6fs']}}</td>
                                    <td>{{$k6f['k6fks']}}</td>
                                    <td>{{$k6f['k6fts']}}</td>
                                    <td>{{$k6f['k6fsts']}}</td>
                                    <td>{{(($k6f['k6fss']*5)+($k6f['k6fs']*4)+($k6f['k6fks']*3)+($k6f['k6fts']*2)+($k6f['k6fsts']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Saya puas terhadap pengelolaan karir Auditor Internal PLN. </td>
                                    <td>{{$k6g['k6gss']}}</td>
                                    <td>{{$k6g['k6gs']}}</td>
                                    <td>{{$k6g['k6gks']}}</td>
                                    <td>{{$k6g['k6gts']}}</td>
                                    <td>{{$k6g['k6gsts']}}</td>
                                    <td>{{(($k6g['k6gss']*5)+($k6g['k6gs']*4)+($k6g['k6gks']*3)+($k6g['k6gts']*2)+($k6g['k6gsts']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Saya puas terhadap sistem rotasi pegawai di PLN. </td>
                                    <td>{{$k6h['k6hss']}}</td>
                                    <td>{{$k6h['k6hs']}}</td>
                                    <td>{{$k6h['k6hks']}}</td>
                                    <td>{{$k6h['k6hts']}}</td>
                                    <td>{{$k6h['k6hsts']}}</td>
                                    <td>{{(($k6h['k6hss']*5)+($k6h['k6hs']*4)+($k6h['k6hks']*3)+($k6h['k6hts']*2)+($k6h['k6hsts']*1))/($k6a['k6acount']*5)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer" align="center">
                            <a href="{{ route('cont6Auditorsmt') }}" class="btn btn-primary">Export to Excel</a>
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
