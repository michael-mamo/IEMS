<?php

namespace App\Http\Controllers\backend\report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MyIncome;
use App\Models\MyExpense;
use App\Models\MySaving;
use Auth;
class ReportController extends Controller
{
    //function to view report
    public function ReportView(){
        $userId = Auth::user()->id;
        $data['totalIncome'] = MyIncome::where('userid', $userId)->sum('amount');
        $data['totalExpense'] = MyExpense::where('userid', $userId)->sum('amount');
        $data['netIncome'] = $data['totalIncome'] - $data['totalExpense'];
        $data['totalSaving'] = MySaving::where('userid', $userId)->sum('amount');
        // Get table data
        $data['myIncome'] = MyIncome::where('userid', $userId)->get();
        
        return view('admin.report.reportView', $data);
    }
}
