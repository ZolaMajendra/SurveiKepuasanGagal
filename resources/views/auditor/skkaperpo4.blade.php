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
            <h1>Setelah Pelaksanaan Kegiatan Audit dan Konsultasi</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['skkaperpo3store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="form-group">
                        <label>Apakah tidak terdapat kendala mengenai penggunaan eRBAS untuk pemantuan tindak lanjut rekomendasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil1', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil1', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila terdapat kendala mengenai penggunaan eRBAS untuk pemantuan tindak lanjut rekomendasi, maka kendala apa yang anda alami?</label>
                        {!! Form::textarea('isi1', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah rekomendasi anda ditindaklanjuti oleh auditee?</label>
                        <div class="input-group">
                            {!! Form::radio('pil2', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil2', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah evidence yang dibuat oleh auditee mengenai tindak lanjut rekomendasi telah sesuai?</label>
                        <div class="input-group">
                            {!! Form::radio('pil3', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil3', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda puas terkait ketepatan waktu mengenai penerimaan uang reimburse SPPD setelah anda melakukan kagiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil4', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil4', 'Tidak') !!} Tidak
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