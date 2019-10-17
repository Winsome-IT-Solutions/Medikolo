<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
      return "Masterlist-Admin/MasterController";
    }
    public function masterInfo($masterId)
    {
      return "master info :".$masterId;
    }
}
