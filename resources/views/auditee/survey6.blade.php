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
            <h1>Proses dan Laporan Audit</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['survey6store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="form-group">
                        <label>Auditor membeikan umpan balik kepada auditee atas isu – isu yang muncul</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori5a', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5a', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5a', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5a', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5a', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Waktu pelaksanaan audit berjalan dengan efektif</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori5b', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5b', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5b', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5b', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5b', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Laporan yang dihasilkan akurat, lengkap, objektif, meyakinkan, jelas, ringkas, bebas dari bahasa atau istilah-istilah yang menimbulkan multi  tafsir, serta tepat waktu</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori5c', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5c', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5c', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5c', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5c', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Laporan mengemukakan penjelasan atau tanggapan auditee tentang hasil audit</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori5d', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5d', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5d', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5d', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5d', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Laporan hasil audit memuat temuan dan simpulan hasil audit secara objektif, serta rekomendasi yang konstruktif</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori5e', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5e', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5e', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5e', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori5e', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
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