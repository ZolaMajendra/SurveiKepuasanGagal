@extends('layouts.headerfooterauditorplus')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="{{route('auditorplus')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="treeview">
            <a href="{{route('downAuditee')}}">
                <i class="fa fa-files-o"></i>
                <span>Survei Kepuasan Auditee</span>
            </a>
        </li>

        <li class="treeview">
            <a href="{{route('downAuditor1')}}">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Kegiatan Audit</span>
            </a>
        </li>

        <li class="active treeview">
            <a href="{{route('downAuditor2')}}">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Semester</span>
            </a>
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
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="box-title">Filter</div>
                        </div>
                        <div class="box-body">
                            {!! Form::open(['route' => 'downAuditor2Filter']) !!}
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
                                        {!! Form::label('smt', 'Semester', ['class' => 'control-label']) !!}
                                        {!! Form::select('smt', [
                                            '0' => 'Semua',
                                            '1' => 'Semester 1',
                                            '2' => 'Semester 2'
                                        ], Session::get('session2'), ['class' => 'form-control select2']) !!}
                                        {{Session::forget('session2')}}
                                    @else
                                        {!! Form::label('smt', 'Semester', ['class' => 'control-label']) !!}
                                        {!! Form::select('smt', [
                                            '0' => 'Semua',
                                            '1' => 'Semester 1',
                                            '2' => 'Semester 2'
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
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <div class="box-title">Download Berkas</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table id="datafile" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Kantor SPI Regional</th>
                                    <th>Semester</th>
                                    <th>Tahun</th>
                                    <th>Judul Berkas</th>
                                    <th>Berkas</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($file as $data)
                                    <tr>
                                        <td>{{$data->unit_spi}}</td>
                                        <td>{{$data->semester}}</td>
                                        <td>{{$data->tahun}}</td>
                                        <td>{{$data->file_title}}</td>
                                        <td>{{$data->file_name}}</td>
                                        <td align="center">
                                            <a href="{{route('downLoad', $data->file_name)}}">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-cloud-download"></i>
                                                    Download
                                                </button>
                                            </a>
                                            <a href="{{ route('delFileAuditor2', $data->id_berkas) }}" class="btn btn-danger">Hapus</a>
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
