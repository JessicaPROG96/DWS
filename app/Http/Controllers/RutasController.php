<?php

namespace App\Http\Controllers;
use Log;
use Illuminate\Http\Request;


class RutasController extends Controller
{
   private $arrayPeliculas = array(
        array(
            'title' => 'El padrino',
            'year' => '1972', 
            'director' => 'Francis Ford Coppola', 
            'poster' => 'https://cdn.pixabay.com/photo/2013/07/21/13/00/rose-165819_960_720.jpg', 
            'rented' => false, 
            'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
        ),
        array(
            'title' => 'El Padrino. Parte II',
            'year' => '1974', 
            'director' => 'Francis Ford Coppola', 
            'poster' => 'https://cdn.pixabay.com/photo/2013/08/20/15/47/poppies-174276_960_720.jpg', 
            'rented' => false, 
            'synopsis' => 'Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.'
        ),
        array(
            'title' => 'La lista de Schindler',
            'year' => '1993', 
            'director' => 'Steven Spielberg', 
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMzMwMTM4MDU2N15BMl5BanBnXkFtZTgwMzQ0MjMxMDE@._V1_SX214_AL_.jpg', 
            'rented' => false, 
            'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
        ),
        array(
			'title' => 'Pulp Fiction',
			'year' => '1994', 
			'director' => 'Quentin Tarantino', 
			'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjE0ODk2NjczOV5BMl5BanBnXkFtZTYwNDQ0NDg4._V1_SY317_CR4,0,214,317_AL_.jpg', 
			'rented' => true, 
			'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión: recuperar un misterioso maletín. '
		),
		array(
			'title' => 'Cadena perpetua',
			'year' => '1994', 
			'director' => 'Frank Darabont', 
			'poster' => 'http://ia.media-imdb.com/images/M/MV5BODU4MjU4NjIwNl5BMl5BanBnXkFtZTgwMDU2MjEyMDE@._V1_SX214_AL_.jpg', 
			'rented' => true, 
			'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.'
		)
        );
    //funciona como controlador del catalogo
    public function index(){
            return view('catalog.index', array('arrayPeliculas'=>$this->arrayPeliculas));
    }
    public function create(){
        return view('catalog.create');
    }

    public function edit($key){
        return view('catalog.edit', array('id'=>$key));
        
    }
    public function show($key){
        Log::debug(array_get($arrayPeliculas[$key],'array.title'));
        return view('catalog.show',['arrayPeliculas'=> $this->arrayPeliculas[$key]]);
    }
    
}

