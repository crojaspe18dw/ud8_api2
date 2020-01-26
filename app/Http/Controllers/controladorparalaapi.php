<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class controladorparalaapi extends Controller
{
    private $cliente;

    public function __construct(){
        $this->cliente=new client(['base_uri'=>'https://api.github.com/']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($git)
    {
                                                                                               

        $urlu='users/'.$git; //url para listar un usuario 
        $urld='users/'.$git.'/repos';  //url para listar
        $urlseguidores='users/'.$git.'/followers';
        $urlseguidos='users/'.$git.'/following';
        $urlcommits='repos/'.$git.'/agendaphp/commits';



        $respuestau=$this->cliente->get($urlu);
        $respuestad=$this->cliente->get($urld);
        $nseguidores=$this->cliente->get($urlseguidores);
        $nseguidos=$this->cliente->get($urlseguidos);
        $commits=$this->cliente->get($urlcommits);



        $cuerpou=$respuestau->getBody();
        $cuerpod=$respuestad->getBody();
        $seguidores=$nseguidores->getBody();
        $seguidos=$nseguidos->getBody();
        $commits=$commits->getBody();

        $cuerpou=json_decode($cuerpou);
        //cosas que le pasare a la vista
        //datos del usuario que se le paso el nombre
        $imagen=$cuerpou->avatar_url;
        $nombre=$cuerpou->login;

        $cuerpod=json_decode($cuerpod);
        $seguidores=json_decode($seguidores); //pasarlos tambien a la vista es un array recorrer con un foreach
        $seguidos=json_decode($seguidos); //recorrerlo con un forelse
        $commits=json_decode($commits);




        return view('githubindex',compact('nombre','imagen','seguidores','seguidos','cuerpod'));





    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
