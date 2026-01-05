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
        $data = contactData();
        return view('frontend.contact', compact('data'));
    }
    public function store(){
        return view('frontend.store');
    }

    public function curriculum($type = 'primary'){

        $data=$type=='primary'? getPrimaryCurriculum():secondaryCurriculumn();

        return view('frontend.curriculum',compact('data','type'));
    }

    public function fees($type = 'primary')
    {
        $data = $type == 'primary' ? primaryFees() : secondaryFees(); // Need to check if there is secondaryFees
        return view('frontend.fees',compact('data', 'type'));

    }

  public  function circulars($type = 'primary')
    {
        $data = $type == 'primary' ? primaryCirculars() : primaryCirculars(); // Need to check if there is secondaryCirculars
        return view('frontend.circulars',compact('data', 'type'));
    }

    public function results($type = 'primary')
    {
        $data = $type == 'primary' ? primaryResults() : primaryResults();
        return view('frontend.results',compact('data', 'type'));
    }
    public function sen($type = 'primary')
    {
        $data = $type == 'primary' ? primarySEN() : primarySEN();
        return view('frontend.sen', compact('data', 'type'));
    }

    public function teachers($type = 'primary'){
        $data = $type == 'primary' ? primaryTeachers() : primaryTeachers();
        return view('frontend.teachers',compact('data', 'type'));

    }

    public function gallery($type = 'primary'){
        $data = galleryData();
        return view('frontend.gallery', compact('data', 'type'));
    }

}
