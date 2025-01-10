<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class ProjectService
{
    public function loadProjects(string $filePath): array
    {
        // Garantindo que o diretório é seguro:
        $filePath = 'data/'.basename($filePath);
        $fullPath = public_path($filePath);

        if (!File::exists($fullPath)) {
            \Log::error("404 - Arquivo não encontrado: $filePath");
            return [];
        }

        try {
            // Tente ler o arquivo JSON
            $projectsJson = File::get($fullPath);
            
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

    function getXProjects(string $filePath, int $quantity): array
    {
        $projects = $this->loadProjects($filePath);
        return array_slice($projects, 0, $quantity);
    }
}
