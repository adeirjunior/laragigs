<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                "title" => "Desenvolvedor de software",
                "description" => "Desenvolve aplicativos de software para empresas",
                "id" => 1,
                "salary" => 5000
            ],
            [
                "title" => "Gerente de projeto",
                "description" => "Gerencia equipes de desenvolvimento de software e garante o cumprimento dos prazos",
                "id" => 2,
                "salary" => 7000
            ],
            [
                "title" => "Analista de sistemas",
                "description" => "Analisa as necessidades de negócio e desenvolve soluções de software para atendê-las",
                "id" => 3,
                "salary" => 6000
            ],
            [
                "title" => "Designer gráfico",
                "description" => "Cria designs para sites, anúncios e outros materiais de marketing",
                "id" => 4,
                "salary" => 4000
            ],
            [
                "title" => "Gerente de marketing",
                "description" => "Gerencia campanhas de marketing e estratégias de publicidade",
                "id" => 5,
                "salary" => 8000
            ],
            [
                "title" => "Escritor técnico",
                "description" => "Escreve manuais técnicos, artigos e documentação técnica para empresas",
                "id" => 6,
                "salary" => 4500
            ],
            [
                "title" => "Editor de vídeo",
                "description" => "Edita vídeos para empresas e produtoras de TV",
                "id" => 7,
                "salary" => 5000
            ],
            [
                "title" => "Tradutor",
                "description" => "Traduz documentos e conteúdos de diferentes idiomas",
                "id" => 8,
                "salary" => 4000
            ],
            [
                "title" => "Professor",
                "description" => "Ministra aulas para estudantes de diferentes níveis",
                "id" => 9,
                "salary" => 3500
            ],
            [
                "title" => "Arquiteto de soluções",
                "description" => "Projeta soluções de software e gerencia a implementação dessas soluções",
                "id" => 10,
                "salary" => 7000
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}