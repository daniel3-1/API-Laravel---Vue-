<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>

    <body>
        
        <div>
            <h1>Mi Aplicación Laravel con Vue.js</h1>
            <example-component></example-component>
        </div>

        <script>
            import ExampleComponent from '@\components\ExampleComponent.vue'; // Importa el componente

            export default {
                components: {
                    'example-component': ExampleComponent, // Registra el componente para su uso
                },  
            };
        </script>
    </body>

</html>
