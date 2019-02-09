@extends('adminlte::page')
@section('conteudo')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Autoridades em Fiscalização <a href="create"><button class="btn btn-success">Novo</button></a></h3>
				
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Processo</th>
					<th>Autoridade</th>
					<th>Situação</th>
					<th>Data de Início</th>
					<th>Opções</th>
				</thead>
               
				
					
				<tr>
					    @foreach($fisc as $f)          	
						<td>{{$f->fisc_nup}}</td>
						@endforeach
						@foreach($ent as $e)
						<td>{{$e->ent_nome}}</td>
						<td></td>
						<td></td>

					

										
						<td>
							<a href="show/{{$e->id}}"><button type="button" class="btn btn-info"> <icon class="glyphicon glyphicon-eye-open"></button>
							</a>

	                        <a href="edit/{{$e->id}}"><button type="button" class="btn btn-warning"> <icon class="glyphicon glyphicon-pencil"></button>
	                        </a>
						
	                        <a href="delete/{{$e->id}}" method="post"><button type="button" class="btn btn-danger" > <icon class="glyphicon glyphicon-remove" onclick="return confirm('Deseja encerrar essa Fiscalização?')"></button> 
	                        </a> 
	                        							
						</d>

				</tr>
				
				@endforeach	
									
			</table>
		</div>
		
	</div>
</div>

@stop