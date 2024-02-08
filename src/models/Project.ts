export default class Projeto {
  constructor(
    public id: string,
    public img: string,
    public name: string,
    public description: string,
    public type: string,
    public workedAs: string[],
    public skills: string[]
  ) { }
}
