<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
* @OA\Info(title="API Productos", version="1.0")
*
* @OA\Server(url="http://localhost:8000")
*/
class ControladorDeProductos extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/productos",
    *     summary="Mostrar productos",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los productos."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $todo=Producto::all();
        return $todo;
    }

        /**

    * @OA\Post(

    *   path="/posts",

    *   summary="crear nuevo producto",

    *   description="nuevo producto",

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=200,

    *   description="The Post resource created",

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=401,

    *   description="Unauthenticated."

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response="default",

    *   description="an ""unexpected"" error",

    *   )

    * )

    *

    * Store a newly created resource in storage.

    *

    * @param \Illuminate\Http\Request $request

    *

    * @return \Illuminate\Http\Response

    */
    public function store(Request $request)
    {
        $nuevo=new Producto;
        $nuevo->nombre=$request->nombre;
        $nuevo->cantidad=$request->cantidad;
        $nuevo->marca=$request->marca;
        $nuevo->comentario=$request->comentario;
        $nuevo->save();
    }

        /**

    * @OA\Get(

    *   path="/api/productos/{id}",

    *   summary="obtener un producto segun el id que se le pase por parametro",

    *   description="obtener un producto segun su id",

    *   tags={"Productos"},

    *   @OA\Parameter(

    *   name="id",

    *   in="path",

    *   description="el id del producto",

    *   required=true,

    *   @OA\Schema(

    *       type="integer",

    *       format="int64",

    *       description="identificador unico del producto"

    *   )

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=200,

    *   description="devuelve un producto"

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=401,

    *   description="Unauthenticated."

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response="default",

    *   description="an ""unexpected"" error"

    *   )

    * )

    *

    * @param  int  $id

    *

    * @return \Illuminate\Http\Response

    */
    public function show($id)
    {
        $uno=Producto::find($id)->get();
        return $uno;
    }

        /**

    * @OA\Put(

    *   path="/api/productos/{id}",

    *   summary="actualizar productos",

    *   description="actualiza un producto segun el id que se le pase por url",

    *   tags={"productos"},



    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=200,

    *   description="producto actualizado"

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=401,

    *   description="no autenticado"

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response="default",

    *   description="error inesperado"

    *   )

    * )

    *

    * Update the specified resource in storage.

    *

    * @param \Illuminate\Http\Request $request

    * @param  int  $id

    *

    * @return \Illuminate\Http\Response

    */
    public function update(Request $request, $id)
    {
        $actualizar=Producto::find($id);
        $actualizar->nombre=$request->nombre;
        $actualizar->cantidad=$request->cantidad;
        $actualizar->marca=$request->marca;
        $actualizar->comentario=$request->comentario;
        $actualizar->update();
    }

        /**

    * @OA\Delete(

    *   path="/api/productos/{id}",

    *   summary="borrar productos",

    *   description="borrar un producto de la base de datos segun el id que se ha pasado por la url como parametro",

    *   tags={"productos"},

    *   @OA\Parameter(

    *   name="id",

    *   in="path",

    *   description="el id del producto",

    *   required=true,

    *   @OA\Schema(

    *       type="integer",

    *       format="int64",

    *       description="identificador unico del producto"

    *   )

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=204,

    *   description="el producto ha sido borrado"

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response=401,

    *   description="sin autentificar"

    *   ),

    *   @OA\Response(

    *   @OA\MediaType(mediaType="application/json"),

    *   response="default",

    *   description="un error inesperado"

    *   )

    * )

    *

    * borra el producto seleccionado

    *

    * @param  int  $id

    *

    * @return \Illuminate\Http\Response

    */
    public function destroy($id)
    {
        $borrar=Producto::find($id);
        $borrar->delete();
    }
}
