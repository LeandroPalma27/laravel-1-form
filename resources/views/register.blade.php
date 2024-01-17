@extends('layouts.app')

@section('title', 'Solicitud de creacion de usuario')
@include('register-css')
@section('content')
    <div class="register-principal">
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="principal">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Formulario para solicitar creacion de usuario SIGESAPOL
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('store') }}" method="POST" >
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electronico institucional</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese solo su correo electronico institucional" required="">
                            </div>
                            <div class="form-dni">
                                <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI</label>
                                <div class="dni_data">
                                    <input type="text" name="dni" id="dni" class="email-input bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese su DNI" required maxlength="8">
                                    <button type="button" id="dni-button" class="dni-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Cargar</button>
                                </div>
                            </div>
                            <div>
                                <label for="primer_nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white disabled:bg-blue-gray-0">Primer nombre</label>
                                <input type="text" name="primer_nombre" id="primer_nombre" class="disabled-input bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cargue sus datos con su DNI.">
                            </div>
                            <div>
                                <label for="segundo_nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white disabled:bg-blue-gray-0">Segundo nombre</label>
                                <input type="text" name="segundo_nombre" id="segundo_nombre" class="disabled-input bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cargue sus datos con su DNI.">
                            </div>
                            <div>
                                <label for="apellido_paterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white disabled:bg-blue-gray-0">Apellido paterno</label>
                                <input type="text" name="apellido_paterno" id="apellido_paterno" class="disabled-input bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cargue sus datos con su DNI.">
                            </div>
                            <div>
                                <label for="apellido_materno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white disabled:bg-blue-gray-0">Apellido materno</label>
                                <input type="text" name="apellido_materno" id="apellido_materno" class="disabled-input bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cargue sus datos con su DNI.">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                                <input type="password" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div>
                                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar contraseña</label>
                                <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="use_instructions_is_read" aria-describedby="terms" type="checkbox" name="use_instructions_is_read" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="" value="1">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="terms" class="font-light text-gray-500 dark:text-gray-300"><b>LEER DETENIDAMENTE LAS INSTRUCCIONES DE USO, LA MISMA QUE TIENE VALOR LEGAL (ADMINISTRATIVO INSTITUCIONAL), ENTENDIÉNDOSE COMO NOTIFICADO AL EFECTIVO POLICIAL, SOBRE LAS CONSECUENCIAS ADMINISTRATIVAS DISCIPLINARIAS, QUE PUEDA OCASIONAR SU USO INDEBIDO O INCUMPLIMIENTO DE LAS PRESENTES INSTRUCCIONES.</b>
                                    1. Su contraseña es PERSONAL, SECRETO e INTRANSFERIBLE, la misma que tiene vigencia de un año para los efectivos policiales y para el personal civil-médicos el periodo que indique su contrato/orden de servicios.
                                    2. El USUARIO deberá cambiar la contraseña Temporal en el primer inicio de sesión por una contraseña que cumpla con las medidas de seguridad correspondientes (combinaciones de letras, números y signos mayor a ocho dígitos, etc.) por ejemplo Contraseña22*
                                    3. Toda acción que realice en la plataforma virtual, está sujeta a AUDITORIA por los diferentes órganos de investigación.
                                    4. Todo efectivo policial que pase a la SITUACIÓN DE DISPONIBILIDAD o RETIRO, comunicará inmediatamente a esta UNITIC-DIRSAPOL, para DESACTIVAR TEMPORALMENTE o DEFINITIVAMENTE su cuenta de usuario.
                                    5. Todo PERSONAL CIVIL que deje de laborar en la DIRSAPOL, su unidad correspondiente deberá comunicar inmediatamente, para DESACTIVAR su cuenta de usuario.</label>
                                </div>
                            </div>
                            <button type="submit" class="w-full text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                        </form>
                    </div>
                </div>
            </div>
          </section>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/cargar-info-dni.js') }}"></script>
@endsection
