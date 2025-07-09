<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <section class="bg-[#111111] min-h-screen flex items-center justify-center font-sans">
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="bg-[#2F2F2F] p-8 rounded-xl shadow-xl w-full max-w-md text-[#F6F6F6] border border-[#FFCB74]" novalidate>
      @csrf
      <h2 class="text-3xl font-bold mb-6 text-center text-[#FFCB74] tracking-wide">Crear Post</h2>

      <div class="mb-4">
        
        <label for="title" class="block mb-2 text-sm text-[#FFCB74] uppercase">Título</label>
        <input type="text" id="title" name="title" value="{{old("title")}}" 
          class="w-full p-3 rounded-md bg-[#111111] border border-[#FFCB74] text-[#F6F6F6] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#FFCB74] focus:border-[#FFCB74] transition"
          placeholder="Ingresa el título" />
        @error('title')
            <span>{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-6">
        
        <label for="body" class="block mb-2 text-sm text-[#FFCB74] uppercase">Contenido</label>
        <textarea id="body" name="body" rows="6"
          class="w-full p-3 rounded-md bg-[#111111] border border-[#FFCB74] text-[#F6F6F6] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#FFCB74] focus:border-[#FFCB74] transition"
          placeholder="Escribe tu mensaje...">{{old("body")}}</textarea>
        @error('body')
            <span>{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-6">
        <label for="file" class="block mb-2 text-sm text-[#FFCB74] uppercase">Imagen</label>
        <input type="file" id="file" name="file"
          class="w-full p-2 rounded-md bg-[#111111] border border-[#FFCB74] text-[#F6F6F6] focus:outline-none focus:ring-2 focus:ring-[#FFCB74] focus:border-[#FFCB74] transition" accept="image/*" />
        @error('file')
            <span>{{ $message }}</span>
        @enderror
      </div>
      

      <button type="submit"
        class="w-full py-3 bg-[#FFCB74] text-[#111111] font-bold rounded-md hover:bg-[#e6b05f] transition shadow-md">
        Enviar
      </button>
    </form>
  </section>
</body>
</html>