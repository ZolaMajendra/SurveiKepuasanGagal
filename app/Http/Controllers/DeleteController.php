<?php

namespace App\Http\Controllers;

use App\auditee1;
use App\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function destroyAuditee($id) {
        DB::delete('delete from identitas_auditee where id_identitas_auditee = ?', [$id]);
        return redirect()->route('adminauditee1');
    }

    public function destroyAuditorperpo($id) {
        DB::delete('delete from identitas where id_identitas = ?', [$id]);
        return redirect()->route('adminauditor11');
    }

    public function destroyAuditorpersmt($id) {
        DB::delete('delete from identitaspersmt where id_identitas = ?', [$id]);
        return redirect()->route('adminauditor21');
    }

    public function delFileAuditee($id) {
        $file = UploadFile::where('id_berkas', $id)->firstOrFail();
        $filename = $file->file_name;
        $path = storage_path('app/data/');

        File::delete($path . $filename);
        DB::delete('delete from berkas where id_berkas = ?', [$id]);

        return redirect()->route('upAuditee');
    }

    public function delFileAuditorpo($id) {
        $file = UploadFile::where('id_berkas', $id)->firstOrFail();
        $filename = $file->file_name;
        $path = storage_path('app/data/');

        File::delete($path . $filename);
        DB::delete('delete from berkas where id_berkas = ?', [$id]);

        return redirect()->route('upAuditor1');
    }

    public function delFileAuditorsmt($id) {
        $file = UploadFile::where('id_berkas', $id)->firstOrFail();
        $filename = $file->file_name;
        $path = storage_path('app/data/');

        File::delete($path . $filename);
        DB::delete('delete from berkas where id_berkas = ?', [$id]);

        return redirect()->route('upAuditor2');
    }
}
