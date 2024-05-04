<?php

namespace App\Http\Controllers\Web;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $data['user'] = Auth::user();
        return view('web.profile.index')->with($data);
    }

    public function deleteAccount( User $user)
    {
        try {
            $isDeleted = $user->delete();
            $msg = 'row deleted successfully';
        } catch (Exception $e) {
            $msg = 'can not delete this user';
        }
        session()->flash('msg', $msg);
        return redirect(url('/'));
    }
}
