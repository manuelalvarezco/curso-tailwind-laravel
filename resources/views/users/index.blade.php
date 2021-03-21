<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body class="bg-gray-100">

    <div class="bg-secondary text-white flex justify-between items-center px-2">
        <div>
            <img class="h-8 py-1" src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Camper_shoes_Logo.png" alt="">
        </div>
        <div class="text-2xl">&equiv;</div>
    </div>
    <main>
        <div class="h-56 md:h-100 bg-cover bg-no-repeat bg-center" style="background-image: url('https://images.unsplash.com/photo-1587855049254-351f4e55fe2a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=862&q=80');">

        </div>
        <div class="-mt-6 w-5/6 mx-auto shadow-xl p-4 bg-white rounded-xl">
            @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-300 rounded-md w-full px-6 py-4 cursor-pointer">
                @foreach ($errors->all() as $error) - {{ $error }} <br> @endforeach
            </div>
            @endif
            <form action="{{ route('users.store') }}" method="POST" class="mt-4">
                @csrf
                <div class="md:flex items-end">
                    <div class="md:w-1/4 px-3 py-2 md:mb-0">

                        <input name="name" type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4" placeholder="Nombre" value="{{ old('name') }}">
                    </div>
                    <div class="md:w-1/4 px-3 py-2">

                        <input name="email" type="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" placeholder="Correo" value="{{ old('email') }}">
                    </div>
                    <div class="md:w-1/4 px-3 py-2">

                        <input name="password" type="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" placeholder="Contraseña">
                    </div>
                    <div class="md:w-1/4 px-3 py-2">

                        <input type="submit" value="Crear Usuario" class="w-full focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                    </div>

                </div>
            </form>
        </div>
    </main>
    <div class="container mx-auto ">


        <div class="flex flex-col bg-gray-100 py-4 sm:pt-0 mt-4">
            <table class="rounded-t-lg m-5 w-5/6 mx-auto">
                <thead>
                    <tr class="text-left border-b-2">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="border-b">
                        <td class="px-4 py-3">{{ $user->id}}</td>
                        <td class="px-4 py-3">{{ $user->name}}</td>
                        <td class="px-4 py-3">{{ $user->email}}</td>
                        <td class="px-4 py-3">
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                @method('DELETE') @csrf
                                <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar ... ?')" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>


            </table>
        </div>

        <div class="md:flex">
            <div class="mx-2 md:mx-0 mt-5 mb-5 md:w-1/2 md:flex md:bg-white rounded-lg">
                <div><img class="w-full md:w-48 md:h-full object-cover rounded-lg md:rounded-r-none" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80"
                        alt=""></div>
                <div class="relative shadow-lg md:shadow-none bg-white md:bg-transparent mx-2 p-2 rounded-lg -mt-2">
                    <h2 class="text-xl uppercase tricking-tigh font-semibold text-gray-900 md:text-lg">
                        Tennis Nike
                    </h2>
                    <p class="text-gray-700">Tennis deportivos con suela de carbono</p>
                    <div class="mt-2 text-sm font-semibold text-gray-700">COP $255.00</div>
                    <div class="mt-2 text-sm text-yellow-700">&starf;&starf;&starf;&starf;&star; | 45 reseñas</div>
                </div>
            </div>
            <div class="mx-2 md:mx-0 md:ml-2 mt-5 mb-5 md:w-1/2 md:flex md:bg-white rounded-lg">
                <div><img class="w-full md:w-48 md:h-full object-cover rounded-lg md:rounded-r-none" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80"
                        alt=""></div>
                <div class="relative shadow-lg md:shadow-none bg-white md:bg-transparent mx-2 p-2 rounded-lg -mt-2">
                    <h2 class="text-xl uppercase tricking-tigh font-semibold text-gray-900 md:text-lg">
                        Tennis Nike
                    </h2>
                    <p class="text-gray-700">Tennis deportivos con suela de carbono</p>
                    <div class="mt-2 text-sm font-semibold text-gray-700">COP $255.00</div>
                    <div class="mt-2 text-sm text-yellow-700">&starf;&starf;&starf;&starf;&star; | 45 reseñas</div>
                </div>
            </div>
        </div>
    </div>
    <footer class="absolute  botton-0 w-full bg-secondary text-white">
        <div class="md:flex md:flex-row-reverse justify-around">
            <div class="mt-4 ml-8">
                <div class="hover:text-primary"><i class="fa fa-facebook"></i> /manuelalvarezco</div>
                <div class="hover:text-primary"> <i class="fa fa-twitter"></i>@manuelalvarezxd</div>
                <div class="hover:text-primary"> <i class="fa fa-instagram"></i> @manuelalvarezco</div>
            </div>
            <ul class="mt-4 ml-8 mb-4 md:list-disc">
                <li>Soporte</li>
                <li>Acerca de</li>
                <li>Registro</li>
                <li>Aviso legal</li>
            </ul>
        </div>
    </footer>
</body>

</html>