<?php

namespace App\Http\Controllers;

use App\Mail\InquiryThanks;
use App\Mail\NewInquiry;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        $states = config('state.states');
        return view('dashboard', compact('states'));
    }

    public function inquiry_now(Request $request) {
        $this->validate($request, [
            "company" => "required",
            "name" => "required",
            "business" => "required",
            "email" => "required",
            "phone" => "required",
            "state" => "required",
            "city" => "required",
            "terms" => "required"
        ]);
        $data = $request->all();
        $inquiery = Inquiry::create($data);
        // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewInquiry($inquiery));
        Mail::to($inquiery->email)->send(new InquiryThanks($inquiery->name));

        $request->session()->flash('status', 'Thanks for inquiry!');
        
        return redirect()->back();
    }

    public function terms_and_conditions() {
        return view('terms_and_conditions');
    }
}
