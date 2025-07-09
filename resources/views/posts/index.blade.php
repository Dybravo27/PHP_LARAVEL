<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cards</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-[#111111] text-[#F6F6F6] font-sans">
  <section class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($posts as $item)
    <div class="bg-[#2F2F2F] border border-[#FFCB74] rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
      
      <div class="aspect-[3/2]">
        <img src="{{ $item->imageable->path ?? '' }}" alt="Imagen"
             class="w-full h-full object-cover rounded-t-xl" />
      </div>
      
      <div class="p-4">
        <div class="mb-2">
          <h1 class="text-lg font-bold text-[#FFCB74]">{{$item->title}}</h1>
        </div>
        <div class="">
          <p class="text-sm">{{$item->body}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </section>
</body>
</html>
