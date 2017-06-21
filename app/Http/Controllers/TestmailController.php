<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;

class TestmailController extends Controller
{





  public function index(){
    Mail::to('psitthailand@gmail.com')->send(new Welcome);

return "Send Successfully";
  }



}
