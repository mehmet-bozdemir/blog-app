<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
</head>

<body>
  <header class="bg-gray-800 text-white mb-3">
    <div class="container mx-auto flex flex-col md:flex-row items-center p-3">
      <h4 class="my-0 md:mr-auto font-normal text-lg"><a href="/" class="text-white">BlogApp</a></h4>
      <form action="#" method="POST" class="mb-0 pt-2 md:pt-0">
        <div class="flex flex-col md:flex-row items-center">
          <div class="md:mr-2 mb-3 md:mb-0">
            <input name="loginusername" class="form-control form-control-sm bg-gray-700 text-white border border-gray-600 rounded px-2 py-1" type="text"
              placeholder="Username" autocomplete="off" />
          </div>
          <div class="md:mr-2 mb-3 md:mb-0">
            <input name="loginpassword" class="form-control form-control-sm bg-gray-700 text-white border border-gray-600 rounded px-2 py-1" type="password"
              placeholder="Password" />
          </div>
          <div>
            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-3 py-1 rounded">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </header>
  <!-- header ends here -->

  <main>
    {{ $slot }}
  </main>

  <!-- footer begins -->
  <footer class="border-t text-center text-sm text-gray-500 py-3">
    <p class="m-0">Copyright &copy; 2022 <a href="/" class="text-gray-500 hover:underline">OurApp</a>. All rights reserved.
    </p>
  </footer>
</body>

</html>
