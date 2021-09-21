@extends('layouts/layoutMain')

@section('container')

<div class="row justify-content-center mt-5 pt-5">
    <div class="col-lg-5">
        <main class="form-registration">

            <h1 class="h3 mb-3 fw-normal text-center">Halaman Registrasi</h1>

            <form action="/register" method="POST">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Nama</label>
                @error('name')    
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div id="role" class="mt-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="role_id" id="role1" value="1" checked>
                  <label class="form-check-label" for="role1">
                    Penyetor
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="role_id" id="role2" value="2" >
                  <label class="form-check-label" for="role2">
                    Kurir
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="role_id" id="role3" value="3" >
                  <label class="form-check-label" for="role3">
                    kolega
                  </label>
                </div>
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">klik di sini!</a></small>
        </main>
    </div>
</div>

@endsection 