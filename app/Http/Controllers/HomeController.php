<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \PDF;
  
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HaythemTest'];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('haythemtestpdf.pdf');
    }
}