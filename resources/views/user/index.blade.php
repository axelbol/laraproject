@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Usuarios</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Nuevo usuario</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">E-mail</th>
              <th scope="col">Rol</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <th scope="row">{{ $user->name }}</th>
                <td>
                  <i class="bg-danger"></i>
                  <span class="status">{{ $user->email }}</span>
                </td>
                <td><span class="badge badge-success">Admin</span></td>
                <td>
                  <form action="{{ route('user.destroy', $user->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Editar</a>
                  <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-dark">Ver</a>
                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer border-0">
        {{ $users->links() }}
      </div>
    </div>
  </div>
</div>
@endsection