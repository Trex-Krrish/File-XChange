<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('editor');
    }

    public function index()
    {
        $files = File::where('user_id', auth()->user()->id)->get()->sortByDesc('created_at');
        return view('manage-files', compact('files'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'file' => 'required|file|mimes:,pdf|max:50000',
            'title' => ['required', 'max:50'],
            'description' => ['required', 'max:255'],
            'semester' => ['required', 'max:50'],
            'subject' => ['required', 'max:50'],
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['file'] = $request->file('file')->store('files', 'public');
        $file = File::create($data);
        if ($file) {
            return redirect()->route('manage.files')->with('success', 'File uploaded successfully.');
        }

        return back()->with('error', 'File not uploaded.');
    }

    public function destroy(Request $request )
    {
        
        $file = File::find($request->delete);
        if(Auth::user()->id == $file->user_id){
            $file->delete();
            Storage::delete('public/'.$file->file);
            return redirect()->route('manage.files')->with('success', 'File deleted successfully.');
        }

        return back()->with('error', 'File not deleted.');
    }

    function editFile($id)
    {
        $file = File::find($id);
        if(Auth::user()->id == $file->user_id){
            return view('components.edit-file', compact('file'));
        }
        
        return back()->with('error', 'File not found.');
    }

    function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => ['required', 'max:50'],
            'description' => ['required', 'max:255'],
            'semester' => ['required', 'max:50'],
            'subject' => ['required', 'max:50'],
        ]);

        $file = File::find($id);
        if(Auth::user()->id == $file->user_id){
            $file->update($data);
            return redirect()->route('manage.files')->with('success', 'File updated successfully.');
        }

        return back()->with('error', 'File not updated.');
    }   
}
