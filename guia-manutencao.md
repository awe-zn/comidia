# Guia de Manutenção e Boas Práticas - PPGEM

## 📖 Introdução

Este documento serve como referência para manutenção e evolução do site PPGEM, garantindo consistência, qualidade e acessibilidade nas futuras atualizações.

---

## 🎨 Padrões de Design

### Sistema de Cores

#### Cores Principais
```css
/* Azul Institucional */
--primary-blue: #2563eb;      /* blue-600 */
--primary-blue-dark: #1e40af; /* blue-800 */
--primary-blue-light: #60a5fa;/* blue-400 */

/* Cinzas */
--gray-50: #f9fafb;
--gray-100: #f3f4f6;
--gray-200: #e5e7eb;
--gray-600: #4b5563;
--gray-700: #374151;
--gray-800: #1f2937;

/* Cores de Feedback */
--success: #10b981;  /* green-500 */
--warning: #f59e0b;  /* yellow-500 */
--error: #ef4444;    /* red-500 */
--info: #3b82f6;     /* blue-500 */
```

#### Quando Usar Cada Cor

**Azul Primário (`blue-600`)**: 
- Botões de ação principal
- Links importantes
- Destaques de navegação
- Títulos principais

**Azul Escuro (`blue-800/900`)**:
- Headers e footers
- Backgrounds de destaque
- Texto sobre fundos claros

**Cinzas**:
- Texto corpo (`gray-700`)
- Backgrounds sutis (`gray-50/100`)
- Borders (`gray-200/300`)
- Texto secundário (`gray-600`)

**Cores de Feedback**:
- Verde: Sucesso, confirmações
- Amarelo: Avisos, atenção
- Vermelho: Erros, ações destrutivas
- Azul: Informações neutras

### Tipografia

#### Hierarquia de Texto
```html
<!-- Títulos de Página -->
<h1 class="text-4xl font-bold">Título Principal</h1>

<!-- Títulos de Seção -->
<h2 class="text-3xl font-bold">Seção</h2>

<!-- Subtítulos -->
<h3 class="text-2xl font-bold">Subseção</h3>

<!-- Títulos Menores -->
<h4 class="text-xl font-semibold">Detalhes</h4>

<!-- Texto Corpo -->
<p class="text-base leading-relaxed">Parágrafo normal</p>

<!-- Texto Pequeno -->
<span class="text-sm text-gray-600">Informação secundária</span>

<!-- Texto Muito Pequeno -->
<span class="text-xs text-gray-500">Metadados</span>
```

#### Peso das Fontes
- `font-light (300)`: Nunca em textos menores que 16px
- `font-normal (400)`: Texto corpo padrão
- `font-medium (500)`: Destaque sutil
- `font-semibold (600)`: Subtítulos
- `font-bold (700)`: Títulos principais

### Espaçamento

#### Margem e Padding
```css
/* Escala recomendada (baseada em 4px) */
2 = 0.5rem = 8px
3 = 0.75rem = 12px
4 = 1rem = 16px
6 = 1.5rem = 24px
8 = 2rem = 32px
12 = 3rem = 48px
16 = 4rem = 64px

/* Uso recomendado */
/* Entre seções: py-12 ou py-16 */
/* Cards: p-6 ou p-8 */
/* Botões: px-6 py-3 */
/* Containers: px-4 (mobile) */
```

#### Container
```html
<!-- Sempre use container com margens automáticas -->
<div class="container mx-auto px-4">
    <!-- Conteúdo -->
</div>
```

### Componentes

#### Botões

**Primário**
```html
<button class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    Ação Principal
</button>
```

**Secundário**
```html
<button class="bg-white text-blue-600 border-2 border-blue-600 px-6 py-3 rounded-full hover:bg-blue-50 transition font-medium focus:outline-none focus:ring-2 focus:ring-blue-500">
    Ação Secundária
</button>
```

**Outline**
```html
<button class="border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full hover:border-blue-600 hover:text-blue-600 transition font-medium focus:outline-none focus:ring-2 focus:ring-blue-500">
    Ação Terciária
</button>
```

**Tamanhos**
```html
<!-- Pequeno -->
<button class="px-4 py-2 text-sm">Pequeno</button>

<!-- Médio (padrão) -->
<button class="px-6 py-3 text-base">Médio</button>

<!-- Grande -->
<button class="px-8 py-4 text-lg">Grande</button>
```

#### Cards

**Card Básico**
```html
<div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
    <!-- Conteúdo -->
</div>
```

**Card com Imagem**
```html
<article class="bg-white rounded-lg shadow-md overflow-hidden">
    <img src="..." alt="..." class="w-full h-48 object-cover">
    <div class="p-6">
        <!-- Conteúdo -->
    </div>
</article>
```

#### Formulários

**Campo de Texto**
```html
<div class="mb-4">
    <label for="campo" class="block text-sm font-medium text-gray-700 mb-2">
        Label do Campo
    </label>
    <input 
        type="text" 
        id="campo"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        placeholder="Placeholder opcional"
    >
</div>
```

**Campo com Erro**
```html
<div class="mb-4">
    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
        E-mail
    </label>
    <input 
        type="email" 
        id="email"
        class="w-full px-4 py-2 border-2 border-red-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
        aria-invalid="true"
        aria-describedby="email-error"
    >
    <p id="email-error" class="mt-2 text-sm text-red-600" role="alert">
        Por favor, insira um e-mail válido.
    </p>
</div>
```

---

## 📱 Responsividade

### Breakpoints Tailwind
```css
/* Tailwind Breakpoints */
sm: 640px   /* Tablets pequenos */
md: 768px   /* Tablets */
lg: 1024px  /* Desktops pequenos */
xl: 1280px  /* Desktops */
2xl: 1536px /* Desktops grandes */
```

### Abordagem Mobile-First

**❌ Não Fazer:**
```html
<div class="lg:block md:hidden sm:hidden">
    <!-- Difícil de manter -->
</div>
```

**✅ Fazer:**
```html
<!-- Começa mobile, adiciona complexidade conforme tela cresce -->
<div class="block lg:flex">
    <!-- Simples e escalável -->
</div>
```

### Exemplos Práticos

**Grid Responsivo**
```html
<!-- 1 coluna mobile, 2 tablet, 3 desktop -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Items -->
</div>
```

**Texto Responsivo**
```html
<!-- Tamanho aumenta com tela -->
<h1 class="text-2xl md:text-3xl lg:text-4xl">
    Título Responsivo
</h1>
```

**Espaçamento Responsivo**
```html
<!-- Padding aumenta em telas maiores -->
<section class="py-8 md:py-12 lg:py-16">
    <!-- Conteúdo -->
</section>
```

**Menu Mobile**
```html
<!-- Menu oculto em mobile, visível em desktop -->
<nav class="hidden lg:flex">
    <!-- Links -->
</nav>

<!-- Botão visível em mobile, oculto em desktop -->
<button class="lg:hidden">
    Menu
</button>
```

---

## ♿ Acessibilidade - Checklist Rápido

### Ao Adicionar Novo Conteúdo

#### Imagens
- [ ] Tem alt text descritivo?
- [ ] Se decorativa, tem alt="" e role="presentation"?

#### Links
- [ ] Texto do link é descritivo?
- [ ] Evita "clique aqui"?
- [ ] Estado de foco é visível?

#### Formulários
- [ ] Todos os campos têm labels?
- [ ] Campos obrigatórios estão marcados?
- [ ] Erros são anunciados?

#### Botões
- [ ] Tem texto ou aria-label?
- [ ] Tamanho mínimo 44x44px?
- [ ] Navegável via teclado?

#### Headings
- [ ] Hierarquia correta (h1 → h2 → h3)?
- [ ] Não pula níveis?

#### Contraste
- [ ] Texto tem contraste mínimo 4.5:1?
- [ ] Elementos UI têm contraste 3:1?

---

## 🔧 Manutenção do Código

### Organização HTML

**Estrutura Padrão**
```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="...">
    <title>Título da Página | PPGEM</title>
    
    <!-- Stylesheets -->
    <!-- Scripts -->
</head>
<body>
    <!-- Skip Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only">
        Pular para o conteúdo principal
    </a>
    
    <!-- Header -->
    <header>...</header>
    
    <!-- Main Content -->
    <main id="main-content">
        <section>...</section>
    </main>
    
    <!-- Footer -->
    <footer>...</footer>
    
    <!-- Scripts -->
</body>
</html>
```

### Comentários no Código

**✅ Bons Comentários**
```html
<!-- Hero Section with Featured News -->
<section class="hero-gradient">
    ...
</section>

<!-- Mobile Navigation - Hidden on desktop -->
<nav id="mobile-menu" class="hidden lg:hidden">
    ...
</nav>
```

**❌ Comentários Desnecessários**
```html
<!-- Div -->
<div>
    ...
</div>

<!-- This is a button -->
<button>Click</button>
```

### Nomeação de IDs e Classes Personalizadas

**Convenções:**
- Use kebab-case: `main-content`, `news-card`
- Seja descritivo: `mobile-menu-button` não `btn1`
- Use prefixos para contexto: `hero-title`, `footer-links`

### JavaScript

**Padrão de Seletores**
```javascript
// ✅ Preferir IDs para elementos únicos
const menuButton = document.getElementById('mobile-menu-button');

// ✅ Usar querySelectorAll para múltiplos elementos
const accordionButtons = document.querySelectorAll('.accordion-button');
```

**Event Listeners**
```javascript
// ✅ Adicionar listeners de forma organizada
function initializeEventListeners() {
    // Mobile menu
    const menuButton = document.getElementById('mobile-menu-button');
    menuButton?.addEventListener('click', toggleMobileMenu);
    
    // Accordions
    const accordions = document.querySelectorAll('.accordion-button');
    accordions.forEach(btn => btn.addEventListener('click', toggleAccordion));
}

// Inicializar quando DOM estiver pronto
document.addEventListener('DOMContentLoaded', initializeEventListeners);
```

---

## 🚀 Performance

### Otimização de Imagens

**Formatos Recomendados:**
- WebP: Melhor compressão (preferencial)
- JPEG: Fotos
- PNG: Logos, ícones (se não for SVG)
- SVG: Ícones, logos simples

**Tamanhos:**
```html
<!-- Use srcset para imagens responsivas -->
<img 
    src="imagem-800w.jpg"
    srcset="imagem-400w.jpg 400w, imagem-800w.jpg 800w, imagem-1200w.jpg 1200w"
    sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw"
    alt="Descrição"
>
```

**Lazy Loading:**
```html
<img src="imagem.jpg" alt="..." loading="lazy">
```

### Carregamento de Fontes

**Google Fonts Otimizado:**
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
```

### CSS

**Evitar @import:**
```css
/* ❌ Lento */
@import url('outro.css');

/* ✅ Use link no HTML */
<link rel="stylesheet" href="outro.css">
```

---

## 🐛 Debugging

### Ferramentas de Desenvolvedor

**Chrome DevTools:**
- Elements: Inspecionar HTML/CSS
- Console: Ver erros JavaScript
- Network: Performance de carregamento
- Lighthouse: Auditoria (Performance, Acessibilidade, SEO)

**Atalhos Úteis:**
- `Ctrl/Cmd + Shift + C`: Inspecionar elemento
- `F12`: Abrir DevTools
- `Ctrl/Cmd + Shift + M`: Toggle device mode (mobile)

### Validação

**HTML:**
```
https://validator.w3.org/
```

**CSS:**
```
https://jigsaw.w3.org/css-validator/
```

**Acessibilidade:**
```
https://wave.webaim.org/
```

---

## 📋 Workflow de Desenvolvimento

### Antes de Começar
1. [ ] Entenda o requisito completamente
2. [ ] Verifique se existe componente similar
3. [ ] Planeje estrutura HTML semântica
4. [ ] Considere acessibilidade desde o início

### Durante o Desenvolvimento
1. [ ] Teste em diferentes navegadores
2. [ ] Teste em diferentes tamanhos de tela
3. [ ] Valide HTML e CSS
4. [ ] Teste navegação por teclado
5. [ ] Verifique contraste de cores

### Antes de Publicar
1. [ ] Teste com leitor de tela
2. [ ] Rode Lighthouse audit
3. [ ] Valide com WAVE
4. [ ] Teste performance (PageSpeed)
5. [ ] Revise código (self-review)

---

## 🔄 Versionamento

### Commit Messages
```bash
# Formato: tipo(escopo): descrição

# Exemplos:
feat(header): adiciona campo de busca
fix(footer): corrige links quebrados
style(cards): ajusta espaçamento dos cards
docs(readme): atualiza instruções de instalação
refactor(nav): reorganiza estrutura de navegação
a11y(forms): adiciona labels faltantes
```

### Branches
```bash
main        # Produção
develop     # Desenvolvimento
feature/*   # Novas funcionalidades
fix/*       # Correções de bugs
hotfix/*    # Correções urgentes
```

---

## 📚 Recursos Úteis

### Documentação
- [Tailwind CSS Docs](https://tailwindcss.com/docs)
- [MDN Web Docs](https://developer.mozilla.org/)
- [W3C Web Accessibility Initiative](https://www.w3.org/WAI/)

### Ferramentas
- [Can I Use](https://caniuse.com/) - Compatibilidade de browsers
- [Contrast Checker](https://webaim.org/resources/contrastchecker/)
- [Responsive Breakpoints](https://responsivebreakpoints.com/)

### Inspiração
- [Dribbble](https://dribbble.com/) - Design
- [CodePen](https://codepen.io/) - Exemplos de código
- [Tailwind Components](https://tailwindcomponents.com/)

---

## 🆘 Problemas Comuns e Soluções

### Problema: Layout quebra no mobile
**Solução:**
```html
<!-- Garanta que container tenha padding horizontal -->
<div class="container mx-auto px-4">
    <!-- Conteúdo -->
</div>

<!-- Use grid responsivo adequado -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Items -->
</div>
```

### Problema: Imagens não carregam
**Solução:**
```html
<!-- Verifique o caminho relativo -->
<img src="/images/foto.jpg" alt="...">

<!-- Forneça sempre alt text -->
<img src="..." alt="Descrição completa da imagem">
```

### Problema: Menu mobile não funciona
**Solução:**
```javascript
// Verifique se IDs estão corretos
const menuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

// Adicione verificação null
if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}
```

### Problema: Foco não é visível
**Solução:**
```html
<!-- Sempre adicione estados de foco -->
<button class="focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
    Botão
</button>
```

---

## 📞 Contato e Suporte

**Para questões técnicas:**
- E-mail: ppgem@cchla.ufrn.br
- Telefone: +55 (84) 3342-2231

**Para questões de acessibilidade:**
- Consulte o `guia-acessibilidade.md`
- Use ferramentas de teste automatizado

**Para componentes adicionais:**
- Consulte o `componentes-extras.md`
- Verifique biblioteca de componentes Tailwind

---

**Última atualização**: Novembro 2025  
**Versão**: 1.0.0  
**Desenvolvedor**: Cesimar - UFRN

---

## 💡 Dicas Finais

1. **Sempre teste em dispositivos reais** quando possível
2. **Priorize acessibilidade** - é mais fácil construir acessível do que corrigir depois
3. **Mantenha consistência** - use os padrões estabelecidos
4. **Documente mudanças significativas**
5. **Peça feedback** de outros desenvolvedores e usuários
6. **Mantenha-se atualizado** com as melhores práticas web

**Lembre-se**: Código bom é código que outros desenvolvedores (ou você mesmo no futuro) conseguem entender e manter facilmente!
