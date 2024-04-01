@extends('layouts.app')

@section('titulo')
    Regístrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" placeholder="Tu Nombre" value={{old('name')}}>
                    @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-sm text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">Username</label>
                    <input type="text" id="username" name="username" class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror" placeholder="Tu Nombre de Usuario" value={{old('username')}}>
                    @error('username')
                            <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-sm text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">Email</label>
                    <input type="email" id="email" name="email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" placeholder="Tu Email de Registro" value={{old('email')}}>
                    @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-sm text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Password</label>
                    <input type="password" id="password" name="password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" placeholder="Password de Registro">
                    @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-sm text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">Repetir Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="border p-3 w-full rounded-lg" placeholder="Repite tu Password">
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection