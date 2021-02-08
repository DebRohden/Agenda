<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('agenda')){
            return view("viewIndex", ['aContatos' => session()->get('agenda')]);
        }
        return 'Não contem nenhum dado!';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("viewCreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iId    = $_POST['id'];
        $aDados = ['id'             => $iId,     
                   'nome'           => $_POST['nome'],
                   'celular'        => $_POST['celular'],
                   'telefone'       => $_POST['telefone'],
                   'dataNascimento' => $_POST['dataNascimento']];

        if($request->session()->has('agenda')){ 
            $aAgenda = $request->session()->get('agenda');
            $aAgenda[$iId] = $aDados;
            session()->forget('agenda');
            $request->session()->put('agenda', $aAgenda);
        }
        else {
            $request->session()->put('agenda', [$iId => $aDados]);
        }
        return $this->show($iId, $request);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $aAgenda = $request->session()->get('agenda');
        $aContato = $aAgenda[$id];
        return view("viewShow", ['contato' => $aContato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $aAgenda = $request->session()->get('agenda');
        $aContato = $aAgenda[$id];
        return view("viewEdit", ['contato' => $aContato]);
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
        $aDados = ['id'             => $id,     
                   'nome'           => $_POST['nome'],
                   'celular'        => $_POST['celular'],
                   'telefone'       => $_POST['telefone'],
                   'dataNascimento' => $_POST['dataNascimento']];

        $aAgenda = $request->session()->get('agenda');
        $aAgenda[$iId] = $aDados;
        session()->forget('agenda');
        $request->session()->put('agenda', $aAgenda);

        return $this->show($id, $request); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aAgenda = session()->get('agenda');
        unset($aAgenda[$id]);
        session()->forget('agenda');
        session()->put('agenda', $aAgenda);
        return $this->index();
    }
}
