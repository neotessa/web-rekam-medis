<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js" defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            initFlowbite();
            });

            // For Inertia.js, reinitialize after each navigation
            document.addEventListener('inertia:navigate', function() {
            initFlowbite();
            });

            function initFlowbite() {
            if (typeof flowbite !== 'undefined') {
                flowbite.initDropdowns();
                flowbite.initModals();
                // Initialize other components as needed
            }
            }
        </script>


        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @vite(['resources/css/app.css','resources/js/app.js'])
        @inertiaHead

    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
