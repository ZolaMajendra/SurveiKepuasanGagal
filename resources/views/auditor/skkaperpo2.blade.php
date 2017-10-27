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
            <h1>Perencanaan Kegiatan Audit dan Konsultasi</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['skkaperpo1store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="form-group">
                        <label>Apakah tidak terdapat kendala mengenai penggunaan eRBAS selama perencanaan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil1', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil1', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila terdapat kendala mengenai penggunaan eRBAS sebelum pelaksanaan kegiatan audit dan konsultasi, maka kendala apa yang anda alami?</label>
                        {!! Form::textarea('isi1', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah tidak terdapat kendala terkait permintaan data ke auditee sebelum pelaksanaan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil2', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil2', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila terdapat kendala terkait permintaan data ke auditee sebelum pelaksanaan kegiatan audit dan konsultasi, maka kendala apa yang anda alami?</label>
                        {!! Form::textarea('isi2', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda tidak mengalami masalah keuangan untuk melaksankan kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil3', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil3', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila anda mengalami masalah keuangan, maka jelaskan dalam bentuk apa masalah yang anda alami!</label>
                        {!! Form::textarea('isi3', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda puas terkait ketepatan waktu mengenai penerimaan uang lump sum SPPD sebelum keberangkatan anda untuk melakukan kagiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil4', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil4', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah pembagian ruang lingkup kegiatan audit dan konsultasi telah sesuai dengan kemampuan yang anda miliki?</label>
                        <div class="input-group">
                            {!! Form::radio('pil5', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil5', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apablia pembagian ruang lingkup kegiatan audit dan konsultasi tidak sesuai dengan kemampuan yang anda miliki, maka jelaskan mengapa hal tersebut bisa terjadi?</label>
                        {!! Form::textarea('isi4', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda merasa kesulitan dalam penentuan kriteria ruang lingkup kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil6', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil6', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda tidak mengalami kesulitan dalam penentuan kriteria ruang lingkup kegiatan audit dan konsultasi?</label>
                        {!! Form::textarea('isi5', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah anda tidak terbebani dengan pembagian ruang lingkup untuk kegiatan audit dan konsultasi?</label>
                        <div class="input-group">
                            {!! Form::radio('pil7', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil7', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila anda terbebani dengan pembagian ruang lingkup untuk kegiatan audit dan konsultasi, maka jelaskan mengapa anda merasa terbebani!</label>
                        {!! Form::textarea('isi6', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
                    </div>

                    <div class="form-group">
                        <label>Apakah penentuan ruang lingkup audit sudah spesifik sehingga tidak menyebabkan auditor kurang fokus selama pelaksanaan audit?</label>
                        <div class="input-group">
                            {!! Form::radio('pil8', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil8', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Dalam pembuatan PKA, apakah profile risk area sudah ada?</label>
                        <div class="input-group">
                            {!! Form::radio('pil9', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil9', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah ketua tim sudah melakukan knowledge sharing sebelum pelaksanaan kegiatan audit dan konsultasi yang berhubungan dengan ruang lingkup pemeriksaan?</label>
                        <div class="input-group">
                            {!! Form::radio('pil10', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil10', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apakah APQC sudah mencakup semua level aktifitas proses bisnis PLN?</label>
                        <div class="input-group">
                            {!! Form::radio('pil11', 'Ya') !!} Ya
                        </div>
                        <div class="input-group">
                            {!! Form::radio('pil11', 'Tidak') !!} Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apabila APQC belum mencakup semua level aktivitas proses bisnis PLN, maka jelaskan level aktivitas proses bisnis PLN mana yang belum ada!</label>
                        {!! Form::textarea('isi7', null, ['class' => 'form-control']) !!}
                        <div class="input-group">Catatan: cukup anda jawab dengan tanda (-), apabila tidak terdapat kendala.</div>
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