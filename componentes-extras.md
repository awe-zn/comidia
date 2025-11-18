# Componentes Extras - PPGEM

Este arquivo contém componentes adicionais que podem ser utilizados no site do PPGEM.

## 📌 Modal de Busca Avançada

```html
<!-- Modal Overlay -->
<div id="search-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-2xl max-w-2xl w-full mx-4 p-6" role="dialog" aria-labelledby="modal-title" aria-modal="true">
        <div class="flex justify-between items-center mb-4">
            <h2 id="modal-title" class="text-2xl font-bold text-gray-800">Busca Avançada</h2>
            <button class="text-gray-500 hover:text-gray-700" aria-label="Fechar modal">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        
        <form class="space-y-4">
            <div>
                <label for="modal-search" class="block text-sm font-medium text-gray-700 mb-2">Buscar por:</label>
                <input type="text" id="modal-search" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Categoria:</label>
                <select id="category" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Todas</option>
                    <option>Notícias</option>
                    <option>Editais</option>
                    <option>Publicações</option>
                    <option>Docentes</option>
                </select>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="date-from" class="block text-sm font-medium text-gray-700 mb-2">De:</label>
                    <input type="date" id="date-from" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="date-to" class="block text-sm font-medium text-gray-700 mb-2">Até:</label>
                    <input type="date" id="date-to" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            
            <div class="flex justify-end space-x-3 mt-6">
                <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                    Limpar
                </button>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Buscar
                </button>
            </div>
        </form>
    </div>
</div>
```

## 📰 Card de Notícia Variação Horizontal

```html
<article class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row hover:shadow-lg transition">
    <img 
        src="https://via.placeholder.com/300x200" 
        alt="Descrição da notícia"
        class="w-full md:w-1/3 h-48 md:h-auto object-cover"
    >
    <div class="p-6 flex-1">
        <div class="flex items-center space-x-2 mb-3">
            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-bold">EDITAIS</span>
            <time datetime="2025-10-15" class="text-gray-500 text-sm">15.10.2025</time>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
            Título da Notícia em Destaque
        </h3>
        <p class="text-gray-600 mb-4 line-clamp-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua.
        </p>
        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
            Leia mais
            <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</article>
```

## 👨‍🏫 Card de Docente

```html
<article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
    <div class="relative">
        <img 
            src="https://via.placeholder.com/400x300" 
            alt="Foto do Prof. Dr. Nome do Docente"
            class="w-full h-64 object-cover"
        >
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white">
            <h3 class="text-xl font-bold">Prof. Dr. Nome do Docente</h3>
            <p class="text-sm opacity-90">Linha de Pesquisa: Comunicação e Cultura</p>
        </div>
    </div>
    <div class="p-6">
        <div class="flex items-center space-x-4 mb-4">
            <a href="#" class="text-blue-600 hover:text-blue-800" aria-label="Lattes">
                <i class="fas fa-graduation-cap text-xl"></i>
            </a>
            <a href="#" class="text-blue-600 hover:text-blue-800" aria-label="E-mail">
                <i class="fas fa-envelope text-xl"></i>
            </a>
            <a href="#" class="text-blue-600 hover:text-blue-800" aria-label="ResearchGate">
                <i class="fab fa-researchgate text-xl"></i>
            </a>
        </div>
        <p class="text-gray-600 text-sm line-clamp-4">
            Breve biografia e áreas de interesse do docente. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit.
        </p>
        <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium text-sm">
            Ver perfil completo →
        </a>
    </div>
</article>
```

## 📊 Card de Estatísticas

```html
<div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg shadow-xl p-8 text-white">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="text-center">
            <div class="text-4xl font-bold mb-2">150+</div>
            <div class="text-sm opacity-90">Dissertações</div>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold mb-2">80+</div>
            <div class="text-sm opacity-90">Teses</div>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold mb-2">25</div>
            <div class="text-sm opacity-90">Docentes</div>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold mb-2">200+</div>
            <div class="text-sm opacity-90">Publicações</div>
        </div>
    </div>
</div>
```

## 📅 Timeline de Eventos

```html
<div class="max-w-4xl mx-auto">
    <div class="relative">
        <!-- Linha vertical -->
        <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-0.5 bg-blue-200"></div>
        
        <!-- Evento 1 -->
        <div class="relative mb-8 md:flex md:justify-end md:items-center">
            <div class="md:w-5/12 md:pr-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <time datetime="2025-11-15" class="text-blue-600 font-bold">15 de Novembro</time>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2">Defesa de Dissertação</h3>
                    <p class="text-gray-600 text-sm">João Silva - "Título da pesquisa"</p>
                    <p class="text-gray-500 text-xs mt-2">Local: Auditório CCHLA - 14h</p>
                </div>
            </div>
            <div class="absolute left-6 md:left-1/2 md:-ml-4 w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow"></div>
        </div>
        
        <!-- Evento 2 -->
        <div class="relative mb-8 md:flex md:items-center">
            <div class="md:w-5/12 md:ml-auto md:pl-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <time datetime="2025-11-20" class="text-blue-600 font-bold">20 de Novembro</time>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2">Palestra</h3>
                    <p class="text-gray-600 text-sm">Prof. Dr. Maria Santos</p>
                    <p class="text-gray-500 text-xs mt-2">Local: Online - 15h</p>
                </div>
            </div>
            <div class="absolute left-6 md:left-1/2 md:-ml-4 w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow"></div>
        </div>
        
        <!-- Adicionar mais eventos conforme necessário -->
    </div>
</div>
```

## 🔔 Notificação/Alert

```html
<!-- Sucesso -->
<div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-r-lg shadow-md" role="alert">
    <div class="flex items-start">
        <i class="fas fa-check-circle text-green-500 text-2xl mr-3 mt-0.5" aria-hidden="true"></i>
        <div class="flex-1">
            <h4 class="font-bold text-green-800 mb-1">Sucesso!</h4>
            <p class="text-green-700 text-sm">Sua inscrição foi realizada com sucesso.</p>
        </div>
        <button class="text-green-500 hover:text-green-700 ml-4" aria-label="Fechar notificação">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<!-- Aviso -->
<div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded-r-lg shadow-md" role="alert">
    <div class="flex items-start">
        <i class="fas fa-exclamation-triangle text-yellow-500 text-2xl mr-3 mt-0.5" aria-hidden="true"></i>
        <div class="flex-1">
            <h4 class="font-bold text-yellow-800 mb-1">Atenção!</h4>
            <p class="text-yellow-700 text-sm">O prazo de inscrição termina em 3 dias.</p>
        </div>
        <button class="text-yellow-500 hover:text-yellow-700 ml-4" aria-label="Fechar notificação">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<!-- Erro -->
<div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg shadow-md" role="alert">
    <div class="flex items-start">
        <i class="fas fa-times-circle text-red-500 text-2xl mr-3 mt-0.5" aria-hidden="true"></i>
        <div class="flex-1">
            <h4 class="font-bold text-red-800 mb-1">Erro!</h4>
            <p class="text-red-700 text-sm">Não foi possível processar sua solicitação.</p>
        </div>
        <button class="text-red-500 hover:text-red-700 ml-4" aria-label="Fechar notificação">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<!-- Info -->
<div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-lg shadow-md" role="alert">
    <div class="flex items-start">
        <i class="fas fa-info-circle text-blue-500 text-2xl mr-3 mt-0.5" aria-hidden="true"></i>
        <div class="flex-1">
            <h4 class="font-bold text-blue-800 mb-1">Informação</h4>
            <p class="text-blue-700 text-sm">Novo edital publicado. Confira os detalhes.</p>
        </div>
        <button class="text-blue-500 hover:text-blue-700 ml-4" aria-label="Fechar notificação">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
```

## 📖 Breadcrumb

```html
<nav aria-label="Breadcrumb" class="bg-gray-100 py-3 px-4 rounded-lg">
    <ol class="flex items-center space-x-2 text-sm">
        <li>
            <a href="#" class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-home" aria-hidden="true"></i>
                <span class="sr-only">Início</span>
            </a>
        </li>
        <li>
            <i class="fas fa-chevron-right text-gray-400 text-xs" aria-hidden="true"></i>
        </li>
        <li>
            <a href="#" class="text-blue-600 hover:text-blue-800">Notícias</a>
        </li>
        <li>
            <i class="fas fa-chevron-right text-gray-400 text-xs" aria-hidden="true"></i>
        </li>
        <li>
            <span class="text-gray-600" aria-current="page">Título da Notícia</span>
        </li>
    </ol>
</nav>
```

## 🔍 Filtros de Busca

```html
<div class="bg-white rounded-lg shadow-md p-6">
    <h3 class="text-lg font-bold text-gray-800 mb-4">Filtrar Resultados</h3>
    
    <div class="space-y-4">
        <!-- Categoria -->
        <div>
            <h4 class="font-medium text-gray-700 mb-2">Categoria</h4>
            <div class="space-y-2">
                <label class="flex items-center">
                    <input type="checkbox" class="rounded text-blue-600 focus:ring-2 focus:ring-blue-500">
                    <span class="ml-2 text-gray-600">Notícias (45)</span>
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="rounded text-blue-600 focus:ring-2 focus:ring-blue-500">
                    <span class="ml-2 text-gray-600">Editais (12)</span>
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="rounded text-blue-600 focus:ring-2 focus:ring-blue-500">
                    <span class="ml-2 text-gray-600">Publicações (89)</span>
                </label>
            </div>
        </div>
        
        <!-- Ano -->
        <div>
            <h4 class="font-medium text-gray-700 mb-2">Ano</h4>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>2025</option>
                <option>2024</option>
                <option>2023</option>
                <option>2022</option>
            </select>
        </div>
        
        <!-- Botões -->
        <div class="flex space-x-3 pt-4">
            <button class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Limpar
            </button>
            <button class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Aplicar
            </button>
        </div>
    </div>
</div>
```

## 📱 Card de Contato

```html
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex items-center mb-4">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
            <i class="fas fa-envelope text-blue-600 text-xl" aria-hidden="true"></i>
        </div>
        <div class="ml-4">
            <h3 class="font-bold text-gray-800">Entre em Contato</h3>
            <p class="text-sm text-gray-600">Tire suas dúvidas</p>
        </div>
    </div>
    
    <div class="space-y-3 text-sm">
        <div class="flex items-center text-gray-600">
            <i class="fas fa-phone w-5 text-blue-600" aria-hidden="true"></i>
            <a href="tel:+558433422231" class="ml-2 hover:text-blue-600">+55 (84) 3342-2231</a>
        </div>
        <div class="flex items-center text-gray-600">
            <i class="fas fa-envelope w-5 text-blue-600" aria-hidden="true"></i>
            <a href="mailto:ppgem@cchla.ufrn.br" class="ml-2 hover:text-blue-600">ppgem@cchla.ufrn.br</a>
        </div>
        <div class="flex items-center text-gray-600">
            <i class="fas fa-map-marker-alt w-5 text-blue-600" aria-hidden="true"></i>
            <span class="ml-2">Campus Universitário, Natal/RN</span>
        </div>
    </div>
    
    <button class="w-full mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        Enviar Mensagem
    </button>
</div>
```

## 🎓 Badge de Status

```html
<!-- Aberto -->
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
    Inscrições Abertas
</span>

<!-- Encerrado -->
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
    Inscrições Encerradas
</span>

<!-- Em breve -->
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
    <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>
    Em Breve
</span>

<!-- Novo -->
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
    <i class="fas fa-star mr-1" aria-hidden="true"></i>
    Novo
</span>
```

## 🎯 Loading Spinner

```html
<!-- Spinner simples -->
<div class="flex items-center justify-center p-8">
    <div class="animate-spin rounded-full h-12 w-12 border-4 border-blue-200 border-t-blue-600"></div>
</div>

<!-- Com texto -->
<div class="flex flex-col items-center justify-center p-8">
    <div class="animate-spin rounded-full h-12 w-12 border-4 border-blue-200 border-t-blue-600 mb-4"></div>
    <p class="text-gray-600">Carregando...</p>
</div>
```

---

**Nota**: Todos estes componentes seguem as mesmas práticas de acessibilidade e responsividade do site principal. Basta copiar e colar onde necessário, ajustando o conteúdo conforme necessário.
