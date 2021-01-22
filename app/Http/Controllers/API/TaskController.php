<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $start = (!empty($_GET['start_date'])) ? ($_GET['start_date']) : ('');
            $end = (!empty($_GET['end_date'])) ? ($_GET('end_date')) : ('');

            $data = Task::whereDate('start_date', '>=', $start)
                ->whereDate('end_date', '<=', $end)
                ->get(['id', 'name', 'description', 'start_date', 'end_date'])
            ;

            return response()->json($data);
        }

        // return view('contents.calendar.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'datetime' => 'required',
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->datetime = $request->datetime;
        $task->created_by = Auth::id();

        try {
            $task->save();

            return response()->json([
                'success' => true,
                'data' => $task->toArray(),
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'Task not submited',
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json([
                'success' => false,
                'message' => 'Task not found',
            ], 400);
        }
        if ($task->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Task deleted successfull',
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Task can not be deleted',
        ], 500);
    }
}
