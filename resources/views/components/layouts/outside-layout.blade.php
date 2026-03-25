<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}} {{empty($subtitle) ? '' : ' | ' . $subtitle }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    @vite('resources/css/app.css')

    {{-- fontawesome 6.x --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

</head>
<body class="bg-zinc-200 h-screen overflow-hidden">
    
    <div class="p-4">

        {{ $slot }}
        
    </div>
    


</body>
</html>