<?php
    namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Add your logic here. For example:
        return view('admin.users.index'); // Make sure this view exists
    }
}

?>