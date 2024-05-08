<?php
// Namespace and imports for the ProfileController
namespace App\Http\Controllers\Web;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

// ProfileController class handles user profile related actions
class ProfileController extends Controller
{
    // Display the user's profile
    public function index(){
        $data['user'] = Auth::user(); // Fetch the currently authenticated user
        return view('web.profile.index')->with($data); // Pass user data to the profile view
    }

    // Delete a user account
    public function deleteAccount(User $user)
    {
        try {
            $isDeleted = $user->delete(); // Attempt to delete the user
            $msg = 'row deleted successfully'; // Success message
        } catch (Exception $e) {
            $msg = 'can not delete this user'; // Failure message
        }
        session()->flash('msg', $msg); // Flash message to session
        return redirect(url('/')); // Redirect to homepage
    }
}
