@extends('plantilla')
@section('content')
    

 
        <?php
        $etiquetas = ['red' => 'online', 'yellow' => 'internet', 'green' => 'education'];
        $subtih = "A comprehensive guide about online education - Bienvenida";
        ?>
           <x-dynamic-component component="nav2">
        </x-dynamic-component>

        <div class="container mx-auto-mt-5-px-80 ">

            <x-alert class="bg-green-500 " color="green">
                <x-slot name="titulo">
                    Bienvenida
                </x-slot>
                Esto es la página de bienvenida...
            </x-alert>
    
            <x-form margin="mb-5">
                Card number - Bienvenida
                <x-slot name="content">
                    Expire date - Bienvenida
                </x-slot>
            </x-form>

        
            <x-card :subtitulo="$subtih" :tags="$etiquetas" color="green"  class="border-2 border-green-600">
                
                Bienvenida.
                <x-slot name="contenido">
                    It is difficult to believe that we have become so used to having
                    instant access to information at Bienvenida...
                </x-slot>
            </x-card>
        </div>
 
        @endsection