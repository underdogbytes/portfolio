<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class ProjectService
{
    public function loadProjects($filePath)
    {
        try {
            // Tente ler o arquivo JSON
            $projectsJson = File::get(public_path($filePath));
            
            // Decodificação do JSON
            $cleanedContent = preg_replace('/[\x00-\x1F\x7F]/', '', $projectsJson);
            $projects = json_decode($cleanedContent, true);

            // Verificação de erros na decodificação
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Erro ao decodificar JSON: ' . json_last_error_msg());
            }

            return $projects;
        } catch (\Exception $e) {
            \Log::error('Erro ao ler o arquivo JSON: ' . $e->getMessage());
            return [];
        }
    }
}
