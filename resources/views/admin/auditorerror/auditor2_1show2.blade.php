@extends('layouts.headerfooteradmin')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="{{route('adminhome')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Survei Kepuasan Auditee</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('adminauditee1')}}">
                        <i class="fa fa-circle-o"></i>
                        Identitas
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee2')}}">
                        <i class="fa fa-circle-o"></i>
                        Persepsi Mnjmn Terhadap SPI
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee3')}}">
                        <i class="fa fa-circle-o"></i>
                        Staff Audit Internal
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee4')}}">
                        <i class="fa fa-circle-o"></i>
                        Ruang Lingkup Pekerjaan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee5')}}">
                        <i class="fa fa-circle-o"></i>
                        Pelaksanaan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee6')}}">
                        <i class="fa fa-circle-o"></i>
                        Proses dan Laporan Audit
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditee7')}}">
                        <i class="fa fa-circle-o"></i>
                        Nilai Tambah
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Kegiatan Audit</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('adminauditor11')}}">
                        <i class="fa fa-circle-o"></i>
                        Identitas
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor12')}}">
                        <i class="fa fa-circle-o"></i>
                        Pertanyaan Terbuka
                    </a>
                </li>
            </ul>
        </li>

        <li class="active treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Semester</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
                    <a href="{{route('adminauditor21')}}">
                        <i class="fa fa-circle-o"></i>
                        Identitas
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor22')}}">
                        <i class="fa fa-circle-o"></i>
                        Pelatihan dan Kompetensi
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor23')}}">
                        <i class="fa fa-circle-o"></i>
                        Komitmen Organisasional
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor24')}}">
                        <i class="fa fa-circle-o"></i>
                        Komitmen Profesional
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor25')}}">
                        <i class="fa fa-circle-o"></i>
                        Motivasi Kerja
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor29')}}">
                        <i class="fa fa-circle-o"></i>
                        Gaya Kepemimpinan Konsideran
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor210')}}">
                        <i class="fa fa-circle-o"></i>
                        Gaya Kepemimpinan Structure
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor211')}}">
                        <i class="fa fa-circle-o"></i>
                        Time Budget
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor212')}}">
                        <i class="fa fa-circle-o"></i>
                        Kinerja
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor213')}}">
                        <i class="fa fa-circle-o"></i>
                        Turnover Intention
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor214')}}">
                        <i class="fa fa-circle-o"></i>
                        Promosi
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor215')}}">
                        <i class="fa fa-circle-o"></i>
                        Komunikasi
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor216')}}">
                        <i class="fa fa-circle-o"></i>
                        Co Worker
                    </a>
                </li>
                <li>
                    <a href="{{route('adminauditor28')}}">
                        <i class="fa fa-circle-o"></i>
                        Keluhan dan Saran
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Laporan Hasil Survei</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        Survei Kepuasan Auditee
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('upAuditee')}}">
                                <i class="fa fa-cloud-upload"></i>
                                Upload
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        SKKA per PO
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('upAuditor1')}}">
                                <i class="fa fa-cloud-upload"></i>
                                Upload
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        SKKA per Semester
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('upAuditor2')}}">
                                <i class="fa fa-cloud-upload"></i>
                                Upload
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Hasil Jawaban Kuisioner SKKA Per Semester</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Identitas Auditor</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>ID Auditor</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan Terakhir</th>
                                    <th>Pengalaman Kerja</th>
                                    <th>Kantor SPI PLN Regional</th>
                                    <th>Semester</th>
                                    <th>Tahun</th>
                                </tr>
                                <tr>
                                    <td>{{$user->username}}</td>
                                    <td>{{$data1->jenis_kelamin}}</td>
                                    <td>{{$data1->jabatan_terakhir}}</td>
                                    <td>{{$data1->pengalaman_kerja}} Tahun</td>
                                    <td>{{$data1->unit}}</td>
                                    <td>{{$data1->semester}}</td>
                                    <td>{{$data1->tahun}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Jawaban Kuisioner</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Pernyataan</th>
                                    <th>Jawaban</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Saya diberikan kesempatan oleh PLN untuk melanjutkan jenjang pendidikan.</td>
                                    <td>{{$data2->jenjang_pendidikan}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saya merasa pelatihan khusus untuk penugasan kegiatan audit dan konsultasi sudah memadai.</td>
                                    <td>{{$data2->pelatihan_khusus}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Saya diberikan kesempatan oleh PLN untuk mengikuti berbagai seminar diluar PLN.</td>
                                    <td>{{$data2->seminar_diluar_pln}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Saya dapat menyelesaikan masalah dalam kegiatan audit dan konsultasi dengan kemampuan yang saya miliki.</td>
                                    <td>{{$data2->kemampuan_masalah}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Saya memiliki kemampuan untuk mengkomunikasikan rekomendasi hasil kegiatan audit dan konsultasi.</td>
                                    <td>{{$data2->kemampuan_rekomendasi}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Saya memiliki kemampuan kerjasama yang baik dalam tim.</td>
                                    <td>{{$data2->kerjasama_tim}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Saya merasa terikat secara emosional dengan PLN.</td>
                                    <td>{{$data3->emosional}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>PLN sangat berarti bagi saya.</td>
                                    <td>{{$data3->berarti}}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Saya merasa menjadi bagian dari PLN.</td>
                                    <td>{{$data3->bagian}}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Saya merasa masalah PLN seperti masalah saya.</td>
                                    <td>{{$data3->masalah_pln}}</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Saya mau berusaha diatas batas normal untuk memajukan PLN.</td>
                                    <td>{{$data3->batas_normal}}</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Saat ini saya tetap tinggal di PLN karena komitmen terhadap PLN.</td>
                                    <td>{{$data3->tinggal_komitmen}}</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Alasan utama saya tetap bekerja di PLN adalah karena loyalitas terhadap PLN.</td>
                                    <td>{{$data3->loyalitas}}</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Saya ingin melakukan usaha yang luar biasa melebihi yang diharapkan demi kesuksesan/keberhasilan Auditor Internal PLN.</td>
                                    <td>{{$data4->luar_biasa_kesuksesan_ai}}</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Saya bangga memberitahu orang lain bahwa saya adalah Auditor Internal PLN.</td>
                                    <td>{{$data4->saya_ai_pln}}</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Menjadi Auditor Internal PLN sangat menginspirasi saya untuk bekerja dengan sebaik-baiknya.</td>
                                    <td>{{$data4->inspirasi_kerja_terbaik}}</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Saya sangat peduli dengan perkembangan auditor internal di Indonesia.</td>
                                    <td>{{$data4->perkembangan_ai}}</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Bagi saya, menjadi Auditor Internal PLN adalah profesi terbaik dibandingkan profesi lainnya.</td>
                                    <td>{{$data4->ai_profesi_terbaik}}</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Saya selalu berusaha semaksimal mungkin agar mendapatkan hasil terbaik.</td>
                                    <td>{{$data5->maksimal_hasil_terbaik}}</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Saya selalu menyelesaikan pekerjaan yang diberikan atasan tepat waktu.</td>
                                    <td>{{$data5->tugas_tepat_waktu}}</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Saya berusaha lebih dekat dengan atasan agar komunikasi berjalan baik.</td>
                                    <td>{{$data5->dekat_ke_atasan}}</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Saya mendapatkan saran yang membangun untuk mendapatkan hasil kerja maksimal.</td>
                                    <td>{{$data5->saran_membangun}}</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Saya selalu berusaha untuk menjadi lebih baik daripada rekan kerja saya.</td>
                                    <td>{{$data5->terbaik_daripada_rekan}}</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Hasil evaluasi kerja saya selalu memuaskan.</td>
                                    <td>{{$data5->evaluasi_selalu_memuaskan}}</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Pencapaian kerja saya di  tempat saya bekerja membuat orang respect kepada saya.</td>
                                    <td>{{$data5->respect_pada_saya}}</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Saya selalu berusaha menjaga hubungan baik dengan auditee.</td>
                                    <td>{{$data5->hubungan_baik_auditee}}</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Saya tidak pernah melanggar peraturan atau kebijakan untuk menyelesaikan suatu penugasan.</td>
                                    <td>{{$data6->tidak_melanggar_aturan}}</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Saya menerima beberapa permintaan untuk melakukan suatu pekerjaan yang saling bersesuaian satu sama lain.</td>
                                    <td>{{$data6->kesesuaian_tugas}}</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Saya melakukan hal-hal yang dapat diterima oleh seseorang ataupun orang lain.</td>
                                    <td>{{$data6->diterima_wajar}}</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Saya melaksanakan hal-hal yang tidak harus dilakukan seperti biasanya.</td>
                                    <td>{{$data6->tugas_tidak_wajar}}</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Saya menerima penugasan didukung material dan sumber daya yang cukup untuk melaksanakannya.</td>
                                    <td>{{$data6->sd_cukup}}</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Saya merasa puas dengan gaji saya saat ini.</td>
                                    <td>{{$data7->puas_gaji}}</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Saya sangat menyukai pekerjaan saya saat ini.</td>
                                    <td>{{$data7->suka_pekerjaan}}</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Saya merasa tidak ingin pindah dari pekerjaan saya saat ini.</td>
                                    <td>{{$data7->tidak_ingin_pindah}}</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Saya lebih menyukai pekerjaan saya daripada teman lainnya.</td>
                                    <td>{{$data7->suka_daripada_teman}}</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Saya merasa yakin akan segera dipromosikan.</td>
                                    <td>{{$data7->promosi}}</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Saya puas terhadap penilaian kinerja Auditor Internal PLN.</td>
                                    <td>{{$data7->puas_penilaian_kinerja_ai}}</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Saya puas terhadap pengelolaan karir Auditor Internal PLN. </td>
                                    <td>{{$data7->puas_pengelolaan_karir_ai}}</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Saya puas terhadap sistem rotasi pegawai di PLN. </td>
                                    <td>{{$data7->rotasi_pegawai_ai}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                        <div class="alert alert-warning" align="center">
                            User ini belum mengisi kuisioner keluhan dan saran
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
