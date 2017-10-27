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
        <section class="content-header">
            <h1>Pelatihan dan Kompetensi</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        {!! Form::open(['route' => ['skkapersmt1store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="form-group">
                        <label>Saya diberikan kesempatan oleh PLN untuk melanjutkan jenjang pendidikan.</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('pil1', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil1', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil1', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil1', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil1', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Saya merasa pelatihan khusus untuk penugasan kegiatan audit dan konsultasi sudah memadai.</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('pil2', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil2', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil2', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil2', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil2', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Saya diberikan kesempatan oleh PLN untuk mengikuti berbagai seminar diluar PLN.</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('pil3', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil3', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil3', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil3', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil3', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Saya dapat menyelesaikan masalah dalam kegiatan audit dan konsultasi dengan kemampuan yang saya miliki.</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('pil4', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil4', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil4', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil4', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil4', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Saya memiliki kemampuan untuk mengkomunikasikan rekomendasi hasil kegiatan audit dan konsultasi.</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('pil5', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil5', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil5', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil5', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil5', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Saya memiliki kemampuan kerjasama yang baik dalam tim.</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('pil6', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil6', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil6', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil6', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('pil6', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
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