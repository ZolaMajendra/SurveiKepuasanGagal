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
                <li class="active">
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
            <h1>Staff Audit Internal</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Pernyataan</th>
                                    <th>Sangat Setuju</th>
                                    <th>Setuju</th>
                                    <th>Kurang Setuju</th>
                                    <th>Tidak Setuju</th>
                                    <th>Sangat Tidak Setuju</th>
                                    <th>Skor</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Auditor bersikap netral tanpa dipengaruhi tekanan atau permintaan pihak tertentu yang berkepentingan atas hasil pemeriksaaanya dan dapat bekerja sesuai keadaan sebenarnya (tidak menambah atau mengurangi fakta)</td>
                                    <td>{{$k2a['k2ass']}}</td>
                                    <td>{{$k2a['k2as']}}</td>
                                    <td>{{$k2a['k2aks']}}</td>
                                    <td>{{$k2a['k2ats']}}</td>
                                    <td>{{$k2a['k2asts']}}</td>
                                    <td>{{(($k2a['k2ass']*5)+($k2a['k2as']*4)+($k2a['k2aks']*3)+($k2a['k2ats']*2)+($k2a['k2asts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dalam melaksanakan tugas, auditor tidak bermaksud untuk mencari-cari kesalahan auditee</td>
                                    <td>{{$k2b['k2bss']}}</td>
                                    <td>{{$k2b['k2bs']}}</td>
                                    <td>{{$k2b['k2bks']}}</td>
                                    <td>{{$k2b['k2bts']}}</td>
                                    <td>{{$k2b['k2bsts']}}</td>
                                    <td>{{(($k2b['k2bss']*5)+($k2b['k2bs']*4)+($k2b['k2bks']*3)+($k2b['k2bts']*2)+($k2b['k2bsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Auditor dapat mempertahankan kriteria (peraturan – peraturan perusahaan) yang berlaku</td>
                                    <td>{{$k2c['k2css']}}</td>
                                    <td>{{$k2c['k2cs']}}</td>
                                    <td>{{$k2c['k2cks']}}</td>
                                    <td>{{$k2c['k2cts']}}</td>
                                    <td>{{$k2c['k2csts']}}</td>
                                    <td>{{(($k2c['k2css']*5)+($k2c['k2cs']*4)+($k2c['k2cks']*3)+($k2c['k2cts']*2)+($k2c['k2csts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Auditor menggunakan pikiran yang logis dalam melakukan pemeriksaan</td>
                                    <td>{{$k2d['k2dss']}}</td>
                                    <td>{{$k2d['k2ds']}}</td>
                                    <td>{{$k2d['k2dks']}}</td>
                                    <td>{{$k2d['k2dts']}}</td>
                                    <td>{{$k2d['k2dsts']}}</td>
                                    <td>{{(($k2d['k2dss']*5)+($k2d['k2ds']*4)+($k2d['k2dks']*3)+($k2d['k2dts']*2)+($k2d['k2dsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Kegiatan audit bebas dari usaha-usaha manajemen (auditee) dalam menentukan atau menunjuk kegiatan yang diperiksa</td>
                                    <td>{{$k2e['k2ess']}}</td>
                                    <td>{{$k2e['k2es']}}</td>
                                    <td>{{$k2e['k2eks']}}</td>
                                    <td>{{$k2e['k2ets']}}</td>
                                    <td>{{$k2e['k2ests']}}</td>
                                    <td>{{(($k2e['k2ess']*5)+($k2e['k2es']*4)+($k2e['k2eks']*3)+($k2e['k2ets']*2)+($k2e['k2ests']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kegiatan audit bebas dari kepentingan pribadi maupun pihak lain untuk membatasi segala kegiatan pemeriksaan</td>
                                    <td>{{$k2f['k2fss']}}</td>
                                    <td>{{$k2f['k2fs']}}</td>
                                    <td>{{$k2f['k2fks']}}</td>
                                    <td>{{$k2f['k2fts']}}</td>
                                    <td>{{$k2f['k2fsts']}}</td>
                                    <td>{{(($k2f['k2fss']*5)+($k2f['k2fs']*4)+($k2f['k2fks']*3)+($k2f['k2fts']*2)+($k2f['k2fsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Pelaporan hasil audit bebas dari usaha pihak tertentu untuk mempengaruhi pertimbangan pemeriksa terhadap isi laporan pemeriksaan</td>
                                    <td>{{$k2g['k2gss']}}</td>
                                    <td>{{$k2g['k2gs']}}</td>
                                    <td>{{$k2g['k2gks']}}</td>
                                    <td>{{$k2g['k2gts']}}</td>
                                    <td>{{$k2g['k2gsts']}}</td>
                                    <td>{{(($k2g['k2gss']*5)+($k2g['k2gs']*4)+($k2g['k2gks']*3)+($k2g['k2gts']*2)+($k2g['k2gsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Auditor tidak menerima segala sesuatu dalam bentuk apapun yang bukan haknya</td>
                                    <td>{{$k2h['k2hss']}}</td>
                                    <td>{{$k2h['k2hs']}}</td>
                                    <td>{{$k2h['k2hks']}}</td>
                                    <td>{{$k2h['k2hts']}}</td>
                                    <td>{{$k2h['k2hsts']}}</td>
                                    <td>{{(($k2h['k2hss']*5)+($k2h['k2hs']*4)+($k2h['k2hks']*3)+($k2h['k2hts']*2)+($k2h['k2hsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Auditor mempertimbangkan kepentingan perusahaan dan stakeholder</td>
                                    <td>{{$k2i['k2iss']}}</td>
                                    <td>{{$k2i['k2is']}}</td>
                                    <td>{{$k2i['k2iks']}}</td>
                                    <td>{{$k2i['k2its']}}</td>
                                    <td>{{$k2i['k2ists']}}</td>
                                    <td>{{(($k2i['k2iss']*5)+($k2i['k2is']*4)+($k2i['k2iks']*3)+($k2i['k2its']*2)+($k2i['k2ists']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Auditor menjaga kerahasiaan data, informasi, dan dokumen</td>
                                    <td>{{$k2j['k2jss']}}</td>
                                    <td>{{$k2j['k2js']}}</td>
                                    <td>{{$k2j['k2jks']}}</td>
                                    <td>{{$k2j['k2jts']}}</td>
                                    <td>{{$k2j['k2jsts']}}</td>
                                    <td>{{(($k2j['k2jss']*5)+($k2j['k2js']*4)+($k2j['k2jks']*3)+($k2j['k2jts']*2)+($k2j['k2jsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Auditor tidak mempertimbangkan keadaan seseorang/sekelompok orang atau suatu unit organisasi untuk membenarkan perbuatan melanggar ketentuan atau peraturan perundang-undangan yang berlaku</td>
                                    <td>{{$k2k['k2kss']}}</td>
                                    <td>{{$k2k['k2ks']}}</td>
                                    <td>{{$k2k['k2kks']}}</td>
                                    <td>{{$k2k['k2kts']}}</td>
                                    <td>{{$k2k['k2ksts']}}</td>
                                    <td>{{(($k2k['k2kss']*5)+($k2k['k2ks']*4)+($k2k['k2kks']*3)+($k2k['k2kts']*2)+($k2k['k2ksts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Auditor bertanggung jawab atas hasil pemeriksaannya dan jika diperlukan perbaikan dan penyempurnaan</td>
                                    <td>{{$k2l['k2lss']}}</td>
                                    <td>{{$k2l['k2ls']}}</td>
                                    <td>{{$k2l['k2lks']}}</td>
                                    <td>{{$k2l['k2lts']}}</td>
                                    <td>{{$k2l['k2lsts']}}</td>
                                    <td>{{(($k2l['k2lss']*5)+($k2l['k2ls']*4)+($k2l['k2lks']*3)+($k2l['k2lts']*2)+($k2l['k2lsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Dalam menyusun rekomendasi, auditor berpegang teguh kepada ketentuan / peraturan yang berlaku dengan tetap mempertimbangkan agar rekomendasi dapat dilaksanakan</td>
                                    <td>{{$k2m['k2mss']}}</td>
                                    <td>{{$k2m['k2ms']}}</td>
                                    <td>{{$k2m['k2mks']}}</td>
                                    <td>{{$k2m['k2mts']}}</td>
                                    <td>{{$k2m['k2msts']}}</td>
                                    <td>{{(($k2m['k2mss']*5)+($k2m['k2ms']*4)+($k2m['k2mks']*3)+($k2m['k2mts']*2)+($k2m['k2msts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Auditor memiliki rasa ingin tahu yang besar, berpikiran luas dan mampu menangani ketidakpastian</td>
                                    <td>{{$k2n['k2nss']}}</td>
                                    <td>{{$k2n['k2ns']}}</td>
                                    <td>{{$k2n['k2nks']}}</td>
                                    <td>{{$k2n['k2nts']}}</td>
                                    <td>{{$k2n['k2nsts']}}</td>
                                    <td>{{(($k2n['k2nss']*5)+($k2n['k2ns']*4)+($k2n['k2nks']*3)+($k2n['k2nts']*2)+($k2n['k2nsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Auditor dapat menerima bahwa tidak ada solusi yang mudah, serta menyadari bahwa beberapa temuan dapat bersifat subyektif</td>
                                    <td>{{$k2o['k2oss']}}</td>
                                    <td>{{$k2o['k2os']}}</td>
                                    <td>{{$k2o['k2oks']}}</td>
                                    <td>{{$k2o['k2ots']}}</td>
                                    <td>{{$k2o['k2osts']}}</td>
                                    <td>{{(($k2o['k2oss']*5)+($k2o['k2os']*4)+($k2o['k2oks']*3)+($k2o['k2ots']*2)+($k2o['k2osts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Auditor memiliki pengetahuan tentang proses bisnis organisasi</td>
                                    <td>{{$k2p['k2pss']}}</td>
                                    <td>{{$k2p['k2ps']}}</td>
                                    <td>{{$k2p['k2pks']}}</td>
                                    <td>{{$k2p['k2pts']}}</td>
                                    <td>{{$k2p['k2psts']}}</td>
                                    <td>{{(($k2p['k2pss']*5)+($k2p['k2ps']*4)+($k2p['k2pks']*3)+($k2p['k2pts']*2)+($k2p['k2psts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Auditor memiliki kemampuan untuk review analitis, menulis dan mempresentasikan laporan dengan baik</td>
                                    <td>{{$k2q['k2qss']}}</td>
                                    <td>{{$k2q['k2qs']}}</td>
                                    <td>{{$k2q['k2qks']}}</td>
                                    <td>{{$k2q['k2qts']}}</td>
                                    <td>{{$k2q['k2qsts']}}</td>
                                    <td>{{(($k2q['k2qss']*5)+($k2q['k2qs']*4)+($k2q['k2qks']*3)+($k2q['k2qts']*2)+($k2q['k2qsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang baik dalam arti bebas dari kesalahan dan distorsi, dan didasarkan atas fakta</td>
                                    <td>{{$k2r['k2rss']}}</td>
                                    <td>{{$k2r['k2rs']}}</td>
                                    <td>{{$k2r['k2rks']}}</td>
                                    <td>{{$k2r['k2rts']}}</td>
                                    <td>{{$k2r['k2rsts']}}</td>
                                    <td>{{(($k2r['k2rss']*5)+($k2r['k2rs']*4)+($k2r['k2rks']*3)+($k2r['k2rts']*2)+($k2r['k2rsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang obyektif berarti adil, tidak memihak, tidak berat sebelah, dan merupakan hasil dari pemikiran adil dan seimbang atas seluruh fakta dan permasalahan yang relevan</td>
                                    <td>{{$k2s['k2sss']}}</td>
                                    <td>{{$k2s['k2ss']}}</td>
                                    <td>{{$k2s['k2sks']}}</td>
                                    <td>{{$k2s['k2sts']}}</td>
                                    <td>{{$k2s['k2ssts']}}</td>
                                    <td>{{(($k2s['k2sss']*5)+($k2s['k2ss']*4)+($k2s['k2sks']*3)+($k2s['k2sts']*2)+($k2s['k2ssts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang jelas berarti mudah dipahami dan logis, terhindar dari pemakaian istilah teknis yang tidak penting dan menyajikan seluruh informasi signifikan dan relevan</td>
                                    <td>{{$k2t['k2tss']}}</td>
                                    <td>{{$k2t['k2ts']}}</td>
                                    <td>{{$k2t['k2tks']}}</td>
                                    <td>{{$k2t['k2tts']}}</td>
                                    <td>{{$k2t['k2tsts']}}</td>
                                    <td>{{(($k2t['k2tss']*5)+($k2t['k2ts']*4)+($k2t['k2tks']*3)+($k2t['k2tts']*2)+($k2t['k2tsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang ringkas berarti langsung pada masalahnya, dan  menghindari uraian yang tidak perlu, detail yang berlebihan,  pengulangan, dan terlalu panjang</td>
                                    <td>{{$k2u['k2uss']}}</td>
                                    <td>{{$k2u['k2us']}}</td>
                                    <td>{{$k2u['k2uks']}}</td>
                                    <td>{{$k2u['k2uts']}}</td>
                                    <td>{{$k2u['k2usts']}}</td>
                                    <td>{{(($k2u['k2uss']*5)+($k2u['k2us']*4)+($k2u['k2uks']*3)+($k2u['k2uts']*2)+($k2u['k2usts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang konstruktif berarti memiliki sifat membantu  klien penugasan dan organisasi, dan tertuju pada upaya perbaikan  yang diperlukan</td>
                                    <td>{{$k2v['k2vss']}}</td>
                                    <td>{{$k2v['k2vs']}}</td>
                                    <td>{{$k2v['k2vks']}}</td>
                                    <td>{{$k2v['k2vts']}}</td>
                                    <td>{{$k2v['k2vsts']}}</td>
                                    <td>{{(($k2v['k2vss']*5)+($k2v['k2vs']*4)+($k2v['k2vks']*3)+($k2v['k2vts']*2)+($k2v['k2vsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang lengkap berarti tidak meninggalkan hal-hal penting bagi pengguna hasil penugasan dan telah mencakup seluruh informasi dan observasi signifikan dan relevan untuk mendukung  simpulan dan rekomendasi</td>
                                    <td>{{$k2w['k2wss']}}</td>
                                    <td>{{$k2w['k2ws']}}</td>
                                    <td>{{$k2w['k2wks']}}</td>
                                    <td>{{$k2w['k2wts']}}</td>
                                    <td>{{$k2w['k2wsts']}}</td>
                                    <td>{{(($k2w['k2wss']*5)+($k2w['k2ws']*4)+($k2w['k2wks']*3)+($k2w['k2wts']*2)+($k2w['k2wsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Auditor memiliki kemampuan komunikasi yang tepat waktu berarti bermanfaat dan bijaksana dengan mempertimbangkan tingkat signifikansi isu, sehingga  memungkinkan manajemen dapat melakukan tindakan koreksi yang tepat</td>
                                    <td>{{$k2x['k2xss']}}</td>
                                    <td>{{$k2x['k2xs']}}</td>
                                    <td>{{$k2x['k2xks']}}</td>
                                    <td>{{$k2x['k2xts']}}</td>
                                    <td>{{$k2x['k2xsts']}}</td>
                                    <td>{{(($k2x['k2xss']*5)+($k2x['k2xs']*4)+($k2x['k2xks']*3)+($k2x['k2xts']*2)+($k2x['k2xsts']*1))/($k2a['k2acount']*5)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer" align="center">
                            <a href="{{ route('kat2Auditee') }}" class="btn btn-primary">Export to Excel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        {!! Charts::assets() !!}
                        <div class="box-body">
                            {!! $chart->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
