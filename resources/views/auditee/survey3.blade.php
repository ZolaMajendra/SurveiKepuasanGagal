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
            <h1>Staff Audit Internal</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route' => ['survey3store', session()->get('simpanid')]]) !!}
        <section class="content">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="form-group">
                        <label>Auditor bersikap netral tanpa dipengaruhi tekanan atau permintaan pihak tertentu yang berkepentingan atas hasil pemeriksaaanya dan dapat bekerja sesuai keadaan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2a', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2a', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2a', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2a', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2a', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Dalam melaksanakan tugas, auditor tidak bermaksud untuk mencari-cari kesalahan auditee</label>
                        <div class="input-group">
                                <div class="input-group">
                                    {!! Form::radio('kategori2b', 'Sangat Setuju') !!} Sangat Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori2b', 'Setuju') !!} Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori2b', 'Kurang Setuju') !!} Kurang Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori2b', 'Tidak Setuju') !!} Tidak Setuju
                                </div>
                                <div class="input-group">
                                    {!! Form::radio('kategori2b', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                                </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor dapat mempertahankan kriteria (peraturan – peraturan perusahaan) yang berlaku</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2c', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2c', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2c', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2c', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2c', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor menggunakan pikiran yang logis dalam melakukan pemeriksaan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2d', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2d', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2d', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2d', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2d', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kegiatan audit bebas dari usaha-usaha manajemen (auditee) dalam menentukan atau menunjuk kegiatan yang diperiksa</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2e', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2e', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2e', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2e', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2e', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kegiatan audit bebas dari kepentingan pribadi maupun pihak lain untuk membatasi segala kegiatan pemeriksaan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2f', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2f', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2f', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2f', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2f', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pelaporan hasil audit bebas dari usaha pihak tertentu untuk mempengaruhi pertimbangan pemeriksa terhadap isi laporan pemeriksaan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2g', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2g', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2g', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2g', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2g', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor tidak menerima segala sesuatu dalam bentuk apapun yang bukan haknya</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2h', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2h', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2h', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2h', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2h', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor mempertimbangkan kepentingan perusahaan dan stakeholder</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2i', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2i', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2i', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2i', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2i', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor menjaga kerahasiaan data, informasi, dan dokumen</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2j', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2j', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2j', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2j', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2j', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor tidak mempertimbangkan keadaan seseorang/sekelompok orang atau suatu unit organisasi untuk membenarkan perbuatan melanggar ketentuan atau peraturan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2k', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2k', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2k', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2k', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2k', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor bertanggung jawab atas hasil pemeriksaannya dan jika diperlukan perbaikan dan penyempurnaan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2l', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2l', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2l', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2l', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2l', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Dalam menyusun rekomendasi, auditor berpegang teguh kepada ketentuan / peraturan yang berlaku dengan tetap mempertimbangkan agar rekomendasi dapat dilaksanakan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2m', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2m', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2m', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2m', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2m', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki rasa ingin tahu yang besar, berpikiran luas dan mampu menangani ketidakpastian</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2n', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2n', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2n', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2n', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2n', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor dapat menerima bahwa tidak ada solusi yang mudah, serta menyadari bahwa beberapa temuan dapat bersifat subyektif</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2o', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2o', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2o', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2o', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2o', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki pengetahuan tentang proses bisnis organisasi</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2p', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2p', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2p', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2p', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2p', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan untuk review analitis, menulis dan mempresentasikan laporan dengan baik</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2q', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2q', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2q', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2q', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2q', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan komunikasi yang baik dalam arti bebas dari kesalahan dan distorsi, dan didasarkan atas fakta</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2r', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2r', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2r', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2r', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2r', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan komunikasi yang obyektif berarti adil, tidak memihak, tidak berat sebelah, dan merupakan hasil dari pemikiran adil dan seimbang atas seluruh</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2s', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2s', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2s', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2s', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2s', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan komunikasi yang jelas berarti mudah dipahami dan logis, terhindar dari pemakaian istilah teknis yang tidak penting dan menyajikan seluruh</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2t', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2t', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2t', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2t', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2t', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan komunikasi yang ringkas berarti langsung pada masalahnya, dan  menghindari uraian yang tidak perlu, detail yang berlebihan, pengulangan, dan terlalu panjang</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2u', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2u', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2u', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2u', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2u', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan komunikasi yang konstruktif berarti memiliki sifat membantu  klien penugasan dan organisasi, dan tertuju pada upaya perbaikan yang diperlukan</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2v', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2v', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2v', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2v', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2v', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan komunikasi yang lengkap berarti tidak meninggalkan hal-hal penting bagi pengguna hasil penugasan dan telah mencakup seluruh informasi dan observasi signifikan dan relevan untuk mendukung  simpulan dan rekomendasi</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2w', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2w', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2w', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2w', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2w', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Auditor memiliki kemampuan komunikasi yang tepat waktu berarti bermanfaat dan bijaksana dengan mempertimbangkan tingkat signifikansi isu, sehingga  memungkinkan manajemen dapat melakukan tindakan koreksi yang tepat</label>
                        <div class="input-group">
                            <div class="input-group">
                                {!! Form::radio('kategori2x', 'Sangat Setuju') !!} Sangat Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2x', 'Setuju') !!} Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2x', 'Kurang Setuju') !!} Kurang Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2x', 'Tidak Setuju') !!} Tidak Setuju
                            </div>
                            <div class="input-group">
                                {!! Form::radio('kategori2x', 'Sangat tidak Setuju') !!} Sangat Tidak Setuju
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