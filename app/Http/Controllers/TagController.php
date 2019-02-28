<?php

namespace Blog\Http\Controllers;

use Blog\Tag;
use Illuminate\Http\Request;

/*!
 *  ESTA CLASSE TEM POR RESPONSABILIDADE CONTROLAR TODAS AS AÇÕES REFERENTE AS TAGS.
 * */

class TagController extends Controller
{
    /*!
     *  RESPONSÁVEL POR SOLICITAR O CARREGAMENTO DE TODAS AS TAGS CADASTRADAS
     * E ENVIA-LAS A VIEW.
     */
    public function index()
    {
        $tags = Tag::get();
        return view("tags.index", ['tags' => $tags]);
    }
    /*!
     *  RESPONSÁVEL POR CARREGAR O FORMULÁRIO DE CADASTRO DE TAG.
     */
    public function create()
    {
       return view("tags.create_edit");
    }
    /*!
     *  RESPONSÁVEL POR SOLICITAR O CARREGAMENTO DOS DADOS DE UMA TAG
     *  E ENVIA-LOS A VIEW.
     *
     *  $id -> Id da tag a ser editada.
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view("tags.create_edit", ['tag' => $tag]);
    }
    /*!
     *  RESPONSÁVEL POR COLETAR OS DADOS ENVIADOS PELO FORMULÁRIO.
     *
     * $request -> Contém os campos enviados pelo formulário.
     */
    public function store(Request $request)
    {
        $validacao = $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

        if(!isset($request->id))
            Tag::create($request->all());
        else
        {
            $tag = Tag::findOrFail($request->id);
            $tag->update($request->all());
        }
        return \Redirect::to('tag');
    }

    public function delete($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->active = 0;
        $tag->update();

        $resultado = "sucesso";
        $arr = array('response' => $resultado);
        header('Content-Type: application/json');
        echo json_encode($arr);
    }
}