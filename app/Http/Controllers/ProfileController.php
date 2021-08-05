<?php

namespace App\Http\Controllers;
Use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
     $profile = Profile::orderBy('id')->paginate(5);
     
     return view ('profile.index', compact('profile'));
    }

    public function create()
    {
     
     return view ('profile.create');
    }
    public function store(Request $request)
     {
         // Validate the request...
         $request->validate([
          'nama' => 'required|unique:profile|max:255',
          'tgl' => 'required',
          'jenis' => 'required',
          'alamat' => 'required',
          'no_tlp' => 'required|numeric',
          'email' => 'required',
      ]);
 
         $profile = new Profile;
 
         $profile->nama = $request->nama;
         $profile->tgl = $request->tgl;
         $profile->jens = $reqest->jenis;
         $profile->alamt = $requst->alamat;
         $profile->notlp = $equest->no_tlp;
         $profile->email = $request->email;
 
         $profile->save();
 
         return redirect('/');
 
    }
    public function show($id)
    {
       $profile = Profile::where('id',$id)->first();
       return view('profile.show', ['profile' => $profile]);
    }
    public function edit($id)
    {
       $profile = Profile::where('id',$id)->first();
       return view('profile.edit', ['profile' => $profile]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
         'nama' => 'required|unique:profile|max:255',
         'tgl' => 'required',
         'jenis' => 'required',
         'alamat' => 'required',
         'no_tlp' => 'required|numeric',
         'email' => 'required',
        ]);
   
         profile::find($id)->update([
            'nama' => $request->nama,
            'tgl' => $request->tgl,
            'jenis' => $request->jenis,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email
         ]);
   
         return redirect ('/');
    }
    public function destroy($id)
    {
       profile::find($id)->delete();
       return redirect ('/');
    }

    public function profile($ke)
    {
        return view ('profile', ['ke' => $ke]);
    }
}
