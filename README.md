# Site PPGEM - UFRN

## 📋 Descrição do Projeto

Site institucional do Programa de Pós-Graduação em Estudos da Mídia (PPGEM) da Universidade Federal do Rio Grande do Norte (UFRN). Desenvolvido com HTML5 semântico e Tailwind CSS, seguindo as melhores práticas de acessibilidade e desenvolvimento frontend moderno.

## 🎯 Características Principais

### Tecnologias Utilizadas
- **HTML5 Semântico**: Estrutura com tags semânticas adequadas
- **Tailwind CSS**: Framework CSS utilitário para estilização responsiva
- **Font Awesome 6**: Biblioteca de ícones
- **Google Fonts (Roboto)**: Tipografia moderna e legível

### Acessibilidade (WCAG 2.1 - Nível AA)

#### ✅ Implementações de Acessibilidade

1. **Navegação por Teclado**
   - Todos os elementos interativos são acessíveis via teclado
   - Estados de foco visíveis com `focus:ring-2 focus:ring-blue-500`
   - Link "Pular para conteúdo principal" (skip link)

2. **ARIA (Accessible Rich Internet Applications)**
   - `aria-label` em botões e links sem texto visível
   - `aria-expanded` em elementos expansíveis (menu mobile, FAQ)
   - `aria-controls` vinculando botões a seus conteúdos
   - `aria-labelledby` em seções principais
   - `aria-hidden="true"` em ícones decorativos

3. **Estrutura Semântica**
   - Tags HTML5 semânticas: `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`
   - Hierarquia correta de headings (h1-h6)
   - Landmarks ARIA implícitos através de tags semânticas

4. **Elementos Temporais e Datas**
   - Tag `<time>` com atributo `datetime` para datas
   - Formato ISO 8601 para máquina + formato legível para humanos

5. **Imagens e Alternativas**
   - Atributos `alt` descritivos em todas as imagens
   - Uso de `.sr-only` para texto apenas para leitores de tela

6. **Contraste e Legibilidade**
   - Cores com contraste mínimo de 4.5:1 (texto normal)
   - Contraste de 3:1 para textos grandes
   - Tamanhos de fonte adequados (mínimo 14px para corpo do texto)

7. **Formulários**
   - Labels associados aos campos (`<label for="...">`)
   - Atributo `role="search"` em formulários de busca
   - Placeholders informativos mas não substituem labels

8. **Responsive Design**
   - Layout mobile-first
   - Breakpoints do Tailwind: `sm:`, `md:`, `lg:`, `xl:`
   - Touch targets com tamanho mínimo de 44x44px

## 📱 Seções do Site

### 1. Header
- Logo do programa
- Menu de navegação responsivo
- Barra de acessibilidade (contraste, tamanho de fonte)
- Links para redes sociais
- Campo de busca

### 2. Hero Section
- Banner principal com destaque para conteúdo em vídeo/palestra
- Sidebar com notícias recentes e editais
- Layout em grid responsivo

### 3. Apresentação do Programa
- Logo centralizado
- Texto institucional
- Links rápidos para seções principais (Coordenação, Secretaria, Docentes, Alumni, Linhas de Pesquisa)

### 4. Editais
- Lista de editais com datas
- Destaque visual para informações importantes
- Botão de acesso a editais anteriores

### 5. Feed de Notícias
- Cards de notícias com imagens
- Categorias e datas
- Efeito hover suave
- Layout em grid responsivo (1, 2 ou 3 colunas)

### 6. Serviços
- Ícones clicáveis para serviços do programa
- Layout em grid de 5 colunas (responsivo)
- Efeitos de hover interativos

### 7. FAQ (Perguntas Frequentes)
- Acordeão expansível
- Ícones animados
- Apenas uma pergunta aberta por vez

### 8. Footer
- Links organizados por categoria
- Informações de contato
- Endereço completo
- Links para redes sociais
- Copyright

## 🎨 Sistema de Design

### Paleta de Cores
- **Azul Principal**: `#1e5a8e`, `#2b7ac4`, `#3b82f6` (blue-600)
- **Azul Escuro**: `#1e40af` (blue-800), `#1e3a8a` (blue-900)
- **Cinza**: `#f9fafb` (gray-50), `#f3f4f6` (gray-100), `#6b7280` (gray-500)
- **Branco**: `#ffffff`
- **Verde Destaque**: `#10b981` (green-500) - para cards especiais

### Tipografia
- **Família**: Roboto (Google Fonts)
- **Pesos**: 300 (Light), 400 (Regular), 500 (Medium), 700 (Bold)
- **Tamanhos Base**: 
  - Body: 16px (base do Tailwind)
  - Headings: 24px-48px (variável por seção)
  - Small: 14px, 12px

### Espaçamento
- Seguindo escala do Tailwind: 4px, 8px, 12px, 16px, 24px, 32px, 48px, 64px

### Componentes Reutilizáveis
- Cards de notícias
- Botões (primário, secundário, outline)
- Items de lista (editais)
- Acordeões (FAQ)
- Ícones de serviços

## 🚀 Como Usar

### Pré-requisitos
- Navegador web moderno (Chrome, Firefox, Safari, Edge)
- Conexão com internet (para CDNs)

### Instalação
1. Clone ou baixe o arquivo `ppgem-home.html`
2. Abra o arquivo em qualquer navegador web
3. Não requer compilação ou build

### CDNs Utilizadas
```html
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
```

## 📦 Estrutura de Código

### HTML Semântico
```html
<header> → Cabeçalho do site
  <nav> → Navegação principal
<main> → Conteúdo principal
  <section> → Seções do site
    <article> → Conteúdo independente (notícias, editais)
    <aside> → Conteúdo complementar
<footer> → Rodapé
```

### Classes Tailwind Principais
- **Layout**: `container`, `mx-auto`, `px-4`, `grid`, `flex`
- **Responsive**: `sm:`, `md:`, `lg:`, `xl:`
- **Espaçamento**: `p-*`, `m-*`, `space-*`
- **Cores**: `bg-*`, `text-*`, `border-*`
- **Tipografia**: `text-*`, `font-*`, `leading-*`
- **Estados**: `hover:`, `focus:`, `active:`

## ♿ Checklist de Acessibilidade

- [x] Skip link para conteúdo principal
- [x] Hierarquia correta de headings (h1-h6)
- [x] Alt text em todas as imagens
- [x] Labels em todos os campos de formulário
- [x] ARIA labels onde necessário
- [x] Contraste de cores adequado (WCAG AA)
- [x] Navegação por teclado funcional
- [x] Estados de foco visíveis
- [x] Landmarks semânticos (header, nav, main, footer)
- [x] Lang attribute no HTML
- [x] Meta viewport para responsividade
- [x] Texto redimensionável
- [x] Links descritivos
- [x] Elementos interativos com tamanho adequado (44x44px)

## 🔧 Melhorias Futuras Sugeridas

1. **Performance**
   - Implementar lazy loading para imagens
   - Minificar CSS e JavaScript
   - Otimizar imagens (WebP, tamanhos responsivos)

2. **Funcionalidades**
   - Sistema de busca funcional
   - Filtros para notícias e editais
   - Newsletter/Inscrição
   - Modo escuro (dark mode)

3. **SEO**
   - Meta tags Open Graph
   - Schema.org markup
   - Sitemap XML
   - Robots.txt

4. **Backend**
   - CMS para gerenciamento de conteúdo
   - Sistema de notícias dinâmico
   - Banco de dados para editais e publicações

## 📝 Notas Técnicas

### JavaScript Implementado
1. **Menu Mobile**: Toggle do menu em dispositivos móveis
2. **Acordeão FAQ**: Expansão/colapso de perguntas
3. **Smooth Scroll**: Rolagem suave para âncoras

### Boas Práticas Seguidas
- Mobile-first approach
- Progressive enhancement
- Semantic HTML5
- BEM-like naming (através de classes Tailwind)
- DRY (Don't Repeat Yourself) principles
- Separation of concerns

## 📄 Licença

Projeto acadêmico desenvolvido para a disciplina de Desenvolvimento Web - UFRN.

## 👨‍💻 Desenvolvedor

**Cesimar**  
Desenvolvedor Web - UFRN  
Disciplina: Prof. Jean Mário

---

**Data de Criação**: Novembro 2025  
**Versão**: 1.0.0
