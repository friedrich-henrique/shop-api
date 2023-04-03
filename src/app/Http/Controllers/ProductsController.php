<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $array = [
            "detector-plano" =>[
                'id' => 1,
                'nome'=> 'Detector Plano',
                'categoria' => 'detector de metais',
                'preço' => 2500,
                'descrição' => 'detector com detecção digital e sensibilidade ajustável, usado principalmente em reciclagens.',
                'image' => 'detector-plano.jpg'
            ],
            "detector-curvo" =>[
                'id'=> 2,
                'nome'=> 'Detector Curvo',
                'categoria' => 'detector de metais',
                'preço' => 2500,
                'descrição' => 'detector robusto com grande versatilidade, tabmém possui detecção digital e sensibilidade ajustável.',
                'image' => 'detector-curvo.jpg'
            ],
            "detector-tunel" =>[
                'id'=> 3,
                'nome'=> 'Detector Tunel',
                'categoria' => 'detector de metais',
                'preço' => 5500,
                'descrição' => 'Além da detecção ajustável, possui detecção nas quatro paredes do sensor, possibilitando uma maior raio de detecção.',
                'image' => 'detector-tunel.jpg'
            ],
            "detector-alimenticio" =>[
                'id'=> 4,
                'nome'=> 'Detector Alimenticio',
                'categoria' => 'detector de metais',
                'preço' => 11000,
                'descrição' => 'Detector com painel digital, com alta precisão, ideal para atividades alimentícias ou que requerem a detecção de pequenas peças de metal.',
                'image' => 'detector-alimenticio.jpg'
            ],
            "martelo-mm15" =>[
                'id'=> 5,
                'nome'=> 'Martelo MM15',
                'categoria' => 'peças de reposição',
                'preço' => 50,
                'descrição' => 'Martelo usado em britadores, feito em ferro fundido com alta durabilidade.',
                'image' => 'martelo-mm15.jpg'
            ],
        ];
        return response($array, 200);
    }
}
