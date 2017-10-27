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
            <h1>Nilai Tambah</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['survey7store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="form-group">
                        <label>Adakah layanan audit dan/atau konsultasi dari fungsi SPI yang belum optimal dan maksimal dalam kegiatan audit (tambahkan komentar jika ada)?</label>
                        {!! Form::textarea('nilaia', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Adakah layanan audit dan/atau konsultasi dari fungsi SPI yang tidak perlu dilakukan atau dikurangi (tambahkan komentar jika ada)?</label>
                        {!! Form::textarea('nilaib', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Berikan komentar bebas tentang opini anda mengenai auditor internal PLN</label>
                        {!! Form::textarea('nilaic', null, ['class' => 'form-control']) !!}
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