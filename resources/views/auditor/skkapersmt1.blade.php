@extends('layouts.headerfooterauditor')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="{{route('auditor')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="treeview">
            <a href="{{route('skkaperpo')}}">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Kegiatan Audit</span>
            </a>
        </li>

        <li class="active treeview">
            <a href="{{route('skkapersmt')}}">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Semester</span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }} dengan ID: <b>{{ session()->get('simpanid') }}</b>
            </div>
        @endif
        <section class="content-header">
            <h1>Identitas</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => 'skkapersmtstore']) !!}
        <section class="content">
            <div class="box box-default">
                <div class="box-body">

                    <div class="form-group">
                        <label>Kantor SPI PLN Regional</label>
                        {!! Form::select('unit', [
                            '' => '--',
                            '1' => '1',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                            '5' => '5',
                            '6' => '6',
                            '7' => '7',
                            '8' => '8',
                            '9' => '9',
                            '10' => '10',
                            '11' => '11',
                            '12' => '12',
                            '13' => '13',
                            '14' => '14',
                            '15' => '15',
                            '16' => '16',
                            '17' => '17',
                            '18' => '18',
                            '19' => '19',
                            '20' => '20',
                            '21' => '21',
                            '22' => '22'
                        ], null, ['class' => 'form-control select2']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('smt', 'Semester', ['class' => 'control-label']) !!}
                        {!! Form::select('smt', [
                            '' => '--',
                            '1' => 'Semester 1',
                            '2' => 'Semester 2',
                        ], null, ['class' => 'form-control select2']) !!}
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
                    </div>
                </div>

                <div class="box-footer">
                    <div class="form-group">
                        <div class="pull-right">
                            {!! Form::submit('Lanjut', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {!! Form::close() !!}
    </div>
@endsection