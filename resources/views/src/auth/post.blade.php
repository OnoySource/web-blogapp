<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <title>@yield('title','Form post')</title>

  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    *{
      borer:2px solid red;
    }
  </style>
</head>
<body class="text-slate-700 bg-white text-sm text-base lg:text-lg  ">
   <section class="p-8 lg:p-4 mx-auto lg:max-w-screen-lg">
    @livewire('post')
   </section>
  </body>
</html>