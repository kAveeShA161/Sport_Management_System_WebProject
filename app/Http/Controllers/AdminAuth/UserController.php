<?php
namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index'); // Ensure this view exists
    }
}
?>