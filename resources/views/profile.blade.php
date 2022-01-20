@extends('plantilla')
@section('content')
    

        
        <?php
        $etiquetas = ['red' => 'online', 'blue' => 'internet', 'green' => 'education'];
        $subtih = "A comprehensive guide about online education - Bienvenida";
        ?>
          <x-dynamic-component component="nav1">
        </x-dynamic-component>
       
      <div class="container mx-auto-mt-5-px-80 ">
    
        <x-alert class="bg-blue-500" color="blue">
            <x-slot name="titulo">
                Perfil
            </x-slot>
            Esto es la página del perfil...
        </x-alert>

        <x-form color="blue" margin="mb-5">
            Card number - Perfil
            <x-slot name="content">
                Expire date -Perfil
            </x-slot>
        </x-form>
           
       
          <x-card :subtitulo="$subtih" :tags="$etiquetas" color="blue" class="border-2 border-blue-600 border-double border-4 ">
              Perfil
              
          <x-slot name="contenido">
            It is difficult to believe that we have become so used to having
            instant access to information at Perfil...

          </x-slot>
      
          </x-card>
      </div>
    
 @endsection