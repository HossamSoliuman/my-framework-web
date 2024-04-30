<?php

namespace App\Http\Controllers;

use App\Models\TempFile;
use Illuminate\Http\Request;
use App\Traits\ManagesFiles;

class TestController extends Controller
{
    use ManagesFiles;
    public function index()
    {
        return view('test');
    }
    public function upload(Request $request)
    {
        $path = $this->moveTempFile($request->file, 'avatars');
        return $path;
    }


    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $date = time();
            $fileName = str_replace(' ', '_', $originalName) . '_' . $date . '.' . $file->extension();
            $file->storeAs('temp', $fileName);
            TempFile::create([
                'file_name' => $fileName
            ]);
            return $fileName;
        }
    }
}
