<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio(){
        $task = Task::all();
        return view('gesTareas.inicio')->with('tareas',$task);
        // return $task;

        //     // Devolverá todas las observaciones
        //       $observaciones = Formularios::select('nombre','apellido')->where('nombre','like','S');
        //       return view('partes.observaciones')->with('formularios', $observaciones);
          
        // return view('gesTareas.inicio');
    }
    //crear una tarea
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('gesTareas.crearTarea');
    }


    
    //trae los todas las tareas
     public function index(Request $request){
        //
        $task = Task::all();
        return $task;

    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $task = new Task();
        // $task->name = $request->name;
        // $task->description = $request->description;
        // $task->content = $request->content;
        // $task->save();


        $task = $request->all();
        if($request->hasfile('imagen')){
            
              $image =$request->file('imagen');
              var_dump($image);
              $nombre = $image->getClientOriginalName(); 
              $image->move('img/fotosMujeres', $nombre);
            echo "\n\n\n";
              var_dump($image);
              $task["imagen"]=$nombre;

            //   $path = $request->imagen->storeAs($image, $nombre); 
            //   $data['imagen']=$path;
            //   $path=Storage::disk('public')->put($nombre, $image);
         
        }
        // print_r ($data);
        Task::create($task);

        return redirect()->route('/tareas')->with('success', 'Mujer agregada correctamente', $task);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $task = Task::findOrFail($request->id);
        return $task;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $task = Task::findOrFail($request->id);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();
        return $task;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $task = Task::destroy($request->id);
        return $task;

    }
}
