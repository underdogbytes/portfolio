const certificados = [
  {
    type: "tech",
    src: "images/certificados/2022-arquitetura-redes.jpg",
    alt: "Certificado de Beatriz Lima do curso de Arquitetura de Redes pelo instrutor Gabriel Torres"
  }
];

function criarItemGaleria(item) {
  return `<div class="item ${item["type"]}">
            <img src="${item["src"]}" alt="${item["alt"]}" />
          </div>`;
}

function atualizarGaleria(certificadosFiltrados) {
  const certificadosContainer = document.getElementById("galeria_certificacoes_items");

  if (!certificados) { return; }

  certificadosContainer.innerHTML = "";
  certificadosFiltrados.forEach((certificado) => {
    certificadosContainer.insertAdjacentHTML("beforeend", criarItemGaleria(certificado));
  });
}

function mostrarTodosCertificados() { atualizarGaleria(certificados); }

function filtrarCertificados(type) {
  if (type === "all") return mostrarTodosCertificados();

  const certificadosFiltrados = certificados.filter((certificado) => certificado.type === type);
  atualizarGaleria(certificadosFiltrados);
}

mostrarTodosCertificados();