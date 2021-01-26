<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        if (request()->ajax()) {
            $start = (!empty($_GET['start_date'])) ? ($_GET['start_date']) : ('');
            $end = (!empty($_GET['end_date'])) ? ($_GET('end_date')) : ('');

            $data = Task::whereDate('start_date', '>=', $start)
                ->whereDate('end_date', '<=', $end)
                ->get(['id', 'name', 'description', 'start_date', 'end_date'])
            ;

            return response()->json($data);
        }

        return view('contents.calendar.index', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertArray = [
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];

        $task = Task::insert($insertArray);

        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $where = ['id' => $request->id];
        $updateArray = [
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];
        $task = Task::where($where)->update($updateArray);

        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $task = Task::where('id', $request->id)->delete();

        return response()->json($task);
    }
}
