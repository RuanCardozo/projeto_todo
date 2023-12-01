<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->date){
            $filteredDate = $request->date;
        }else{
            $filteredDate = date('Y-m-d');
        }

        $data['date_as_string'] = '01 de dez';
        $data['date_prev_button'] = '30 de nov';
        $data['date_next_button'] = '02 de dez';

        $data['tasks'] = Task::whereDate('due_date', $filteredDate)->get();
        $data['AuthUser'] = Auth::user();

        $data['tasks_count'] = $data['tasks']->count();
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();

        return view('home', $data);
    }
}
