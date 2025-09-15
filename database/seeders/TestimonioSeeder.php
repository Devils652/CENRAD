<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonio; // Importamos el modelo que creaste
use Illuminate\Support\Facades\DB; // Importante para usar la base de datos

class TestimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Borra los datos antiguos para evitar duplicados si se ejecuta de nuevo
        DB::table('testimonios')->delete();

        $testimonials = [
            [
                'name' => 'Iza Triana',
                'avatar' => 'https://i.pravatar.cc/48?u=1',
                'comment' => 'Super buena atención, me ayudaron con mi radiografía panorámica y todo el personal fue muy amable.',
            ],
            [
                'name' => 'Armando Diaz',
                'avatar' => 'https://i.pravatar.cc/48?u=2',
                'comment' => 'Excelente servicio, muy profesionales en su trabajo. Los recomiendo ampliamente para cualquier estudio dental.',
            ],
            [
                'name' => 'Laura Garza',
                'avatar' => 'https://i.pravatar.cc/48?u=3',
                'comment' => 'Me urgía una tomografía dental y aquí me la entregaron el mismo día. Muy eficientes y amables.',
            ],
            [
                'name' => 'Carlos Martinez',
                'avatar' => 'https://i.pravatar.cc/48?u=4',
                'comment' => 'El equipo que tienen es de primera. Me sentí muy seguro y los resultados de mis estudios fueron muy claros.',
            ],
            [
                'name' => 'Sofia Rodriguez',
                'avatar' => 'https://i.pravatar.cc/48?u=5',
                'comment' => 'Llevé a mi hijo para una radiografía y el personal fue increíblemente paciente y cuidadoso. ¡Gracias!',
            ],
            [
                'name' => 'Javier Morales',
                'avatar' => 'https://i.pravatar.cc/48?u=6',
                'comment' => 'Precios justos y un servicio de alta calidad. Definitivamente mi lugar de confianza para estudios radiológicos.',
            ],
        ];

        // Insertamos cada testimonio en la base de datos
        foreach ($testimonials as $testimonial) {
            Testimonio::create($testimonial);
        }
    }
}