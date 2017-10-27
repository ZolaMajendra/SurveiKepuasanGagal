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
            <h1>Selama Pelaksanaan Kegiatan Audit dan Konsultasi</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['skkaperpo2store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="form-group">
                        <label>Apakah anda tidak mengalami kendala terkait sarana prasarana untuk melakukan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil1', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil1', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila anda mengalami kendala terkait sarana dan prasarana, maka jelaskan kendala yang anda alami!</label>
                        {!! Form::textarea('isi1', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda tidak mengalami kendala terkait permintaan data ke auditee selama pelaksanaan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil2', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil2', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila terdapat kendala terkait permintaan data ke auditee selama pelaksanaan kegiatan audit dan konsultasi, maka kendala apa yang anda alami?</label>
                        {!! Form::textarea('isi2', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah data yang diberikan auditee sudah sesuai dengan apa yang diminta oleh auditor? (dilihat dari segi kelengkapan data)</label>
                        <div class="input-group">
                            {!! Form::radio('pil3', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil3', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah profile risk auditee sudah tepat sehingga sasaran kegiatan audit dan konsultasi tepat sasaran?</label>
                        <div class="input-group">
                            {!! Form::radio('pil4', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil4', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda tidak mengalami kendala mengenai penggunaan eRBAS selama pelaksanaan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil5', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil5', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila terdapat kendala mengenai penggunaan eRBAS selama pelaksanaan kegiatan audit dan konsultasi, maka kendala apa yang anda alami?</label>
                        {!! Form::textarea('isi3', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah tidak terdapat kendala terkait pelaksanaan uji petik?</label>
                        <div class="input-group">
                            {!! Form::radio('pil6', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil6', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila terdapat kendala terkait pelaksanaan uji petik, maka kendala apa yang anda alami?</label>
                        {!! Form::textarea('isi4', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah auditee kooperatif selama pelaksanaan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil7', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil7', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila auditee tidak kooperatif selama pelaksanaan kegiatan audit dan konsultasi, maka jelaskan bentuk ketidakkooperatifan auditee!</label>
                        {!! Form::textarea('isi5', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi jumlah SDM)</label>
                        <div class="input-group">
                            {!! Form::radio('pil8', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil8', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi kemampuan SDM)</label>
                        <div class="input-group">
                            {!! Form::radio('pil9', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil9', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah tidak terdapat kendala terkait pencarian hotel selama pelaksanaan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil10', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil10', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila anda mengalami kendala terkait pencarian hotel selama kegiatan audit dan konsultasi, maka jelaskan kendala yang anda alami!</label>
                        {!! Form::textarea('isi6', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah auditee tidak sulit ditemui selama kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil11', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil11', 'Tidak') !!} Tidak
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