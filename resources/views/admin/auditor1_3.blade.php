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

        <li class="active treeview">
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
                        Sblm Kegiatan Audit
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('adminauditor13')}}">
                        <i class="fa fa-circle-o"></i>
                        Selama Kegiatan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor14')}}">
                        <i class="fa fa-circle-o"></i>
                        Setelah Kegiatan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor15')}}">
                        <i class="fa fa-circle-o"></i>
                        Keluhan dan Saran
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
                    <a href="{{route('adminauditor26')}}">
                        <i class="fa fa-circle-o"></i>
                        Konflik Peran
                    </a>
                </li>
                <li>
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
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Selama Pelaksanaan Kegiatan Audit Dan Konsultasi</h1>
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
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Skor</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Apakah anda tidak mengalami kendala terkait sarana prasarana untuk melakukan kegiatan audit dan konsultasi?</td>
                                    <td>{{$k['k1y']}}</td>
                                    <td>{{$k['k1t']}}</td>
                                    <td>{{(($k['k1y']*1)+($k['k1t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Apakah anda tidak mengalami kendala terkait permintaan data ke auditee selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$k['k2y']}}</td>
                                    <td>{{$k['k2t']}}</td>
                                    <td>{{(($k['k2y']*1)+($k['k2t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Apakah data yang diberikan auditee sudah sesuai dengan apa yang diminta oleh auditor? (dilihat dari segi kelengkapan data)</td>
                                    <td>{{$k['k3y']}}</td>
                                    <td>{{$k['k3t']}}</td>
                                    <td>{{(($k['k3y']*1)+($k['k3t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Apakah profile risk auditee sudah tepat sehingga sasaran kegiatan audit dan konsultasi tepat sasaran? </td>
                                    <td>{{$k['k4y']}}</td>
                                    <td>{{$k['k4t']}}</td>
                                    <td>{{(($k['k4y']*1)+($k['k4t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Apakah anda tidak mengalami kendala mengenai penggunaan eRBAS selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$k['k5y']}}</td>
                                    <td>{{$k['k5t']}}</td>
                                    <td>{{(($k['k5y']*1)+($k['k5t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Apakah tidak terdapat kendala terkait pelaksanaan uji petik?</td>
                                    <td>{{$k['k6y']}}</td>
                                    <td>{{$k['k6t']}}</td>
                                    <td>{{(($k['k6y']*1)+($k['k6t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Apakah auditee kooperatif selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$k['k7y']}}</td>
                                    <td>{{$k['k7t']}}</td>
                                    <td>{{(($k['k7y']*1)+($k['k7t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi jumlah SDM)</td>
                                    <td>{{$k['k8y']}}</td>
                                    <td>{{$k['k8t']}}</td>
                                    <td>{{(($k['k8y']*1)+($k['k8t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi kemampuan SDM)</td>
                                    <td>{{$k['k9y']}}</td>
                                    <td>{{$k['k9t']}}</td>
                                    <td>{{(($k['k9y']*1)+($k['k9t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Apakah tidak terdapat kendala terkait pencarian hotel selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$k['k10y']}}</td>
                                    <td>{{$k['k10t']}}</td>
                                    <td>{{(($k['k10y']*1)+($k['k10t']*0))/$k['k1count']}}</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Apakah auditee tidak sulit ditemui selama kegiatan audit dan konsultasi?</td>
                                    <td>{{$k['k11y']}}</td>
                                    <td>{{$k['k11t']}}</td>
                                    <td>{{(($k['k11y']*1)+($k['k11t']*0))/$k['k1count']}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Isian</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Isian untuk pilihan no 1</th>
                                    <th>Isian untuk pilihan no 2</th>
                                    <th>Isian untuk pilihan no 5</th>
                                    <th>Isian untuk pilihan no 6</th>
                                    <th>Isian untuk pilihan no 7</th>
                                    <th>Isian untuk pilihan no 10</th>
                                </tr>
                                @foreach($data as $dat)
                                    <tr>
                                        <td>{{$count = $count + 1}}</td>
                                        <td>{{$dat->sarana_selama_audit_isian}}</td>
                                        <td>{{$dat->minta_data_selama_audit_isian}}</td>
                                        <td>{{$dat->erbas_selama_audit_isian}}</td>
                                        <td>{{$dat->uji_petik_isian}}</td>
                                        <td>{{$dat->kooperatif_selama_audit_isian}}</td>
                                        <td>{{$dat->hotel_isian}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer" align="center">
                            <a href="{{ route('slmAuditorpo') }}" class="btn btn-primary">Export to Excel</a>
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
    <!-- /.content-wrapper -->
@endsection
