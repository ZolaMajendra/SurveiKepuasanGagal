<?php

namespace App\Http\Controllers;

use App\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DeleteForUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function destFileAuditee($id) {
        $file = UploadFile::where('id_berkas', $id)->firstOrFail();
        $filename = $file->file_name;
        $path = storage_path('app/data/');

        File::delete($path . $filename);
        DB::delete('delete from berkas where id_berkas = ?', [$id]);

        return redirect()->route('downAuditee');
    }

    public function destFileAuditorperpo($id) {
        $file = UploadFile::where('id_berkas', $id)->firstOrFail();
        $filename = $file->file_name;
        $path = storage_path('app/data/');

        File::delete($path . $filename);
        DB::delete('delete from berkas where id_berkas = ?', [$id]);

        return redirect()->route('downAuditor1');
    }

    public function destFileAuditorpersmt($id) {
        $file = UploadFile::where('id_berkas', $id)->firstOrFail();
        $filename = $file->file_name;
        $path = storage_path('app/data/');

        File::delete($path . $filename);
        DB::delete('delete from berkas where id_berkas = ?', [$id]);

        return redirect()->route('downAuditor2');
    }
}
