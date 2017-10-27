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
            <h1>Pelaksanaan Audit</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['survey5store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="form-group">
                        <label>Auditor menyertakan surat tugas dalam pelaksanaan audit</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori4a', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4a', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4a', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4a', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4a', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor menyertakan atau menunjukkan surat permintaan data / dokumen dalam meminta data / dokumen</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori4b', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4b', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4b', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4b', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4b', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor melaksanakan final mapping end to end dengan auditee</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori4c', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4c', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4c', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4c', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4c', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor menyampaikan secara lengkap dan jelas kegiatan audit pada entry meeting</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori4d', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4d', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4d', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4d', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4d', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor menyampaikan secara lengkap dan jelas laporan hasil audit pada exit meeting</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori4e', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4e', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4e', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4e', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4e', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memonitoring tindak lanjut atas rekomendasi yang diberikan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori4f', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4f', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4f', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4f', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori4f', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
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