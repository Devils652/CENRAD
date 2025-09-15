<?php

namespace App\Http\Controllers;

class PaginaPrincipalController extends Controller
{
    public function mostrar()
    {
        $testimonials = [
            [
                'name' => 'Iza Triana',
                'avatar' => 'https://i.pravatar.cc/48?u=1',
                'comment' => 'Super buena atención, el personal siempre muy amable. Hay que tener un poco de paciencia ya que siempre están con mucho trabajo, pero las radiografías fueron claras y el diagnóstico excelente. Te brindan toda la información de los estudios y las opciones de simples o con reporte médico.',
            ],
            [
                'name' => 'Paula Mata',
                'avatar' => 'https://i.pravatar.cc/48?u=2',
                'comment' => 'Excelente servicio. Me gusta el área para mascotas, el trato es muy bueno tanto para uno como para el pacientito. Son cuidadosos y si hay que repetir el procedimiento lo hacen para obtener el resultado que solicita el médico veterinario. La opción de archivo digital es muy práctica e innovadora. Precios accesibles.',
            ],
            [
                'name' => 'Daniela Terrón',
                'avatar' => 'https://i.pravatar.cc/48?u=3',
                'comment' => 'Excelente servicio y atención, el personal muy amable y altamente capacitado. Los estudios que me realizaron tuvieron muy buena opinión también de parte de mi médico por la calidad de imagen. 100% recomendables 🤩',
            ],
            [
                'name' => 'Jose Morales',
                'avatar' => 'https://i.pravatar.cc/48?u=4',
                'comment' => 'Excelente servicio, calidad y sobre todo la amabilidad de todo el personal. Atentos y súper puntuales en los horarios. Además, un plus que realicen radiografías a domicilio.',
            ],
            [
                'name' => 'Ricky Palax',
                'avatar' => 'https://i.pravatar.cc/48?u=5',
                'comment' => 'Falta que se puedan cargar todos los estudios independientemente del nombre del médico. Sería ideal que cualquier estudio que yo quiera buscar aparezca sin importar quién lo solicitó.',
            ],
            [
                'name' => 'Ricardo',
                'avatar' => 'https://i.pravatar.cc/400?img=68',
                'comment' => 'Excelente servicio, buena calidad de imagen y atienden muy rápido y de manera eficaz.',
            ],
            [
                'name' => 'Giovanni Rdz. Tello',
                'avatar' => 'https://i.pravatar.cc/150?img=59',
                'comment' => 'Lugar muy completo, con el mejor trato y calidad. Me explicaron los procedimientos y con bajo costo.',
            ],
            [
                'name' => 'Gerardo Leonel Medellín Ávila',
                'avatar' => 'https://i.pravatar.cc/48?u=8',
                'comment' => '¡Excelente servicio!',
            ],
            [
                'name' => 'Isabel Cruz',
                'avatar' => 'https://i.pravatar.cc/400?img=48',
                'comment' => 'Muy buen servicio, entrega de resultados a tiempo 😊 y precios accesibles.',
            ],
            [
                'name' => 'Jose Roberto S. Rubio',
                'avatar' => 'https://i.pravatar.cc/48?u=10',
                'comment' => 'El mejor lugar con el mejor servicio, único en Río Bravo por todo lo que implica.',
            ],
        ];

        return view('welcome', ['testimonials' => $testimonials]);
    }
}