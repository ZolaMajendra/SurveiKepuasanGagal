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
                <li class="active">
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
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Identitas Auditee</h1>
        </section>
        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="box-title">Filter</div>
                        </div>
                        <div class="box-body">
                            {!! Form::open(['route' => 'admAuditeeFilter']) !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    @if(Session::has('session'))
                                        {!! Form::label('tahun', 'Tahun', ['class' => 'control-label']) !!}
                                        {!! Form::select('tahun', [
                                            '0' => 'Semua',
                                            '2012' => '2012',
                                            '2013' => '2013',
                                            '2014' => '2014',
                                            '2015' => '2015',
                                            '2016' => '2016',
                                            '2017' => '2017',
                                            '2018' => '2018',
                                            '2019' => '2019',
                                        ], Session::get('session'), ['class' => 'form-control select2']) !!}
                                        {{Session::forget('session')}}
                                    @else
                                        {!! Form::label('tahun', 'Tahun', ['class' => 'control-label']) !!}
                                        {!! Form::select('tahun', [
                                            '0' => 'Semua',
                                            '2012' => '2012',
                                            '2013' => '2013',
                                            '2014' => '2014',
                                            '2015' => '2015',
                                            '2016' => '2016',
                                            '2017' => '2017',
                                            '2018' => '2018',
                                            '2019' => '2019',
                                        ], null, ['class' => 'form-control select2']) !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @if(Session::has('session2'))
                                        {!! Form::label('unit_pln', 'Unit PLN', ['class' => 'control-label']) !!}
                                        {!! Form::select('unit_pln', [
                                            'Semua' => 'Semua',
                                            'Direktorat Bisnis Regional Maluku dan Papua' => 'Direktorat Bisnis Regional Maluku dan Papua',
                                            'Wilayah Papua & Papua Barat' => 'Wilayah Papua & Papua Barat',
                                            'Wilayah Maluku & Maluku Utara'=> 'Wilayah Maluku & Maluku Utara',
                                            'Area Biak' => 'Area Biak',
                                            'Area Jayapura' => 'Area Jayapura',
                                            'Area Manokwari' => 'Area Manokwari',
                                            'Area Merauke' => 'Area Merauke',
                                            'Area Sorong' => 'Area Sorong',
                                            'Area Timika' => 'Area Timika',
                                            'Area Ambon' => 'Area Ambon',
                                            'Area Masohi' => 'Area Masohi',
                                            'Area Ternate' => 'Area Ternate',
                                            'Area Tual' => 'Area Tual',
                                            'Area Sofifi' => 'Area Sofifi',
                                            'Sektor Papua dan Papua Barat' => 'Sektor Papua dan Papua Barat',
                                            'Sektor Maluku' => 'Sektor Maluku'
                                        ], Session::get('session2'), ['class' => 'form-control select2']) !!}
                                        {{Session::forget('session2')}}
                                    @else
                                        {!! Form::label('unit_pln', 'Unit PLN', ['class' => 'control-label']) !!}
                                        {!! Form::select('unit_pln', [
                                            'Semua' => 'Semua',
                                            'Direktorat Bisnis Regional Maluku dan Papua' => 'Direktorat Bisnis Regional Maluku dan Papua',
                                            'Wilayah Papua & Papua Barat' => 'Wilayah Papua & Papua Barat',
                                            'Wilayah Maluku & Maluku Utara'=> 'Wilayah Maluku & Maluku Utara',
                                            'Area Biak' => 'Area Biak',
                                            'Area Jayapura' => 'Area Jayapura',
                                            'Area Manokwari' => 'Area Manokwari',
                                            'Area Merauke' => 'Area Merauke',
                                            'Area Sorong' => 'Area Sorong',
                                            'Area Timika' => 'Area Timika',
                                            'Area Ambon' => 'Area Ambon',
                                            'Area Masohi' => 'Area Masohi',
                                            'Area Ternate' => 'Area Ternate',
                                            'Area Tual' => 'Area Tual',
                                            'Area Sofifi' => 'Area Sofifi',
                                            'Sektor Papua dan Papua Barat' => 'Sektor Papua dan Papua Barat',
                                            'Sektor Maluku' => 'Sektor Maluku'
                                        ], null, ['class' => 'form-control select2']) !!}
                                    @endif
                                </div>
                            </div>

                            <div class="box-footer">
                                <div class="form-group">
                                    <div class="pull-right">
                                        {!! Form::submit('Cari', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Auditee yang Sudah Mengisi Survey</div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID Auditee</th>
                                <th>Unit PLN</th>
                                <th>Tahun</th>
                                <th></th>
                            </tr>
                            @foreach($data as $dat)
                                <tr>
                                    <td>{{$dat->username}}</td>
                                    <td>{{$dat->unit_pln}}</td>
                                    <td>{{$dat->tahun}}</td>
                                    <td>
                                        <a href="{{ route('showAuditeeId', $dat->id_identitas_auditee) }}" class="btn btn-primary">Lihat Hasil</a>
                                        <a href="{{ route('deleteAuditee', $dat->id_identitas_auditee) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer" align="center">
                        <a href="{{ route('IdAuditee') }}" class="btn btn-primary">Export to Excel</a>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
