<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //recoge todos los datos de la base de datos y los muestra en inicio
    public function inicio(){
        $task = Task::all();
        return view('gesTareas.inicio')->with('task', $task);
    } 
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //crear una tarea , envia a la vista `para llenar el formulario 
    public function crear(){
        return view('gesTareas.crearTarea');
    }


    //trae los todas las tareas
    //  public function index(Request $request){
    //     //
    //     $task = Task::all();
    //     return $task;

    // }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      //recoge los datos del formulario y los guarda en la BD 

      //valida los campos
        $task = $request->all();
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        //valida la imagen 
        if($request->hasfile('imagen')){
              $image =$request->file('imagen');
            //   var_dump($image);
              $nombre = $image->getClientOriginalName(); 
              $image->move('img/fotosMujeres', $nombre);
            //     echo "\n\n\n";
            //   var_dump($image);
              $task["imagen"]=$nombre;

            //   $path = $request->imagen->storeAs($image, $nombre); 
            //   $data['imagen']=$path;
            //   $path=Storage::disk('public')->put($nombre, $image);
         
        }
        // print_r ($data);
        Task::create($task);
        return back()->with('mensaje', 'tarea agregada');
        return redirect('/tareas');

        // return view('gesTareas.inicio');
          //
        // $task = new Task();
        // $task->name = $request->name;
        // $task->description = $request->description;
        // $task->content = $request->content;
        // $task->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //muestra los detalles
        $nota = Task::findOrFail($id);
        return view('gesTareas.show', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update($id){
        //enviar los datos a la vista edit
        $tareaUpdate = Task::findOrFail($id);
        return view('gesTareas.edit', compact('tareaUpdate'));
         //
        // $task = Task::findOrFail($request->id);

        // $task->name = $request->name;
        // $task->description = $request->description;
        // $task->content = $request->content;

        // $task->save();
        // return $task;
    }
    public function edit(Request $request, $id)
    {
        //recoge los datos acutalizados y los guarda en la BD
    $notaActualizada = Task::find($id);
    $notaActualizada->name = $request->name;
    $notaActualizada->description = $request->description;
    $notaActualizada->save();
    // return back()->with('mensaje', 'Nota editada!');
    return redirect('/tareas')->with('mensaje', 'acutalizada correctamente');

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
