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

        <li class="active treeview">
            <a href="{{route('skkaperpo')}}">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Kegiatan Audit</span>
            </a>
        </li>

        <li class="treeview">
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
        <section class="content-header">
            <h1>Pertanyaan Terbuka</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['skkaperponewstore', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="form-group">
                        <label>Kendala apa yang Anda alami terhadap PO di Unit Pelaksana terkait pada Tahap Perencanaan kegiatan audit dan konsultasi?</label>
                        {!! Form::textarea('soal1', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Kendala apa yang Anda alami terhadap PO di Unit Pelaksana terkait pada Tahap Pelaksanaan kegiatan audit dan konsultasi?</label>
                        {!! Form::textarea('soal2', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Kendala apa yang Anda alami terhadap PO di Unit Pelaksana terkait pada Tahap Pelaporan kegiatan audit dan konsultasi?</label>
                        {!! Form::textarea('soal3', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Hal apa yang perlu ditingkatkan untuk meningkatkan pelaksanaan PO di Unit Pelaksana terkait kegiatan audit dan konsultasi?</label>
                        {!! Form::textarea('soal4', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="box-footer">
                    <div class="form-group">
                        <div class="pull-right">
                            {!! Form::submit('Simpan', ['class' => 'btn btn-github']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {!! Form::close() !!}
    </div>
@endsection