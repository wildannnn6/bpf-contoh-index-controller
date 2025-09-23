<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function index()
    {
        $name       = 'wildan';
        $myage      = Carbon::create('2006-06-04');
        $hobby      = ['game','membaca','ngoding','olahraga','speda'];
        $tgl_harus_wisuda = Carbon::create('2028-06-04');
        $future_goal = "Software Engineer";
        $time_to_study_left = Carbon::now()->diffInDays($tgl_harus_wisuda, false);
        $current_semester = 3;


        if ($current_semester < 3) {
            $message = "Masih Awal, Kejar TAK";
        } else {
            $message = "whatever people say, keep going and never give up";
        }
        return view('pegawai', [
            "name" => $name,
            "my_age" => $myage,
            "hobbies" => $hobby,
            "tgl_harus_wisuda" => $tgl_harus_wisuda->toDateString(),
            "time_to_study_left" => $time_to_study_left,
            "current_semester" => $current_semester,
            "message" => $message,
            "future_goal" => $future_goal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
