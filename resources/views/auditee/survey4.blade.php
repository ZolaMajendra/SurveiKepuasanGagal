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
            <h1>Ruang Lingkup Pekerjaan Audit</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['survey4store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="form-group">
                        <label>Pemilihan area atau topik yang penting untuk diaudit sudah tepat</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori3a', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori3a', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori3a', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori3a', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori3a', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor mempertimbangkan saran dalam menentukan area atau topik sesuai dengan kebutuhan perbaikan kinerja operasional unit</label>
                        <div class="input-group">
                            <div class="input-group">
                                <div class="input-group">
                                    {!! Form::radio('kategori3b', 'Sangat Setuju') !!} Sangat Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3b', 'Setuju') !!} Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3b', 'Kurang Setuju') !!} Kurang Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3b', 'Tidak Setuju') !!} Tidak Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3b', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pemberitahuan pra-audit terkait maksud dan lingkup penugasan sudah cukup jelas dan dapat dipahami</label>
                        <div class="input-group">
                            <div class="input-group">
                                <div class="input-group">
                                    {!! Form::radio('kategori3c', 'Sangat Setuju') !!} Sangat Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3c', 'Setuju') !!} Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3c', 'Kurang Setuju') !!} Kurang Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3c', 'Tidak Setuju') !!} Tidak Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3c', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor sudah mempertimbangkan tanggapan auditee tentang area of improvement yang ditemukan dan rekomendasi yang akan diberikan saat exit meeting</label>
                        <div class="input-group">
                            <div class="input-group">
                                <div class="input-group">
                                    {!! Form::radio('kategori3d', 'Sangat Setuju') !!} Sangat Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3d', 'Setuju') !!} Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3d', 'Kurang Setuju') !!} Kurang Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3d', 'Tidak Setuju') !!} Tidak Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori3d', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                                </div>
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