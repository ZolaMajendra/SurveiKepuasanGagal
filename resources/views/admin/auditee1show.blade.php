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

        <li class="active treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Survei Kepuasan Auditee</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
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

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Semester</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
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
            <h1>Hasil Jawaban Survey Kepuasan Auditee</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Identitas Auditee</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>ID Auditee</th>
                                    <th>Unit PLN</th>
                                    <th>Tahun</th>
                                </tr>
                                <tr>
                                    <td>{{$user->username}}</td>
                                    <td>{{$data1->unit_pln}}</td>
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
                                    <td>SPI sebagai bagian yang penting dalam tim manajemen auditee / unit operasional</td>
                                    <td align="center">{{$data2->kategori1a}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SPI pada posisi yang independen dalam menjalankan tugasnya</td>
                                    <td align="center">{{$data2->kategori1b}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Auditor berhak mendapatkan kebebasan dan akses tidak terbatas terhadap catatan, informasi, lokasi, dan karyawan dalam ruang lingkup penugasan mereka</td>
                                    <td align="center">{{$data2->kategori1c}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kegiatan audit internal mempromosikan orientasi kualitas kerja yang baik pada auditee</td>
                                    <td align="center">{{$data2->kategori1d}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Auditor bersikap netral tanpa dipengaruhi tekanan atau permintaan pihak tertentu yang berkepentingan atas hasil pemeriksaaanya dan dapat bekerja sesuai keadaan sebenarnya (tidak menambah atau mengurangi fakta)</td>
                                    <td align="center">{{$data3->kategori1a}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dalam melaksanakan tugas, auditor tidak bermaksud untuk mencari-cari kesalahan auditee</td>
                                    <td align="center">{{$data3->kategori2b}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Auditor dapat mempertahankan kriteria (peraturan – peraturan perusahaan) yang berlaku</td>
                                    <td align="center">{{$data3->kategori2c}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Auditor menggunakan pikiran yang logis dalam melakukan pemeriksaan</td>
                                    <td align="center">{{$data3->kategori2d}}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Kegiatan audit bebas dari usaha-usaha manajemen (auditee) dalam menentukan atau menunjuk kegiatan yang diperiksa</td>
                                    <td align="center">{{$data3->kategori2e}}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Kegiatan audit bebas dari kepentingan pribadi maupun pihak lain untuk membatasi segala kegiatan pemeriksaan</td>
                                    <td align="center">{{$data3->kategori2f}}</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Pelaporan hasil audit bebas dari usaha pihak tertentu untuk mempengaruhi pertimbangan pemeriksa terhadap isi laporan pemeriksaan</td>
                                    <td align="center">{{$data3->kategori2g}}</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Auditor tidak menerima segala sesuatu dalam bentuk apapun yang bukan haknya</td>
                                    <td align="center">{{$data3->kategori2h}}</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Auditor mempertimbangkan kepentingan perusahaan dan stakeholder</td>
                                    <td align="center">{{$data3->kategori2i}}</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Auditor menjaga kerahasiaan data, informasi, dan dokumen</td>
                                    <td align="center">{{$data3->kategori2j}}</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Auditor tidak mempertimbangkan keadaan seseorang/sekelompok orang atau suatu unit organisasi untuk membenarkan perbuatan melanggar ketentuan atau peraturan perundang-undangan yang berlaku</td>
                                    <td align="center">{{$data3->kategori2k}}</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Auditor bertanggung jawab atas hasil pemeriksaannya dan jika diperlukan perbaikan dan penyempurnaan</td>
                                    <td align="center">{{$data3->kategori2l}}</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Dalam menyusun rekomendasi, auditor berpegang teguh kepada ketentuan / peraturan yang berlaku dengan tetap mempertimbangkan agar rekomendasi dapat dilaksanakan</td>
                                    <td align="center">{{$data3->kategori2m}}</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Auditor memiliki rasa ingin tahu yang besar, berpikiran luas dan mampu menangani ketidakpastian</td>
                                    <td align="center">{{$data3->kategori2n}}</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Auditor dapat menerima bahwa tidak ada solusi yang mudah, serta menyadari bahwa beberapa temuan dapat bersifat subyektif</td>
                                    <td align="center">{{$data3->kategori2o}}</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Auditor memiliki pengetahuan tentang proses bisnis organisasi</td>
                                    <td align="center">{{$data3->kategori2p}}</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Auditor memiliki kemampuan untuk review analitis, menulis dan mempresentasikan laporan dengan baik</td>
                                    <td align="center">{{$data3->kategori2q}}</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang baik dalam arti bebas dari kesalahan dan distorsi, dan didasarkan atas fakta</td>
                                    <td align="center">{{$data3->kategori2r}}</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang obyektif berarti adil, tidak memihak, tidak berat sebelah, dan merupakan hasil dari pemikiran adil dan seimbang atas seluruh fakta dan permasalahan yang relevan</td>
                                    <td align="center">{{$data3->kategori2s}}</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang jelas berarti mudah dipahami dan logis, terhindar dari pemakaian istilah teknis yang tidak penting dan menyajikan seluruh informasi signifikan dan relevan</td>
                                    <td align="center">{{$data3->kategori2t}}</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang ringkas berarti langsung pada masalahnya, dan  menghindari uraian yang tidak perlu, detail yang berlebihan,  pengulangan, dan terlalu panjang</td>
                                    <td align="center">{{$data3->kategori2u}}</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang konstruktif berarti memiliki sifat membantu  klien penugasan dan organisasi, dan tertuju pada upaya perbaikan  yang diperlukan</td>
                                    <td align="center">{{$data3->kategori2v}}</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang lengkap berarti tidak meninggalkan hal-hal penting bagi pengguna hasil penugasan dan telah mencakup seluruh informasi dan observasi signifikan dan relevan untuk mendukung  simpulan dan rekomendasi</td>
                                    <td align="center">{{$data3->kategori2w}}</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang tepat waktu berarti bermanfaat dan bijaksana dengan mempertimbangkan tingkat signifikansi isu, sehingga  memungkinkan manajemen dapat melakukan tindakan koreksi yang tepat</td>
                                    <td align="center">{{$data3->kategori2x}}</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Pemilihan area atau topik yang penting untuk diaudit sudah tepat</td>
                                    <td align="center">{{$data4->kategori3a}}</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Auditor mempertimbangkan saran dalam menentukan area atau topik sesuai dengan kebutuhan perbaikan kinerja operasional unit</td>
                                    <td align="center">{{$data4->kategori3b}}</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Pemberitahuan pra-audit terkait maksud dan lingkup penugasan sudah cukup jelas dan dapat dipahami</td>
                                    <td align="center">{{$data4->kategori3c}}</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Auditor sudah mempertimbangkan tanggapan auditee tentang area of improvement yang ditemukan dan rekomendasi yang akan diberikan saat exit meeting</td>
                                    <td align="center">{{$data4->kategori3d}}</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Auditor menyertakan surat tugas dalam pelaksanaan audit</td>
                                    <td align="center">{{$data5->kategori4a}}</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Auditor menyertakan atau menunjukkan surat permintaan data / dokumen dalam meminta data / dokumen</td>
                                    <td align="center">{{$data5->kategori4b}}</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Auditor melaksanakan final mapping end to end dengan auditee</td>
                                    <td align="center">{{$data5->kategori4c}}</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Auditor menyampaikan secara lengkap dan jelas kegiatan audit pada entry meeting</td>
                                    <td align="center">{{$data5->kategori4d}}</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Auditor menyampaikan secara lengkap dan jelas laporan hasil audit pada exit meeting</td>
                                    <td align="center">{{$data5->kategori4e}}</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Auditor memonitoring tindak lanjut atas rekomendasi yang diberikan</td>
                                    <td align="center">{{$data5->kategori4f}}</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Auditor membeikan umpan balik kepada auditee atas isu – isu yang muncul</td>
                                    <td align="center">{{$data6->kategori5a}}</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Waktu pelaksanaan audit berjalan dengan efektif</td>
                                    <td align="center">{{$data6->kategori5b}}</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Laporan yang dihasilkan akurat, lengkap, objektif, meyakinkan, jelas, ringkas, bebas dari bahasa atau istilah-istilah yang menimbulkan multi  tafsir, serta tepat waktu</td>
                                    <td align="center">{{$data6->kategori5b}}</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Laporan mengemukakan penjelasan atau tanggapan auditee tentang hasil audit</td>
                                    <td align="center">{{$data6->kategori5c}}</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Laporan hasil audit memuat temuan dan simpulan hasil audit secara objektif, serta rekomendasi yang konstruktif</td>
                                    <td align="center">{{$data6->kategori5d}}</td>
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
                            <div class="box-title">Jawaban Nilai Tambah</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>Komentar Tentang Layanan Audit yang Belum Optimal</th>
                                    <th>Komentar Tentang Layanan Audit yang Tidak Perlu Dilakukan</th>
                                    <th>Komentar Bebas</th>
                                </tr>
                                <tr>
                                    <td>{{$data7->nilaia}}</td>
                                    <td>{{$data7->nilaib}}</td>
                                    <td>{{$data7->nilaic}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection