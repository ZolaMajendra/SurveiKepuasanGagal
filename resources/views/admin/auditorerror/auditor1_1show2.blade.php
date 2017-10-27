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

        <li class="active treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>SKKA per Kegiatan Audit</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
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
            <h1>Hasil Jawaban Kuisioner SKKA Per Kegiatan Audit</h1>
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
                                    <th>Unit PLN</th>
                                    <th>Tahun</th>
                                </tr>
                                <tr>
                                    <td>{{$user->username}}</td>
                                    <td>{{$data1->jenis_kelamin}}</td>
                                    <td>{{$data1->jabatan_terakhir}}</td>
                                    <td>{{$data1->pengalaman_kerja}} Tahun</td>
                                    <td>{{$data1->unit}}</td>
                                    <td>{{$data1->up_audit}}</td>
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
                                    <td>Apakah tidak terdapat kendala mengenai penggunaan eRBAS sebelum pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data2->erbas_sblm_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Apakah tidak terdapat kendala terkait permintaan data ke auditee sebelum pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data2->minta_data_sblm_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Apakah anda tidak mengalami masalah keuangan untuk melaksankan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data2->mslh_uang_sblm_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Apakah anda puas terkait ketepatan waktu mngenai penerimaan uang lump sum SPPD sebelum keberangkatan anda untuk melakukan kagiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data2->sppd_sblm_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Apakah pembagian ruang lingkup kegiatan audit dan konsultasi telah sesuai dengan kemampuan yang anda miliki?</td>
                                    <td align="center">{{$data2->pembagian_ruang_lingkup_sblm_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Apakah anda tidak mengalami kesulitan dalam penentuan kriteria ruang lingkup kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data2->penentuan_kriteria_sblm_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Apakah anda tidak terbebani dengan pembagian ruang lingkup untuk kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data2->ruang_lingkup_terbebani_sblm_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Apakah penentuan ruang lingkup audit sudah spesifik sehingga tidak menyebabkan auditor kurang fokus selama pelaksanaan audit?</td>
                                    <td align="center">{{$data2->ruang_lingkup_spesifik_sblm_audit}}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Dalam pembuatan PKA, apakah profile risk area sudah tersedia?</td>
                                    <td align="center">{{$data2->profile_risk_sblm_audit}}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Apakah ketua tim sudah melakukan knowledge sharing sebelum pelaksanaan kegiatan audit dan konsultasi yang berhubungan dengan ruang lingkup pemeriksaaan?</td>
                                    <td align="center">{{$data2->knowledge_sharing}}</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Apakah APQC sudah mencakup semua level aktifitas proses bisnis PLN?</td>
                                    <td align="center">{{$data2->apqc_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Apakah anda tidak mengalami kendala terkait sarana prasarana untuk melakukan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data3->sarana_selama_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Apakah anda tidak mengalami kendala terkait permintaan data ke auditee selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data3->minta_data_selama_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Apakah data yang diberikan auditee sudah sesuai dengan apa yang diminta oleh auditor? (dilihat dari segi kelengkapan data)</td>
                                    <td align="center">{{$data3->kelengkapan_data_selama_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Apakah profile risk auditee sudah tepat sehingga sasaran kegiatan audit dan konsultasi tepat sasaran? </td>
                                    <td align="center">{{$data3->profile_risk_selama_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Apakah anda tidak mengalami kendala mengenai penggunaan eRBAS selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data3->erbas_selama_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Apakah tidak terdapat kendala terkait pelaksanaan uji petik?</td>
                                    <td align="center">{{$data3->uji_petik_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Apakah auditee kooperatif selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data3->kooperatif_selama_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi jumlah SDM)</td>
                                    <td align="center">{{$data3->jumlah_sdm}}</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi kemampuan SDM)</td>
                                    <td align="center">{{$data3->kemampuan_sdm}}</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Apakah tidak terdapat kendala terkait pencarian hotel selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data3->hotel_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Apakah auditee tidak sulit ditemui selama kegiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data3->sulit_ditemui_selam_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Apakah tidak terdapat kendala mengenai penggunaan eRBAS untuk pemantuan tindak lanjut rekomendasi??</td>
                                    <td align="center">{{$data4->erbas_setelah_audit_pilihan}}</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Apakah rekomendasi anda ditindaklanjuti oleh auditee?</td>
                                    <td align="center">{{$data4->rekomendasi}}</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Apakah evidence yang dibuat oleh auditee mengenai tindak lanjut rekomendasi telah sesuai?</td>
                                    <td align="center">{{$data4->evidence}}</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Apakah anda puas terkait ketepatan waktu mengenai penerimaan uang reimburse SPPD setelah anda melakukan kagiatan audit dan konsultasi?</td>
                                    <td align="center">{{$data4->sppd_setelah_audit}}</td>
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
                            <div class="box-title">Isian</div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Isian</th>
                                    <th>Jawaban</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Apakah tidak terdapat kendala mengenai penggunaan eRBAS sebelum pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data2->erbas_sblm_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Apakah tidak terdapat kendala terkait permintaan data ke auditee sebelum pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data2->minta_data_sblm_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Apakah anda tidak mengalami masalah keuangan untuk melaksankan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data2->mslh_uang_sblm_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Apakah pembagian ruang lingkup kegiatan audit dan konsultasi telah sesuai dengan kemampuan yang anda miliki?</td>
                                    <td>{{$data2->pembagian_ruang_lingkup_sblm_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Apakah anda tidak mengalami kesulitan dalam penentuan kriteria ruang lingkup kegiatan audit dan konsultasi?</td>
                                    <td>{{$data2->penentuan_kriteria_sblm_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Apakah anda tidak terbebani dengan pembagian ruang lingkup untuk kegiatan audit dan konsultasi?</td>
                                    <td>{{$data2->ruang_lingkup_terbebani_sblm_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Apakah APQC sudah mencakup semua level aktifitas proses bisnis PLN?</td>
                                    <td>{{$data2->apqc_isian}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Apakah anda tidak mengalami kendala terkait sarana prasarana untuk melakukan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data3->sarana_selama_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Apakah anda tidak mengalami kendala terkait permintaan data ke auditee selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data3->minta_data_selama_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Apakah anda tidak mengalami kendala mengenai penggunaan eRBAS selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data3->erbas_selama_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Apakah tidak terdapat kendala terkait pelaksanaan uji petik?</td>
                                    <td>{{$data3->uji_petik_isian}}</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Apakah auditee kooperatif selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data3->kooperatif_selama_audit_isian}}</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Apakah tidak terdapat kendala terkait pencarian hotel selama pelaksanaan kegiatan audit dan konsultasi?</td>
                                    <td>{{$data3->hotel_isian}}</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Apakah tidak terdapat kendala mengenai penggunaan eRBAS untuk pemantuan tindak lanjut rekomendasi?</td>
                                    <td>{{$data4->erbas_setelah_audit_isian}}</td>
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
