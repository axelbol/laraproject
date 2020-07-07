@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Nuevo usuario</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">Volver</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
          @csrf
          <h6 class="heading-small text-muted mb-4">User information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="name">Name</label>
                  <input type="text" id="" class="form-control" name="name" placeholder="Enter your name" value="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="email">Email address</label>
                  <input type="email" id="" name="email" class="form-control" placeholder="example@example.com">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="password">Password</label>
                  <input type="password" id="" name="password" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-sm btn-success">Guardar</button>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />

        </form>
      </div>
    </div>
  </div>
</div>
@endsection