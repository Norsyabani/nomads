<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;
use Storage;
use Auth;
use DB;
use Alert;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->paginate(4);
        return view('pages.home', [
            'items' => $items
        ]);

    }
    
    public function profile(Request $request) {
        $avatars = DB::table('users')->get('avatar');

        return view('pages.profile', [
            'avatars' => $avatars
        ]);
    }

    public function uploadAvatar(Request $request) {
        if($request->hasFile('image')) {
            $sampleName = 'userAvatar';
            $filename = $sampleName . '-' . date('Y-m-d-H_i_s') . '.' . $request->image->getClientOriginalExtension();
            $this->deleteOldImage();
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);
        }

        Alert::success('Success', 'Berhasil Mengubah Profile Image');

        return redirect()->back();
    }

    public function removeAvatar(Request $request) {

        $this->deleteOldImage();
        auth()->user()->update(['avatar' => 'avatar.png']);

        Alert::success('Success', 'Berhasil Menghapus Profile Image');

        return redirect()->back();
    }

    protected function deleteOldImage() {
        if(auth()->user()->avatar) {
            Storage::delete('/public/images/' . auth()->user()->avatar);
        }
    }
}
