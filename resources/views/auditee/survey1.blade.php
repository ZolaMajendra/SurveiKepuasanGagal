@extends('layouts.headerfooterauditee')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="{{route('auditee')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="active treeview">
            <a href="{{route('survey1')}}">
                <i class="fa fa-files-o"></i>
                <span>Survei Kepuasan Auditee</span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Identitas<small>{{Auth::user()->name}}</small></h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => 'survey1store']) !!}
        <section class="content">
            <div class="box box-warning">
                <div class="box-body">

                    <div class="form-group">
                        <label>Unit PLN</label>
                        {!! Form::select('unit_pln', [
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