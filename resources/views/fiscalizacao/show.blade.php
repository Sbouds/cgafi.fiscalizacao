@extends('adminlte::page')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nova Fiscalização</h3>
			
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>


      <form class="" method="POST" action="{{ url('fiscalizacao/show',   $fisc->id) }}">

        {{ csrf_field() }}
       	<input name="_method" type="hidden" value="GET">



	<div class="row" readonly="readonly" >

    			
            <div class="col-lg-10">
				<h3>Empresa</h3>
            	
           
            	<div class="col-lg-4 col-sm-6 col-xs-12">
	            	<div class="form-group" disabled="true" >
		            	<label for="nome">Autoridade: {{$ent->ent_nome}} </label>
		            </div>
            	</div>
				
            	<div class="col-lg-5 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<label>Tipo de Autoridade*</label>
            			<select name="tent_nome" class="form-control" value="{{old('$tp_ent->tent_nome')}}" readonly="readonly">
	            				<option value="{{$tp_ent->tent_nome}}"></option>
	            				<option value="{{$tp_ent->tent_nome}}">Autoridade Certificadora 1º nível</option>
	            				<option value="{{$tp_ent->tent_nome}}">Autoridade Certificadora 2º nível</option>
	            				<option value="{{$tp_ent->tent_nome}}">Autoridade de Registro</option>   		
            			</select>
            		</div>
            	</div>	
			</div>
			
			<div class="col-lg-10">
				<h3>Fiscalização</h3>
				<div class="col-lg-4 col-sm-6 col-xs-12">
	            	<div class="form-group" >
		            	<label for="nome">Processo: {{$fisc->fisc_nup}}</label>   	
	            	</div>
            	</div>
            	

            	<div class="col-lg-5 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<label>Status*</label>

            			<select name="st_nome" class="form-control" readonly="readonly">
	            				<option value=" "></option>
	            				<option value="{{$st->st_nome}}">Em andamento</option>            		
	            		</select>
            		</div>            		
            	</div>

            	<div class="col-lg-4 col-sm-6 col-xs-12">
            		<div class="form-group">
		            	<label for="">Responsável da AC RAIZ*</label>
		            	<input type="text" name="fr_nome" required value="{{$fisc_resp->fr_nome}}" class="form-control" placeholder="Servidor" readonly="readonly">
	            	</div>            		
            	</div>
		
				<div class="col-lg-2 col-sm-6 col-xs-12">
	            	<div class="form-group">
		            	<label for="">Data de início*</label>
		            	<input type="text" name="fisc_dt_inicio" required value="{{$fisc->fisc_dt_inicio}}" class="form-control" placeholder="__/__/____" readonly="readonly">
		            </div>            		
	            </div>

		        <div class="col-lg-2 col-sm-6 col-xs-12">
		            <div class="form-group">
				        <label for="">Data de Prorrogação*</label>
				        <input type="text" name="fisc_dt_prorrogacao" required value="{{$fisc->fisc_dt_prorrogacao}}" class="form-control" placeholder="dd/mm/aaaa" readonly="readonly">
		            </div>            		
	            </div>
					
				<div class="col-lg-6 col-sm-6 col-xs-12">
		            <div class="form-group">
		   				<label for="">Descrição</label>
		    			<textarea class="form-control" name="and_descricao" required value="{{$and->and_descricao}}" rows="5" readonly="readonly"></textarea>
		  			</div>
				</div>
					
				<div class="col-lg-2 col-sm-6 col-xs-12">
		            <div class="form-group">
				        <label for="">Data de Registro</label>
				        <input type="text" name="and_dt_registro" required value="{{$and->and_dt_registro}}" class="form-control" class="form-control" placeholder="dd/mm/aaaa" readonly="readonly">
		            </div>            		
	            </div>					
	            	
	            <div class="col-lg-4 col-sm-6 col-xs-12">
	            	<div class="form-group">
		            	<label for="">Origem</label>
		            	<input type="text" name="ori_nome" required value="{{$ori->ori_nome}}" class="form-control" placeholder="" readonly="readonly">
		            </div>            		
	            </div>
			</div>

            <div class="col-lg-10">
				<h3>Penalidade</h3>
	            <div class="col-lg-4 col-sm-6 col-xs-12">
	            	<div class="form-group">
		            <label for="">Nome Penalidade</label>
		            <input type="text" name="pen_nome" required value="{{$pen->pen_nome}}" class="form-control" placeholder="" readonly="readonly">
		            	</div>            		
	            </div>

	        <div class="col-lg-2 col-sm-6 col-xs-12">
	            <div class="form-group">
		            <label for="">Grau Penalidade</label>
		            <input type="text" name="pen_grau" required value="{{$pen->pen_grau}}" class="form-control" placeholder="" readonly="readonly">
		        </div>            		
	        </div>

	        <div class="col-lg-3 col-sm-6 col-xs-12">
	            <div class="form-group">
		            <label for="">Inicio Penalidade</label>
		            <input type="text" name="pen_dt_inicio" required value="{{$pen->pen_dt_inicio}}" class="form-control" placeholder="" readonly="readonly">
		        </div>            		
	        </div>

	        <div class="col-lg-3 col-sm-6 col-xs-12">
	            <div class="form-group">
		            <label for="">Fim Penalidade</label>
		            <input type="text" name="pen_dt_fim" required value="{{$pen->pen_dt_fim}}" class="form-control" placeholder="__/__/____" readonly="readonly">
		            </div>            		
	            </div>
			</div>
		</div>
	</form>

        <div class="form-group">
               	<a href="{{ url('fiscalizacao/edit',   $fisc->id) }}"><button class="btn btn-primary" type="submit">Editar</button></a>
            	<a href="{{ url('fiscalizacao/index')}}"><button class="btn btn-danger">Voltar</button></a>

        </div>
		
		
	
@stop
