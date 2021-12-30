<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GuestController extends Controller
{
    public function index() {
        return view('guest.home');
    }

    public function about() {
        return view('guest.about');
    }

    public function program() {
        return view('guest.program');
    }


    public function contact() {
        return view('guest.contact');
    }

    public function testimonial() {
        return view('guest.testimonial');
    }


    public function testimonial_post(Request $request) {
        $validate = Validator::make($request->all(), [
            "first_name" => ['required'],
            "email" => ['required'],
            "job" => ['required'],
            "testimony" => ['required'],
        ]);

        if($validate->fails()) {
            toast($validate->messages()->all()[0], 'error');
            return redirect()->back();
        }

        $this->postTestimony($request);


        alert()->success("Thank You !", "We have received your forms, your feedback means a lot to us");
        return redirect()->back();
    }

    private function postTestimony($request) {
        DB::table('testimonials')
            ->insert([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "job" => $request->job,
                "testimony" => $request->testimony,
                "status" => "Deactive",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
    }
}
