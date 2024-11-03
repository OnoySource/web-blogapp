<!doctype html>
<html lang="en">
<head>
 {{--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
  <meta charset="utf-8"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['../resources/css/app.css','../resources/js/app.js'])
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body class="text-slate-700 bg-white text-sm text-base lg:text-lg">
    <navbar class="flex  justify-end items-center bg-rd-300 p-2 border-2">
     
      <ul class="flex justify-end  font-semibold items-center gap-4">
        <li class="bg-sky-500 text-white py-2 px-4 rounded-md">
          <a href="">New Post</a>
        </li>
        <li class="bg-grn-300">
          <img class="w-12 h-auto bg-slate-300 mx-auto p-[2px] border-[2px] border-blue-500 rounded-full " src="{{asset('images/user.png')}}" alt="not image">
          <p class="items-center pt-2 text-slate-500">username</p>
        </li>
      </ul>
    </navbar>
    <section class="w-full h-auto p-4 bg-re-200">
        <h1 class="font-semibold text-lg lg:text-xl">Your Posts</h1>
        <div class="py-4">
          <form action="">
            @csrf
            <input type="text"name="search-post"placeholder="Search your posts"class="w-full border-2 p-2 rounded-md bg-slate-100 outline-none">
            <button type="submit" class="w-10 h-auto lg:w-12 p-[4px] hover:bg-gray-200 rounded-r-md absolute right-4 " >
              <img src="{{asset('images/find.png')}}" alt="not image" class="overflow-hidden ">
            </button>
          </form>
        </div>
        <div class="">
          <ul class="flex  border-b-2">
            <li class="bg-rd-400 border-b-2 border-cyan-600 p-[2px]">All</li>
          </ul>
        </div>
        <br>
        <div class="overflow-y-auto max-h-screen   border border-slate-400  drop-shadow-lg">
          <table class="min-w-full border-collapse text-sm lg:text-md px-4">
             <thead class="bg-white drop-shadow-md sticky top-0 z-10"> 
              <tr class="">
                <th class="border border-slate-300 py-2 lg:text-lg ">Title</th>
                <th class="border border-slate-300 py-2 lg:text-lg">Url</th>
                <th class="border border-slate-300 py-2 lg:text-lg">Author</th>
                <th class="border border-slate-300 py-2 lg:text-lg">Views</th>
                <th class="border border-slate-300 py-2 lg:text-lg">Published On</th>
                <th class="border border-slate-300 py-2 lg:text-lg">Action</th>
              </tr>
            </thead>
            @for ($i = 0; $i < 60; $i++)
            <tbody>
              <tr class="">
                <td class="border border-slate-300 px-2 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, veniam.</td>
                <td class="border border-slate-300 text-center py-2">
                  <a href=""class="text-blue-800 font-semibold">-></a>
                </td>
                <td class="border border-slate-300 text-center py-2">triyono</td>
                <td class="border border-slate-300 text-center py-2">10</td>
                <td class="border border-slate-300 text-center py-2">03 june 2024</td>
                <td class="border border-slate-300 text-center py-2">
                  <a href="" class="text-green-400">Edit</a> | <a href="" class="text-red-400">Delete</a>
                </td>
            </tr>
          </tbody>
          @endfor
          </table>
        </div>
    </section>
  </body>
</html>