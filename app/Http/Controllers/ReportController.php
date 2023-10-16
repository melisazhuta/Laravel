<?php
namespace App\Http\Controllers;
use App\Http\Request;
use App;
use Auth;
use App\Models\Invoice;

class ReportController extends Controller
{
    public function report1($pid)
    {
    $invoice = Invoice::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin:20px; padding:20px;'>";
    $print.= "<h1>Your Invoice</h1>";
    $print.= "<hr/>";
    $print.= "<p>Invoice No : <b>". $pid . "</b></p>";
    $print.= "<p>Date : <b>". $invoice->paid_date . "</b></p>";
    // $print.= "<p>Registration ID : <b>". $invoice->registration->register_id . "</b></p>";
    // $print.= "<p>Student Name: <b>". $invoice->students->name . "</b></p>";
    $print.= "<hr/>";
    $print.= "<table style='width:100%;'>";
    $print.= "<tr>";
    $print.= "<td>Amount</td>";
    $print.= "</tr>";

    $print.= "<tr>";
    // $print.= "<td><h3>".$invoice->registration->exams->name . "</h3></td>";
    $print.= "<td><h3>".$invoice->amount ." MKD". "</h3></td>";
    $print.= "</tr>";

    $print.= "</table>";
    $print.= "<hr/>";

    // $print.="<span> Printed By: <b>". Auth::user()->name . "</b></span>";
    $print.="<span> Printed Date: <b>". date('Y-m-d') . "</b></span>";

    $print.= "</div>";
    $pdf->loadHTML($print);
    return $pdf->stream();

    }
    }
    ?>