import projects from '@/common/constants/projects';

export default class Projects {
  static getAll() {
    return projects.projects;
  }

  static getOne(id: String) {
    return projects.projects.filter((item) => { item.id == id })
  }
}
