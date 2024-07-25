<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        $projectsJson = file_get_contents(public_path('data/projects-index.js'));
        $cleanedContent = preg_replace('/[\x00-\x1F\x7F]/', '', $projectsJson);
        $projects = json_decode($projectsJson, true);

        return view('pages.portfolio.index', ['projects'=> $projects]);
    }

    public function create(){}
    public function store(Request $request){}

    public function show($slug){
        $projectsJson = file_get_contents(public_path('data/projects-list.js'));
        $projects = json_decode($projectsJson, true);

        $project = null;

        $total_projects = count($projects);

        foreach($projects as $key => $item){
            if($item['slug'] == $slug){
                $project = $item;

                $breadcrumb = [
                    ['name' => 'Home', 'url' => '/'],
                    ['name' => 'Portfolio', 'url' => '/portfolio'],
                    ['name' => $project['head']['name'], 'url' => $project['slug']],
                ];

                $nextProject = ($key == $total_projects - 1) ? $projects[0]['slug'] : $projects[$key+1]['slug'];
                $lastProject = $key != 0 ? $projects[$key-1]['slug'] : $projects[$total_projects-1]['slug'];

                break;
            }
        }

        return ($project) ? view('pages.portfolio.show', [
            'project'=> $project,
            'breads' => $breadcrumb,
            'next' => $nextProject,
            'last' => $lastProject
        ]) : abort(404, 'Projeto não encontrado');
    }
    
    public function edit(Portfolio $portfolio){}
    public function update(Request $request, Portfolio $portfolio){}
    public function destroy(Portfolio $portfolio){}
}