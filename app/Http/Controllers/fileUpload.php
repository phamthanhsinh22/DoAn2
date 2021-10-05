<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class fileUpload extends Controller
{
    public function getFile(){
        return view('File.uploadFile');;
    }
    public function postFile(Request $req){
        $req->validate([
        'file' => 'required|mimes:png,mp4,jpg,jpeg'
        ]);

        $fileModel = new File;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }
}
