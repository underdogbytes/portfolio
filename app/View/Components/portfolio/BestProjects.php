<?php

namespace App\View\Components\portfolio;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class BestProjects extends Component
{
    public $projects;

    public function __construct($projects = [])
    {
        $this->projects = $this->loadProjects();
    }

    public function render(): View|string
    {
        return view('components.portfolio.best-projects', ['projects' => $this->projects]);
    }

    public function loadProjects(){
        try {
            // Tente ler o arquivo JSON
            $projectsJson = File::get(public_path('data/best-projects.js'));
            
            // Decodificação do JSON
            $cleanedContent = preg_replace('/[\x00-\x1F\x7F]/', '', $projectsJson);
            $projects = json_decode($cleanedContent, true);

            // Verificação de erros na decodificação
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Erro ao decodificar JSON em BestProjects: ' . json_last_error_msg());
            }

            $result = $projects;
        } catch (\Exception $e) {
            \Log::error('Erro ao ler o arquivo JSON em BestProjects: ' . $e->getMessage());
            $result = [];
        }

        return $result;
    }
}