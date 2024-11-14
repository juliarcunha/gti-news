<x-base> 
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Editar Notícia</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Tem algo errado com a noticia? Altere o necessário para ela ficar correta!</p>
      <form action="{{route('alteraNoticia', $noticia)}}" method="post" class="space-y-8">
        @csrf
          <div>
              <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
              <input type="text" id="titulo" name="titulo" value="{{$noticia->titulo}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-400 focus:border-pink-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500 dark:shadow-sm-light" placeholder="Escreva seu titulo aqui!" required>
          </div>
          <div>
              <label for="resumo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Resumo</label>
              <input type="text" id="resumo" name="resumo" value="{{$noticia->resumo}}" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-pink-400 focus:border-pink-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500 dark:shadow-sm-light" placeholder="Resumo sobre o assunto!" required>
          </div>
          <div>
              <label for="capa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capa</label>
              <input type="text" id="capa" name="capa" value="{{$noticia->capa}}" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-pink-400 focus:border-pink-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500 dark:shadow-sm-light" placeholder="http://site.com/imagem.png" required>
          </div>
          <div class="sm:col-span-2">
              <label for="conteudo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Conteúdo</label>
              <textarea id="conteudo" name="conteudo" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-pink-400 focus:border-pink-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Nos conte sobre seu assunto!">{{$noticia->conteudo}}</textarea>
          </div>
          <a href="{{route('gerenciaNoticias')}}" class="mr-3 py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-red-400 sm:w-fit hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-400 dark:bg-red-400 dark:hover:bg-red-700 dark:focus:ring-pink-400">Voltar</a>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-pink-400 sm:w-fit hover:bg-pink-400 focus:ring-4 focus:outline-none focus:ring-pink-400 dark:bg-pink-400 dark:hover:bg-pink-700 dark:focus:ring-pink-400">Salvar</button>
        </form>
  </div>
</section>






</x-base>