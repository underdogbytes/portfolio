import fauna from '@/assets/images/projects/colecoes-fauna-do-brasil.png';
import renovacao from '@/assets/images/projects/renovacao.png';
import tempestade from '@/assets/images/projects/tempestade-criativa.png';
import showGospel from '@/assets/images/projects/show-gospel.png';

const projects = [
  {
    date: '2022',
    name: 'Renovação',
    description: 'Design and development by me using Figma and Laravel/PHP',
    link: 'https://escolarenovacao.com.br',
    img: renovacao,
    keys: ['Private school'],
    workedAs: ['developer', 'designer'],
    skills: ['php', 'laravel'],
  },
  {
    date: '2020',
    name: 'Coleções: Fauna do Brasil',
    description: 'Design by Bruno and developed with openCart by me.',
    link: 'https://faunadobrasil.com.br',
    img: fauna,
    keys: ['E-commerce'],
    workedAs: ['developer'],
    skills: ['php', 'openCart'],
  },
  {
    date: '2019',
    name: 'Tempestade Criativa',
    description: 'Design by the talented Ito and developed with HTML/CSS/JS.',
    link: '',
    img: tempestade,
    keys: ['Publicity agency'],
    workedAs: ['developer'],
    skills: ['html/css/js'],
  },
  {
    date: '2019',
    name: 'Show Gospel',
    description: 'Design by Püblysh agency and development by me using Laravel/PHP',
    link: 'https://showgospel.com.br',
    img: showGospel,
    keys: ['Gospel Magazine'],
    workedAs: ['developer'],
    skills: ['php', 'laravel'],
  }
];

export default {
  projects
}