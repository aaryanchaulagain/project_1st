<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\Testimonial; // <- Make sure this is imported
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Blog;

class AdminController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_id', $admin->id); // store admin in session

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Show dashboard with contacts
   public function dashboard()
{
    // Check admin login
    if (!Session::has('admin_id')) {
        return redirect()->route('admin.login.form');
    }

    // Fetch data
    $contacts = Contact::orderBy('created_at', 'desc')->get();
    $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
    $blogs = Blog::latest()->get();

    return view('admin.dashboard', compact('contacts', 'testimonials', 'blogs'));

}
    // Logout
    public function logout()
    {
        Session::forget('admin_id');

        return redirect()->route('admin.login.form');
    }

    public function deleteContact($id)
    {
        if (! Session::has('admin_id')) {
            return redirect()->route('admin.login.form');
        }

        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Contact deleted successfully!');
        }

        return redirect()->route('admin.dashboard')->with('error', 'Contact not found!');
    }
}
