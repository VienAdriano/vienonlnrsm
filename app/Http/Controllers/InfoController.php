<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){
      $basicInfo = DB::table('info')->first();
      $personalInfo = DB::table('personalinfo')->first();
      $objectivesInfo = DB::table('objective')->first();
      $workInfo = DB::table('work_experience')->get();
      $educationInfo = DB::table('education')->get();
      return view('welcome', [
          'basicInfo' => $basicInfo,
          'personalInfo' => $personalInfo,
          'objectivesInfo' => $objectivesInfo,
          'workInfo' => $workInfo,
          'educationalInfo' => $educationInfo
      ]);
    }

}
