<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackage;
use App\Transaction;
use Storage;
use Auth;
use DB;
use Alert;

class DashboardController extends Controller
{
    public function index(Request $request) {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count()
        ]);
    }

    public function profile(Request $request) {

        $avatars = DB::table('users')->get('avatar');

        return view('pages.admin.profile', [
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
