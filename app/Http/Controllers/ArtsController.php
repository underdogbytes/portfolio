<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtsController extends Controller
{
    public function index(){
        $json = file_get_contents(public_path('data/arts.js'));
        $cleanedContent = preg_replace('/[\x00-\x1F\x7F]/', '', $json);
        $arts = json_decode($json, true);

        return view('pages.portfolio.illustrations.index', ['arts'=> $arts]);
    }

    public function show($slug){
        $itemsJson = file_get_contents(public_path('data/arts.js'));
        $items = json_decode($itemsJson, true);

        $item = null;

        $total_items = count($items);

        foreach($items as $key => $item){
            if($item['slug'] == $slug){
                $item = $item;

                $breadcrumb = [
                    ['name' => 'Home', 'url' => '/'],
                    ['name' => 'Portfolio', 'url' => '/portfolio'],
                    ['name' => 'Ilustrações', 'url' => '/portfolio/illustrations'],
                    ['name' => $item['name'], 'url' => $item['slug']],
                ];

                $nextProject = ($key == $total_items - 1) ? $items[0]['slug'] : $items[$key+1]['slug'];
                $lastProject = $key != 0 ? $items[$key-1]['slug'] : $items[$total_items-1]['slug'];

                break;
            }
        }

        return ($item) ? view('pages.portfolio.illustrations.show', [
            'item'=> $item,
            'breads' => $breadcrumb,
            'next' => $nextProject,
            'last' => $lastProject
        ]) : abort(404, 'Projeto não encontrado');
    }
}
