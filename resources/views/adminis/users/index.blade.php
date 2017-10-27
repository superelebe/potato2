@extends('layouts.adminis')

@section('content')
	<div class="column is-8">
		<div class="columns">
			<div class="column is-4">
				
			</div>
			<div class="column is-4 is-pulled-right">
				<a href="{{route('users.create')}}" class='button is-primary is-pulled-right'> <i class='fa fa-user-plus'></i> Crear usuario</a>
			</div>
		</div>
		<div class="card">
			<div class="card-content">
				<table class="table is-hoverable is-narrow is-fullwidth">
					<thead>
						<tr>
							<th>id</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Dia Creado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->created_at->toFormattedDateString()}}</td>
							<td><a class='button is-outlined' href="{{route('users.edit',$user->id)}}">Editar</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>	
			</div>
		</div>
		<div class="columns">
			<div class="column is-4 is-centered">
				{{$users->links()}}
			</div>
		</div>
	</div>
@endsection