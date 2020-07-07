@extends('layouts.argon')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="mb-0">Detalles usuario</h3>
  </div>
  <div class="card-body">
    <div class="mb-2">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th> ID </th>
            <td> {{ $user->id }} </td>
          </tr>
          <tr>
            <th> Nombre </th>
            <td> {{ $user->name }} </td>
          </tr>
          <tr>
            <th> E-mail </th>
            <td> {{ $user->email }} </td>
          </tr>
          <tr>
            <th> Roles </th>
            <td>
              <span class="badge badge-info">Admin</span>
              {{-- <span class="label label-info label-many">Admin</span> --}}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <a class="btn btn-sm btn-default" href="{{ route('user.index') }}">Volver</a>
  </div>
</div>
@endsection