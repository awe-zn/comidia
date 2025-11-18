# Guia de Acessibilidade - Site PPGEM

## 📘 Visão Geral

Este documento detalha todas as implementações de acessibilidade do site PPGEM, seguindo as Diretrizes de Acessibilidade para Conteúdo Web (WCAG) 2.1 - Nível AA.

## 🎯 Princípios POUR

### 1. **P**erceptível
Os usuários devem ser capazes de perceber as informações apresentadas.

### 2. **O**perável  
Os componentes da interface devem ser operáveis por todos.

### 3. **U**nderstandable (Compreensível)
As informações e operações devem ser compreensíveis.

### 4. **R**obust (Robusto)
O conteúdo deve ser robusto o suficiente para funcionar com tecnologias assistivas.

---

## 🔍 Implementações Detalhadas

### 1. Navegação por Teclado

#### ✅ Skip Link (Pular para conteúdo)
```html
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-blue-600 text-white px-4 py-2 rounded z-50">
    Pular para o conteúdo principal
</a>
```

**Benefícios:**
- Usuários de teclado podem ir direto ao conteúdo
- Evita navegação repetitiva por menus
- Aparece apenas no foco (não prejudica design)

#### ✅ Estados de Foco Visíveis
```html
<!-- Exemplo de implementação -->
class="focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
```

**Teclas de Navegação:**
- `Tab`: Avançar entre elementos
- `Shift + Tab`: Retroceder entre elementos
- `Enter`: Ativar links e botões
- `Space`: Ativar botões e checkboxes
- `Esc`: Fechar modais e menus

### 2. ARIA (Accessible Rich Internet Applications)

#### Landmarks (Marcos de Navegação)
```html
<header>        <!-- role="banner" implícito -->
<nav>           <!-- role="navigation" implícito -->
<main>          <!-- role="main" implícito -->
<aside>         <!-- role="complementary" implícito -->
<footer>        <!-- role="contentinfo" implícito -->
<section>       <!-- role="region" quando tem aria-labelledby -->
```

#### ARIA Labels e Descriptions
```html
<!-- Botão sem texto visível -->
<button aria-label="Buscar no site">
    <i class="fas fa-search"></i>
</button>

<!-- Seção com título -->
<section aria-labelledby="news-title">
    <h2 id="news-title">Notícias</h2>
</section>

<!-- Elemento expandível -->
<button aria-expanded="false" aria-controls="menu-mobile">
    Menu
</button>
```

#### ARIA Hidden
```html
<!-- Ícones decorativos -->
<i class="fas fa-star" aria-hidden="true"></i>

<!-- Texto visualmente escondido mas acessível -->
<span class="sr-only">Texto para leitores de tela</span>
```

### 3. Estrutura Semântica

#### Hierarquia de Headings
```html
<h1>Site PPGEM</h1>              <!-- Título principal (apenas 1) -->
  <h2>Seção Principal</h2>        <!-- Subtítulos -->
    <h3>Subseção</h3>             <!-- Sub-subtítulos -->
      <h4>Detalhes</h4>           <!-- Níveis mais específicos -->
```

**❌ Erros Comuns:**
```html
<!-- NÃO fazer: pular níveis -->
<h1>Título</h1>
<h3>Subtítulo</h3>  <!-- Pulou o h2! -->

<!-- NÃO fazer: usar headings por estilo -->
<h4 class="text-3xl">...</h4>  <!-- Use h2 e estilize com classes -->
```

**✅ Boas Práticas:**
```html
<!-- Fazer: sequência lógica -->
<h1>Título Principal</h1>
<h2>Seção 1</h2>
  <h3>Subseção 1.1</h3>
  <h3>Subseção 1.2</h3>
<h2>Seção 2</h2>
```

### 4. Imagens e Alternativas de Texto

#### Alt Text Descritivo
```html
<!-- ✅ Correto: descrição significativa -->
<img src="evento.jpg" alt="Palestra sobre Comunicação Digital com Prof. Dr. João Silva no auditório CCHLA">

<!-- ✅ Correto: imagem decorativa -->
<img src="decoracao.png" alt="" role="presentation">

<!-- ❌ Incorreto: alt vazio em imagem informativa -->
<img src="mapa.jpg" alt="">

<!-- ❌ Incorreto: alt genérico -->
<img src="foto.jpg" alt="Imagem">
```

#### Quando usar alt vazio (alt="")
- Imagens puramente decorativas
- Imagens repetidas (já descritas no contexto)
- Ícones acompanhados de texto equivalente

### 5. Formulários Acessíveis

#### Labels Associados
```html
<!-- ✅ Correto: label associado explicitamente -->
<label for="email">E-mail:</label>
<input type="email" id="email" name="email">

<!-- ✅ Correto: label envolvendo input -->
<label>
    E-mail:
    <input type="email" name="email">
</label>

<!-- ❌ Incorreto: sem label -->
<input type="email" placeholder="E-mail">  <!-- Placeholder não substitui label! -->
```

#### Campos Obrigatórios
```html
<!-- Indicação visual e para leitores de tela -->
<label for="nome">
    Nome <span class="text-red-500" aria-label="obrigatório">*</span>
</label>
<input type="text" id="nome" required aria-required="true">
```

#### Mensagens de Erro
```html
<label for="email">E-mail:</label>
<input 
    type="email" 
    id="email" 
    aria-describedby="email-error"
    aria-invalid="true"
>
<span id="email-error" class="text-red-600" role="alert">
    Por favor, insira um e-mail válido.
</span>
```

### 6. Contraste de Cores

#### Requisitos WCAG AA
- **Texto Normal** (< 18pt): Contraste mínimo de 4.5:1
- **Texto Grande** (≥ 18pt ou 14pt bold): Contraste mínimo de 3:1
- **Componentes UI**: Contraste mínimo de 3:1

#### Verificação de Contraste
```css
/* Exemplo: texto cinza escuro em fundo branco */
color: #374151;  /* gray-700 */
background: #ffffff;
/* Contraste: 10.88:1 ✅ Passa AA e AAA */

/* Exemplo: texto azul em fundo branco */
color: #2563eb;  /* blue-600 */
background: #ffffff;
/* Contraste: 5.14:1 ✅ Passa AA */
```

**Ferramentas para Testar:**
- WebAIM Contrast Checker
- Chrome DevTools (Lighthouse)
- WAVE Browser Extension

### 7. Elementos Interativos

#### Tamanho Mínimo de Toque
- **Tamanho mínimo**: 44x44 pixels (WCAG 2.1 AAA)
- **Recomendado**: 48x48 pixels (Material Design)

```html
<!-- ✅ Botão com tamanho adequado -->
<button class="px-6 py-3 min-w-[44px] min-h-[44px]">
    Clique Aqui
</button>

<!-- ✅ Link com área clicável maior -->
<a href="#" class="inline-block py-3 px-4">
    Ver mais
</a>
```

#### Links Descritivos
```html
<!-- ❌ Incorreto: link genérico -->
<a href="#">Clique aqui</a>

<!-- ✅ Correto: link descritivo -->
<a href="/edital-2025.pdf">Baixar Edital 2025 (PDF, 2MB)</a>

<!-- ✅ Correto: contexto fornecido -->
<article>
    <h3>Novo Processo Seletivo</h3>
    <p>Inscrições abertas para mestrado...</p>
    <a href="/edital">Leia mais sobre o processo seletivo</a>
</article>
```

### 8. Conteúdo Dinâmico

#### Live Regions
```html
<!-- Notificação dinâmica -->
<div role="alert" aria-live="assertive">
    Sua inscrição foi confirmada!
</div>

<!-- Atualização suave -->
<div aria-live="polite" aria-atomic="true">
    <p>5 novos resultados encontrados</p>
</div>
```

**Valores de aria-live:**
- `off`: Não anunciar (padrão)
- `polite`: Anunciar quando usuário terminar tarefa atual
- `assertive`: Anunciar imediatamente (usar com moderação)

#### Loading States
```html
<!-- Indicador de carregamento -->
<button disabled aria-busy="true">
    <span class="sr-only">Carregando...</span>
    <i class="fas fa-spinner fa-spin"></i>
</button>
```

### 9. Tabelas Acessíveis

```html
<table>
    <caption>Lista de Docentes por Linha de Pesquisa</caption>
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Linha de Pesquisa</th>
            <th scope="col">Lattes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Prof. Dr. João Silva</th>
            <td>Comunicação e Cultura</td>
            <td><a href="#">Link</a></td>
        </tr>
    </tbody>
</table>
```

### 10. Vídeos e Multimídia

#### Requisitos de Acessibilidade
```html
<video controls>
    <source src="video.mp4" type="video/mp4">
    <track kind="captions" src="legendas-pt.vtt" srclang="pt" label="Português" default>
    <track kind="descriptions" src="descricoes.vtt" srclang="pt" label="Audiodescrição">
</video>
```

**Checklist para Vídeos:**
- [ ] Legendas/closed captions
- [ ] Transcrição textual
- [ ] Audiodescrição (quando relevante)
- [ ] Controles acessíveis via teclado
- [ ] Opção de pausar/parar

---

## 🧪 Testes de Acessibilidade

### Testes Manuais

#### 1. Teste de Teclado
- [ ] Navegue pelo site usando apenas TAB, SHIFT+TAB, ENTER, SPACE
- [ ] Verifique se todos os elementos interativos são alcançáveis
- [ ] Confirme que o foco é sempre visível
- [ ] Teste shortcuts de teclado (se houver)

#### 2. Teste de Leitor de Tela
**Ferramentas:**
- **NVDA** (Windows - Gratuito)
- **JAWS** (Windows - Pago)
- **VoiceOver** (macOS/iOS - Nativo)
- **TalkBack** (Android - Nativo)

**Como testar:**
1. Ative o leitor de tela
2. Navegue usando comandos do leitor
3. Verifique se todo conteúdo é anunciado corretamente
4. Teste formulários e elementos interativos

#### 3. Teste de Zoom
- [ ] Aumente zoom para 200%
- [ ] Verifique se o layout não quebra
- [ ] Confirme que texto não é cortado
- [ ] Teste scrolling horizontal (não deve existir)

#### 4. Teste de Contraste
- [ ] Use extensão ou ferramenta de contraste
- [ ] Verifique todos os textos
- [ ] Teste estados (hover, focus, active)

### Testes Automatizados

#### Ferramentas Recomendadas

**1. Lighthouse (Chrome DevTools)**
```bash
# Via Chrome DevTools > Lighthouse > Accessibility
```

**2. axe DevTools**
```bash
# Extensão: axe DevTools (Chrome/Firefox)
```

**3. WAVE**
```bash
# Web: https://wave.webaim.org
# Extensão: WAVE Browser Extension
```

**4. Pa11y CI**
```bash
npm install -g pa11y-ci
pa11y-ci https://seu-site.com
```

---

## 📋 Checklist Completa WCAG 2.1 AA

### Perceptível

- [ ] 1.1.1 - Conteúdo não textual tem alternativa de texto
- [ ] 1.2.1 - Áudio e vídeo pré-gravados têm alternativas
- [ ] 1.2.2 - Legendas para vídeos pré-gravados
- [ ] 1.2.3 - Audiodescrição ou alternativa de mídia
- [ ] 1.3.1 - Info e relações expressas programaticamente
- [ ] 1.3.2 - Sequência significativa mantida
- [ ] 1.3.3 - Instruções não dependem de características sensoriais
- [ ] 1.4.1 - Cor não é única forma de transmitir informação
- [ ] 1.4.2 - Controle de áudio automático
- [ ] 1.4.3 - Contraste mínimo de 4.5:1
- [ ] 1.4.4 - Redimensionamento de texto até 200%
- [ ] 1.4.5 - Imagens de texto evitadas
- [ ] 1.4.10 - Reflow até 400% sem scroll horizontal
- [ ] 1.4.11 - Contraste de elementos não textuais (3:1)
- [ ] 1.4.12 - Espaçamento de texto ajustável
- [ ] 1.4.13 - Conteúdo em hover/focus é acessível

### Operável

- [ ] 2.1.1 - Funcionalidade via teclado
- [ ] 2.1.2 - Sem armadilhas de teclado
- [ ] 2.1.4 - Atalhos de teclado customizáveis
- [ ] 2.2.1 - Timing ajustável
- [ ] 2.2.2 - Pausar, parar, ocultar movimento
- [ ] 2.3.1 - Sem três flashes por segundo
- [ ] 2.4.1 - Mecanismo para pular blocos
- [ ] 2.4.2 - Título de página descritivo
- [ ] 2.4.3 - Ordem de foco lógica
- [ ] 2.4.4 - Propósito do link identificável
- [ ] 2.4.5 - Múltiplas formas de localizar páginas
- [ ] 2.4.6 - Headings e labels descritivos
- [ ] 2.4.7 - Foco visível
- [ ] 2.5.1 - Gestos de toque com alternativas
- [ ] 2.5.2 - Cancelamento de ponteiro
- [ ] 2.5.3 - Label no nome acessível
- [ ] 2.5.4 - Ativação por movimento com alternativa

### Compreensível

- [ ] 3.1.1 - Idioma da página definido
- [ ] 3.1.2 - Idioma de partes identificado
- [ ] 3.2.1 - Ao receber foco não muda contexto
- [ ] 3.2.2 - Ao receber entrada não muda contexto
- [ ] 3.2.3 - Navegação consistente
- [ ] 3.2.4 - Identificação consistente
- [ ] 3.3.1 - Identificação de erro
- [ ] 3.3.2 - Labels ou instruções fornecidas
- [ ] 3.3.3 - Sugestão de correção de erro
- [ ] 3.3.4 - Prevenção de erros (legal, financeiro)

### Robusto

- [ ] 4.1.1 - Parsing sem erros
- [ ] 4.1.2 - Nome, função, valor programáticos
- [ ] 4.1.3 - Mensagens de status programáticas

---

## 🛠️ Ferramentas e Recursos

### Extensões de Navegador
- **WAVE Evaluation Tool**
- **axe DevTools**
- **Lighthouse**
- **HeadingsMap**
- **Web Developer Toolbar**

### Validadores
- [W3C Markup Validator](https://validator.w3.org/)
- [W3C CSS Validator](https://jigsaw.w3.org/css-validator/)
- [AChecker](https://achecker.achecks.ca/)

### Leitores de Tela
- [NVDA](https://www.nvaccess.org/) - Windows (Free)
- [VoiceOver](https://www.apple.com/accessibility/voiceover/) - macOS/iOS (Built-in)
- [TalkBack](https://support.google.com/accessibility/android) - Android (Built-in)

### Recursos de Aprendizado
- [W3C WAI Tutorials](https://www.w3.org/WAI/tutorials/)
- [WebAIM Articles](https://webaim.org/articles/)
- [A11y Project Checklist](https://www.a11yproject.com/checklist/)
- [MDN Accessibility](https://developer.mozilla.org/en-US/docs/Web/Accessibility)

---

## 📚 Glossário de Termos

**Tecnologia Assistiva**: Software ou hardware usado por pessoas com deficiência (leitores de tela, teclados adaptados, etc.)

**Leitor de Tela**: Software que lê conteúdo da tela em voz alta

**Landmarks**: Regiões da página identificáveis (header, nav, main, footer)

**Focus Visible**: Indicador visual quando elemento está em foco

**Skip Link**: Link que permite pular para conteúdo principal

**Alt Text**: Texto alternativo para imagens

**ARIA**: Accessible Rich Internet Applications - especificação W3C

**Contraste**: Diferença de luminosidade entre texto e fundo

**Reflow**: Reorganização do conteúdo ao aumentar zoom

---

## 📞 Suporte e Dúvidas

Para dúvidas sobre acessibilidade no projeto PPGEM:
- E-mail: ppgem@cchla.ufrn.br
- Telefone: +55 (84) 3342-2231

Para reportar problemas de acessibilidade:
- Criar issue no repositório do projeto
- Enviar feedback através do formulário de contato

---

**Última atualização**: Novembro 2025  
**Versão**: 1.0.0  
**Conformidade**: WCAG 2.1 Nível AA
