<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use DataTables;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function inquiries() {
        return view('admin.inquiry.index');
    }

    public function inquiries_list() {
        $data = Inquiry::latest()->get();
        return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
    }

}
