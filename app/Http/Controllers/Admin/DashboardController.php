<?php

namespace App\Http\Controllers\Admin;

use App\Exports\InquiryExport;
use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use DataTables;
use Excel;

class DashboardController extends Controller
{
    public function index() {
        return redirect()->route('admin.inquiries');
        return view('admin.dashboard');
    }

    public function inquiries() {
        return view('admin.inquiry.index');
    }

    public function inquiries_list() {
        $data = Inquiry::latest()->get();
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="/admin/inquiry/'. $row->id .'/delete" class="edit btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })

                ->rawColumns(['action'])

                ->make(true);
    }

    public function delete_inquiry($id) {
        $inquiry = Inquiry::find($id);
        if($inquiry) {
            $inquiry->delete();
        }
        return redirect()->route('admin.inquiries');
    }

    public function export_inquiries()
    {
        return Excel::download(new InquiryExport, 'inquieries.xlsx');
    }
}
