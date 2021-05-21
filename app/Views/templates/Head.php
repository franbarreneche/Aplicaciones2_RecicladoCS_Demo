<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo csrf_token() ?>">

        <title><?php echo config('app.name', 'Laravel') ?></title>

         <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo asset('css/app.css') ?>">

        <!-- Icons -->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" defer></script>
        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }
            .app {
                flex:1;
            }
        </style>
    </head>
