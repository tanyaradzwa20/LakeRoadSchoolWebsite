<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }
    public function store(){
        return view('frontend.store');
    }

    public function curriculum($type = 'primary'){

        $data=getPrimaryCurriculum();
        return view('frontend.curriculum',compact('data'));
    }

    public function fees($type = 'primary')
    {
        $data = primaryFees();
        return view('frontend.fees',compact('data'));

    }

  public  function circulars($type = 'primary')
    {
        $data=primaryCirculars();
        return view('frontend.circulars',compact('data'));
    }

    public function results()
    {
        $data = primaryResults();
        return view('frontend.results',compact('data'));
    }
    public function sen($type = 'primary')
    {
        $data = primarySEN();
        return view('frontend.sen', compact('data'));
    }

}
