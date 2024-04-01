@extends('layouts.app')

@section('titulo')
    Inicia Sesión en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen login de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('login')}}" method="POST">
                @csrf
                
                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-sm text-center">{{session('mensaje')}}</p>
                @endif

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">Email</label>
                    <input type="email" id="email" name="email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" placeholder="Tu Email" value={{old('email')}}>
                    @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-sm text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Password</label>
                    <input type="password" id="password" name="password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" placeholder="Tu Password">
                    @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-sm text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input id="remember" type="checkbox" name="remember">
                    <label for="remember" class="text-gray-500 text-sm">Mantener abierta mi sesión</label>
                </div>

                <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection