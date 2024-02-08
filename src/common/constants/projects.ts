import fauna from '@/assets/images/projects/colecoes-fauna-do-brasil.png';
import renovacao from '@/assets/images/projects/renovacao.png';
import tempestade from '@/assets/images/projects/tempestade-criativa.png';
import showGospel from '@/assets/images/projects/show-gospel.png';

const projects = [
  {
    id: '1',
    img: fauna,
    name: 'Coleções: Fauna do Brasil',
    description: 'Design by Bruno and developed with openCart by me.',
    type: 'E-commerce',
    workedAs: ['developer'],
    skills: ['php', 'openCart'],
  },
  {
    id: '2',
    img: renovacao,
    name: 'Renovação',
    description: 'Design and development by me using Figma and Laravel/PHP',
    type: 'School',
    workedAs: ['developer', 'designer'],
    skills: ['php', 'laravel'],
  },
  {
    id: '3',
    img: tempestade,
    name: 'Tempestade Criativa',
    description: 'Design by the talented Ito and developed with HTML/CSS/JS.',
    type: 'Publicity agency',
    workedAs: ['developer'],
    skills: ['html/css/js'],
  },
  {
    id: '4',
    img: showGospel,
    name: 'Show Gospel',
    description: 'Design by Püblysh agency and development by me using Laravel/PHP',
    type: 'Magazine Website',
    workedAs: ['developer'],
    skills: ['php', 'laravel'],
  }
];

export default {
  projects
}