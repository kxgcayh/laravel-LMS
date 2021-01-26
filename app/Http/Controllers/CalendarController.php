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
            $start = (!empty($_GET['start'])) ? ($_GET['start']) : ('');
            $end = (!empty($_GET['end'])) ? ($_GET('end')) : ('');

            $data = Task::whereDate('start', '>=', $start)
                ->whereDate('end', '<=', $end)
                ->get(['id', 'name', 'start', 'end'])
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
            'start' => $request->start,
            'end' => $request->end,
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
            'start' => $request->start,
            'end' => $request->end,
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
