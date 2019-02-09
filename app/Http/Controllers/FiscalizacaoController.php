<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Fiscalizacao;
use App\Entidade;
use App\TipoEntidade;
use App\Andamento;
use App\FiscalResponsavel;
use App\TermoAjusteConduta;
use App\Status;
use App\Origem;
use App\Penalidade;
use App\Http\Controllers;
use App\Http\Requests\FiscalizacaoRequest;
use DB;
use Collective\Html\FormFacade;




class FiscalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fisc = Fiscalizacao::all();
        $tp_ent = TipoEntidade::all();
        $and = Andamento::all();
        $ent = Entidade::all();
        $fisc_resp = FiscalResponsavel::all();
        $ori = Origem::all();
        $pen = Penalidade::all();
        $st = Status::all();
        $tac = TermoAjusteConduta::all();

     
    return view('fiscalizacao.index', compact('fisc','tp_ent','and','ent','fisc_resp','ori','pen','st','tac'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $fisc =  DB::table('fiscalizacaos');
          $tp_ent = DB::table('tipoentidades');
          $and = DB::table('andamentos');
          $ent = DB::table('entidades');
          $fisc_resp = DB::table('fiscalresponsavels');
          $ori = DB::table('origems');
          $pen = DB::table('penalidades');
          $st = DB::table('statuss');
          $tac = DB::table('termoajustecondutas');

    return view('fiscalizacao.create', ["fisc"=>$fisc,"tp_ent"=>$tp_ent, "and"=>$and, "ent"=>$ent, "fisc_resp"=>$fisc_resp, "ori"=>$ori, "pen"=>$pen, "st"=>$st, "tac"=>$tac]);
        return('fiscalizacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Fiscalizacao::create($request->all());
      Entidade::create($request->all());
      TipoEntidade::create($request->all());
      FiscalResponsavel::create($request->all());
      Origem::create($request->all());      
      Penalidade::create($request->all());      
      Status::create($request->all());
      TermoAjusteConduta::create($request->all());
      Andamento::create($request->all());         
      

      return Redirect('fiscalizacao/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('fiscalizacao.show', ["fisc"=>Fiscalizacao::find($id), "ent"=>Entidade::find($id), "tp_ent"=>TipoEntidade::find($id), "and"=>Andamento::find($id), "fisc_resp"=>FiscalResponsavel::find($id), "ori"=>Origem::find($id), "pen"=>Penalidade::find($id), "st"=>Status::find($id), "tac"=>TermoAjusteConduta::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fisc = Fiscalizacao::find($id);
        $tp_ent = TipoEntidade::find($id);
        $and = Andamento::find($id);
        $ent = Entidade::find($id);
        $fisc_resp = FiscalResponsavel::find($id);
        $ori = Origem::find($id);
        $pen = Penalidade::find($id);
        $st = Status::find($id);
        $tac = TermoAjusteConduta::find($id);

        return view("fiscalizacao.edit", 
            ["fisc"=>$fisc,"tp_ent"=>$tp_ent, "and"=>$and, "ent"=>$ent, "fisc_resp"=>$fisc_resp, "ori"=>$ori, "pen"=>$pen, "st"=>$st, "tac"=>$tac]);
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
        
        $fisc = Fiscalizacao::find($id);
        $novofisc = $request->all();
        $fisc->update($novofisc); 

        $ent = Entidade::find($id);
        $novoent = $request->all();
        $ent->update($novoent); 

        $tp_ent = TipoEntidade::find($id);
        $novotp_ent = $request->all();
        $tp_ent->update($novotp_ent);

        $and = Andamento::find($id);
        $novoand = $request->all();
        $and->update($novoand); 

        $fisc_resp = FiscalResponsavel::find($id);
        $novofisc_resp = $request->all();
        $fisc_resp->update($novofisc_resp);

        $ori = Origem::find($id);
        $novoori = $request->all();
        $ori->update($novoori);

        $pen = Penalidade::find($id);
        $novopen = $request->all();
        $pen->update($novopen);

        $st = Status::find($id);
        $novost = $request->all();
        $st->update($novost);

        $tac = TermoAjusteConduta::find($id);
        $novotac = $request->all();
        $tac->update($novotac);              
        
        return Redirect('fiscalizacao/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $st = Status::find($id);
        $st->st_nome='Encerrada';
        $st->save();
                
        return Redirect('fiscalizacao/index');
    }
}
