<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller{
    //recoge todos los datos de la base de datos y los muestra en inicio
    public function inicio(){
        $task = Task::all();
        return view('gesTareas.inicio')->with('task', $task);
    } 
    //crear una tarea , envia a la vista `para llenar el formulario 
    public function crear(){
        return view('gesTareas.crearTarea');
    }
    public function store(Request $request){
      //recoge los datos del formulario y los guarda en la BD 
      //valida los campos
        $task = $request->all();
        // $task = new Task();
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        //valida la imagen 
        if($request->hasfile('imagen')){
              $image =$request->file('imagen');
              $nombre = $image->getClientOriginalName(); 
              $image->move('img/fotosMujeres', $nombre);
            $task["imagen"]=$nombre;
        }
        Task::create($task);
        return redirect('/tareas')->with('mensaje', 'guardada correctamente');
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
        }
    //recoge los datos acutalizados y los guarda en la BD
    public function edit(Request $request, $id){
       
    $notaActualizada = Task::find($id);
    $notaActualizada->name = $request->name;
    $notaActualizada->description = $request->description;
    $notaActualizada->content = $request->content;

    if($request->hasFile('imagen')){
        $image =$request->file('imagen');
        $nombre = $image->getClientOriginalName(); 
        $image->move('img/fotosMujeres', $nombre);
// esta es la línea que faltaba. Llamo a la foto del modelo y le asigno la foto recogida por el formulario de actualizar.  
        $notaActualizada->imagen=$nombre;      
      }
     
    // if($notaActualizada->isClean()){
    // return ('mensaje','At least one new value of a field is needed to update');
    // }
    // $notaActualizada->update($request->all());
    $notaActualizada->save();
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
        $task = Task::destroy($request->id);
        return redirect('/tareas')->with('mensaje', 'borrado correctamente', $task);
        // return $task;

    }
}
