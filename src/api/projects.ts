import fauna from '@/assets/images/projects/colecoes-fauna-do-brasil.png';
import renovacao from '@/assets/images/projects/renovacao.png';
import tempestade from '@/assets/images/projects/tempestade-criativa.png';
import showGospel from '@/assets/images/projects/show-gospel.png';

const projects = [
  {
    source: fauna,
    name: 'Coleções: Fauna do Brasil',
    description: 'Design by Bruno and developed with openCart by me.',
    type: 'E-commerce',
    workedAs: ['developer'],
    skills: ['php', 'openCart'],
  },
  {
    source: renovacao,
    name: 'Renovação',
    description: 'Design and development by me using Figma and Laravel/PHP',
    type: 'School',
    workedAs: ['developer', 'designer'],
    skills: ['php', 'laravel'],
  },
  {
    source: tempestade,
    name: 'Tempestade Criativa',
    description: 'Design by the talented Ito and developed with HTML/CSS/JS.',
    type: 'Agência de publicidade',
    workedAs: ['developer'],
    skills: ['html/css/js'],
  },
  {
    source: showGospel,
    name: 'Show Gospel',
    description: 'Design by Püblysh agency and development by me using Laravel/PHP',
    type: 'Magazine Website',
    workedAs: ['developer'],
    skills: ['php', 'laravel'],
  }
]

export default class Projects {
  static getAll() {
    return projects;
  }
}
