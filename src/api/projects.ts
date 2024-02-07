const publicPath = window.location.href;

const projects = [
  {
    source: `${publicPath}src/assets/images/projects/colecoes-fauna-do-brasil.png`,
    name: 'Coleções: Fauna do Brasil',
    tags: ['developer'],
    techs: ['php', 'openCart'],
    description: 'Design by Bruno and developed with openCart by me.',
  },
  {
    source: `${publicPath}src/assets/images/projects/renovacao.png`,
    tags: ['developer', 'designer'],
    techs: ['php', 'laravel'],
    name: 'Escola Renovação',
    description: 'Design and development by me using Figma and Laravel/PHP'
  },
  {
    source: `${publicPath}src/assets/images/projects/tempestade-criativa.png`,
    tags: ['developer'],
    techs: ['html/css/js'],
    name: 'Agência Tempestade Criativa',
    description: 'Design by the talented Ito and developed with HTML/CSS/JS.'
  },
  {
    source: `${publicPath}src/assets/images/projects/show-gospel.png`,
    tags: ['developer'],
    techs: ['php', 'laravel'],
    name: 'Revista Show Gospel',
    description: 'Design by Püblysh agency and development by me using Laravel/PHP'
  }
]

export default class Projects {
  static getAll() {
    return projects;
  }
}
