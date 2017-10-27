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
            <h1>Gaya Kepemimpinan Konsideran</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['skkapersmt8store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="form-group">
                        <label>Hubungan antara atasan dengan bawahan di tempat saya bekerja sangat dekat.</label>
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
                        <label>Di kantor saya, terdapat rasa saling percaya antara atasan dan bawahan.</label>
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
                        <label>Atasan di tempat saya bekerja menghargai gagasan dari bawahan.</label>
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
                        <label>Atasan di temapat saya bekerja menghargai kritikan dari bawahan.</label>
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
                        <label>Komunikasi antara atasan dan bawahan sangat terbuka dan menyenangkan.</label>
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