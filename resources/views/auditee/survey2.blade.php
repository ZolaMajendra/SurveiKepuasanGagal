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
            <h1>Persepsi Manajemen Terhadap SPI</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['survey2store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="form-group">
                        <label>SPI sebagai bagian yang penting dalam tim manajemen auditee / unit operasional</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori1a', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1a', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1a', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1a', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1a', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>SPI pada posisi yang independen dalam menjalankan tugasnya</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori1b', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1b', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1b', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1b', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1b', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor berhak mendapatkan kebebasan dan akses tidak terbatas terhadap catatan, informasi, lokasi, dan karyawan dalam ruang lingkup penugasan mereka</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori1c', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1c', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1c', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1c', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori1c', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kegiatan audit internal mempromosikan orientasi kualitas kerja yang baik pada auditee</label>
                        <div class="input-group">
                            <div class="input-group">
                                <input type="radio" name="kategori1d" value="Sangat Setuju"> Sangat Setuju
                            </div>
                            <div class="input-group">
                                <input type="radio" name="kategori1d" value="Setuju"> Setuju
                            </div>
                            <div class="input-group">
                                <input type="radio" name="kategori1d" value="Kurang Setuju"> Kurang Setuju
                            </div>
                            <div class="input-group">
                                <input type="radio" name="kategori1d" value="Tidak Setuju"> Tidak Setuju
                            </div>
                            <div class="input-group">
                                <input type="radio" name="kategori1d" value="Sangat Tidak Setuju"> Sangat Tidak Setuju
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