function handleEdital(editalID) {
  const listaDeEditais = document.querySelectorAll('[data-edital]');
  const editalClicado = document.querySelector(`[data-edital='${editalID}']`);

  listaDeEditais.forEach((edital) => {
    if (edital != editalClicado) {
      edital.classList.add('is-close');
    }
  });

  editalClicado.classList.toggle('is-close');
}
