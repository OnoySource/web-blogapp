<!doctype html>
<html lang="en">
<head>
 {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="text-slate-900 bg-white text-sm sm:bg-gree-300 md:bg-blu-300 lg:text-lg">
  @include('layouts.navbar')
  <div id="container" class="p-8 lg:p-8 lg:px-20">
<section class="bg-gren-300  pt-6 sm:p-20 md:p-20 lg:px-20 "> 
  <div class="lg:grid grid-rows-2 grid-flow-col gap-8 ">
    <div class="relative text-justify row-span-2 w-full md:row-span-4 flex flex-col items-center">
     <h1 class="text-lg w-full sm:text-[18px] md:w-full  md:text-xl lg:w-full text-left lg:text-2xl  font-bold -slate-800 ">Penemuan gadis cilik di sebuah kota ternama</h1>
        <br> <br>
        <x-span-sosmed></x-span-sosmed>       
     <br>
      <div class=" w-full h-auto sm:h-auto lg:w-full ">
          <img class="w-full aspect-video md:w-full lg:w-full md:aspect-video lg:aspect-video  object-cover object-center rounded-md shadow-md " src="{{asset('images/pexels-photo-356056.jpeg')}}" alt="">
      </div>
      
      <span class="w-full text-[10px] my-4 text-right">Published &emsp14; : &emsp14; 12 october 2024</span>
      
      <p class="text-sm font-semibold sm:text-sm md:text-base lg:text-lg"> 
        Pendahuluan: Produktivitas di tempat kerja adalah kunci untuk mencapai tujuan bisnis. Namun, banyak faktor yang dapat mengganggu fokus dan efisiensi kerja. Dalam artikel ini, kami akan membahas lima cara efektif untuk meningkatkan produktivitas Anda dan tim Anda.

1. Atur Prioritas Tugas Sebelum memulai hari, luangkan waktu untuk menentukan tugas mana yang paling penting. Gunakan metode seperti Eisenhower Matrix untuk membantu Anda memprioritaskan tugas berdasarkan urgensi dan pentingnya. Dengan demikian, Anda bisa fokus pada apa yang benar-benar penting.

2. Ciptakan Lingkungan Kerja yang Nyaman Lingkungan fisik yang nyaman dapat meningkatkan konsentrasi. Pastikan meja kerja Anda terorganisir dan bebas dari gangguan. Pertimbangkan penggunaan tanaman atau pencahayaan yang baik untuk menciptakan suasana yang mendukung produktivitas.

3. Gunakan Teknologi untuk Mengelola Waktu Ada banyak aplikasi dan alat yang dapat membantu Anda mengelola waktu dengan lebih baik. Aplikasi seperti Trello atau Asana memungkinkan Anda untuk melacak proyek dan tenggat waktu, sementara Pomodoro Technique bisa membantu Anda membagi waktu kerja menjadi sesi yang lebih produktif.

4. Istirahat Secara Teratur Mungkin terdengar kontra-intuitif, tetapi istirahat secara teratur dapat meningkatkan produktivitas. Luangkan waktu sejenak untuk bergerak atau melakukan aktivitas lain. Ini dapat membantu menyegarkan pikiran dan mengurangi kelelahan.

5. Kolaborasi yang Efektif Komunikasi yang baik dalam tim sangat penting untuk menjaga produktivitas. Gunakan alat komunikasi seperti Slack atau Microsoft Teams untuk memudahkan kolaborasi. Pertimbangkan juga untuk mengadakan pertemuan singkat secara rutin untuk memastikan semua orang berada di halaman yang sama.

Kesimpulan: Meningkatkan produktivitas di tempat kerja tidak harus sulit. Dengan menerapkan beberapa strategi sederhana ini, Anda dan tim Anda dapat bekerja lebih efisien dan mencapai tujuan yang telah ditetapkan. Ingat, produktivitas bukan hanya tentang bekerja lebih keras, tetapi juga tentang bekerja lebih cerdash
    <br>
    <div class="w-full h-auto  py-2 text-sm mt-8 md:text-md font-semibold rounded-md">
      <h3 class="">#Tag</h3>
      <p class="cl">#teknologi</p>
    </div>
    
    
</div>
</div> 
</section>
@include('layouts.list-articles')
</div>
@include('layouts.footer')
</body>
</html>