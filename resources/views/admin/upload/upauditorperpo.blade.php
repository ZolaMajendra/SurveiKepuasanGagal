@extends('layouts.headerfooteradmin')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active treeview">
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

        <li class="active treeview">
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
                <li class="active">
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        SKKA per PO
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active">
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
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::open(['route' => 'storeFileAuditor1', 'method' => 'POST','files' => 'true']) !!}
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <div class="box-title">Upload Berkas</div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('unit_spi', 'Unit SPI', ['class' => 'control-label']) !!}
                                {!! Form::select('unit_spi', [
                                    '' => '--',
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
                                @if ($errors->has('unit_spi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unit_spi') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('tahun', 'Tahun', ['class' => 'control-label']) !!}
                                {!! Form::select('tahun', [
                                    '' => '--',
                                    '2012' => '2012',
                                    '2013' => '2013',
                                    '2014' => '2014',
                                    '2015' => '2015',
                                    '2016' => '2016',
                                    '2017' => '2017',
                                    '2018' => '2018',
                                    '2019' => '2019',
                                ], null, ['class' => 'form-control select2']) !!}
                                @if ($errors->has('tahun'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('nama', 'Judul Berkas', ['class' => 'control-label']) !!}
                                {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('berkas', 'Upload Berkas', ['class' => 'control-label']) !!}
                                {!! Form::file('berkas', null, ['class' => 'form-control filename']) !!}
                                @if ($errors->has('berkas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('berkas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="form-group">
                                <div class="pull-right">
                                    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <div class="box-title">Download Berkas</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table id="datafile" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Unit SPI</th>
                                    <th>Tahun</th>
                                    <th>Judul Berkas</th>
                                    <th>Berkas</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($file as $data)
                                    <tr>
                                        <td>{{$data->unit_spi}}</td>
                                        <td>{{$data->tahun}}</td>
                                        <td>{{$data->file_title}}</td>
                                        <td>{{$data->file_name}}</td>
                                        <td align="center">
                                            <a href="{{route('download', $data->file_name)}}">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-cloud-download"></i>
                                                    Download
                                                </button>
                                            </a>
                                            <a href="{{ route('destFileAuditor1', $data->id_berkas) }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
