<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayos X CENRAD - Diagnóstico de Vanguardia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        /* Keyframes para la animación del carrusel de testimonios (se mantiene) */
        @keyframes infinite-scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .animate-infinite-scroll {
            animation: infinite-scroll 90s linear infinite;
        }

        /* Estilos personalizados para el fondo */
        .hero-background {
            background-image: url('https://images.unsplash.com/photo-1631651363531-fd29aec4cb5c?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fHJhZGklQzMlQjNsb2dvfGVufDB8fDB8fHww');
            filter: blur(4px);
            /* Aplica un ligero desenfoque */
            transform: scale(1.05);
            /* Escala ligeramente para ocultar bordes del blur */
        }

        /* Modo de mezcla para el overlay */
        .blend-overlay {
            background: linear-gradient(to bottom right, rgba(23, 100, 191, 0.7), rgba(0, 150, 199, 0.7));
            /* Azul más oscuro a cian */
            mix-blend-mode: multiply;
            opacity: 0.9;
        }

        /* Ajuste de scroll para compensar el header fijo */
        html {
            scroll-padding-top: 5rem;
            /* Altura aproximada del header */
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-800">

    <header x-data="{ open: false }" class="bg-white shadow-lg fixed w-full z-50 animate__animated animate__fadeInDown">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-3xl font-extrabold text-blue-700 hover:text-blue-900 transition duration-300">CENRAD</a>
            
            <div class="hidden md:flex space-x-8">
                <a href="#servicios" class="text-lg font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                    Servicios
                    <span class="absolute left-0 bottom-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></span>
                </a>
                <a href="#testimonios" class="text-lg font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                    Testimonios
                    <span class="absolute left-0 bottom-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></span>
                </a>
                <a href="#agendar-cita" class="text-lg font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                    Contacto
                    <span class="absolute left-0 bottom-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></span>
                </a>
            </div>

            <button @click="open = !open" class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 rounded-md p-2">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>

        <div x-show="open" 
             @click.away="open = false"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="md:hidden absolute top-full left-0 w-full bg-white shadow-xl"
             style="display: none;">
            <div class="flex flex-col items-center space-y-4 py-8">
                <a href="#servicios" @click="open = false" class="text-xl font-medium text-gray-700 hover:text-blue-600 transition duration-300">Servicios</a>
                <a href="#testimonios" @click="open = false" class="text-xl font-medium text-gray-700 hover:text-blue-600 transition duration-300">Testimonios</a>
                <a href="#contacto" @click="open = false" class="text-xl font-medium text-gray-700 hover:text-blue-600 transition duration-300">Contacto</a>
                 <a href="#agendar-cita" @click="open = false" class="mt-4 bg-blue-600 text-white font-bold py-3 px-8 rounded-full text-lg shadow-lg hover:bg-blue-700 transition duration-300">
                    Agendar Cita
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="relative h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center hero-background"></div>
            <div class="absolute inset-0 blend-overlay"></div>

            <div class="relative z-10 text-center text-white px-6 md:px-0 max-w-4xl">
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 animate__animated animate__fadeInUp">
                    Rayos X CENRAD: <span class="block mt-2 text-cyan-200">Claridad en tu Diagnóstico.</span>
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-200 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                    Tecnología de Vanguardia y Cuidado Humano para tu Salud. <br class="hidden md:inline"> Resultados
                    precisos, cuando y donde los necesitas.
                </p>

                <div class="flex flex-col sm:flex-row justify-center items-center gap-6 animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
                    <a href="#servicios" class="bg-white text-blue-800 font-bold py-4 px-10 rounded-full text-lg shadow-xl
                                                hover:bg-blue-100 hover:scale-105 transform transition duration-300 ease-in-out
                                                flex items-center space-x-2 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7 text-blue-600 group-hover:text-blue-800 transition duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V14a2 2 0 00-2-2h-3">
                            </path>
                        </svg>
                        <span>Ver Servicios</span>
                    </a>
                    <a href="#agendar-cita" class="border-2 border-white text-white font-bold py-4 px-10 rounded-full text-lg shadow-xl
                                                hover:bg-white hover:text-blue-800 hover:scale-105 transform transition duration-300 ease-in-out
                                                flex items-center space-x-2 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7 text-white group-hover:text-blue-800 transition duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span>Contáctanos Ahora</span>
                    </a>
                </div>
            </div>
        </section>


        <?php
        $testimonials = [
            ['name' => 'Iza Triana', 'avatar' => 'https://i.pravatar.cc/48?u=1', 'comment' => 'Super buena atención, el personal siempre muy amable. Hay que tener un poco de paciencia ya que siempre están con mucho trabajo, pero las radiografías fueron claras y el diagnóstico excelente. Te brindan toda la información de los estudios y las opciones de simples o con reporte médico.'],
            ['name' => 'Paula Mata', 'avatar' => 'https://i.pravatar.cc/48?u=2', 'comment' => 'Excelente servicio. Me gusta el área para mascotas, el trato es muy bueno tanto para uno como para el pacientito. Son cuidadosos y si hay que repetir el procedimiento lo hacen para obtener el resultado que solicita el médico veterinario. La opción de archivo digital es muy práctica e innovadora. Precios accesibles.'],
            ['name' => 'Daniela Terrón', 'avatar' => 'https://i.pravatar.cc/48?u=3', 'comment' => 'Excelente servicio y atención, el personal muy amable y altamente capacitado. Los estudios que me realizaron tuvieron muy buena opinión también de parte de mi médico por la calidad de imagen. 100% recomendables 🤩'],
            ['name' => 'Jose Morales', 'avatar' => 'https://i.pravatar.cc/48?u=4', 'comment' => 'Excelente servicio, calidad y sobre todo la amabilidad de todo el personal. Atentos y súper puntuales en los horarios. Además, un plus que realicen radiografías a domicilio.'],
            ['name' => 'Ricky Palax', 'avatar' => 'https://i.pravatar.cc/48?u=5', 'comment' => 'Falta que se puedan cargar todos los estudios independientemente del nombre del médico. Sería ideal que cualquier estudio que yo quiera buscar aparezca sin importar quién lo solicitó.'],
            ['name' => 'Ricardo', 'avatar' => 'https://i.pravatar.cc/400?img=68', 'comment' => 'Excelente servicio, buena calidad de imagen y atienden muy rápido y de manera eficaz.'],
            ['name' => 'Giovanni Rdz. Tello', 'avatar' => 'https://i.pravatar.cc/150?img=59', 'comment' => 'Lugar muy completo, con el mejor trato y calidad. Me explicaron los procedimientos y con bajo costo.'],
            ['name' => 'Gerardo Leonel Medellín Ávila', 'avatar' => 'https://i.pravatar.cc/48?u=8', 'comment' => '¡Excelente servicio!'],
            ['name' => 'Isabel Cruz', 'avatar' => 'https://i.pravatar.cc/400?img=48', 'comment' => 'Muy buen servicio, entrega de resultados a tiempo 😊 y precios accesibles.'],
            ['name' => 'Jose Roberto S. Rubio', 'avatar' => 'https://i.pravatar.cc/48?u=10', 'comment' => 'El mejor lugar con el mejor servicio, único en Río Bravo por todo lo que implica.'],
        ];
        ?>

        <section id="testimonios" class="bg-slate-50 py-20 sm:py-28">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12 animate__animated animate__fadeInUp">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-800">La Confianza de Nuestros Pacientes
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Opiniones reales de quienes han
                        experimentado la calidad y el cuidado de CENRAD.</p>
                </div>

                <div x-data="{}" x-init="$nextTick(() => {
                let ul = $refs.logos;
                ul.insertAdjacentHTML('beforeend', ul.innerHTML);
                ul.insertAdjacentHTML('beforeend', ul.innerHTML);
            })" class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear_gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
                    <ul x-ref="logos"
                        class="flex items-center justify-center md:justify-start [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll">

                        <?php foreach ($testimonials as $testimonial): ?>
                            <li class="flex-shrink-0 w-80 md:w-96">
                                <div
                                    class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
                                    <div class="flex items-center mb-4">
                                        <img class="w-24 h-auto -ml-2"
                                            src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg"
                                            alt="Logo de Google">
                                        <div class="ml-auto flex items-center">
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.175 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.051 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z">
                                                    </path>
                                                </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 italic mb-6">"<?= htmlspecialchars($testimonial['comment']) ?>"
                                    </p>
                                    <div class="flex items-center">
                                        <img class="w-12 h-12 rounded-full object-cover"
                                            src="<?= htmlspecialchars($testimonial['avatar']) ?>"
                                            alt="Avatar de <?= htmlspecialchars($testimonial['name']) ?>">
                                        <div class="ml-4">
                                            <p class="font-bold text-gray-800"><?= htmlspecialchars($testimonial['name']) ?>
                                            </p>
                                            <p class="text-sm text-gray-500">Verificado en Google</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <section id="problemas" class="bg-white py-20 sm:py-28">
            <div class="container mx-auto px-6">

                <div class="text-center mb-16 animate__animated animate__fadeInUp">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-800">¿Cuándo podemos ayudarte?</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Si usted o su médico buscan respuestas claras ante ciertos síntomas o condiciones, nuestros
                        estudios especializados son el camino hacia un diagnóstico preciso.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="bg-slate-50 rounded-2xl shadow-lg p-8 transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600">
                                <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-1.5h5.25m-5.25 0h5.25m-5.25 0h5.25M9 7.5a4.5 4.5 0 110 9 4.5 4.5 0 010-9z" />
                                </svg>
                            </div>
                            <h3 class="mt-6 text-2xl font-bold text-gray-900">Diagnóstico por Imagen</h3>
                        </div>
                        <div class="mt-4 flex-grow">
                            <p class="text-gray-600 mb-4">Para evaluar huesos, órganos y tejidos internos.</p>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-cyan-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong class="font-semibold text-blue-800">Rayos X Digital:</strong>
                                        Lesiones, fracturas, tos persistente o problemas pulmonares.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-cyan-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong class="font-semibold text-blue-800">Tomografía (TAC):</strong>
                                        Traumatismos graves, dolores de cabeza intensos, dolor abdominal sin causa
                                        aparente o seguimiento oncológico.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-2xl shadow-lg p-8 transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600">
                                <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </div>
                            <h3 class="mt-6 text-2xl font-bold text-gray-900">Estudios Cardíacos</h3>
                        </div>
                        <div class="mt-4 flex-grow">
                            <p class="text-gray-600 mb-4">Para monitorear la salud y actividad eléctrica de tu corazón.
                            </p>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-cyan-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong class="font-semibold text-blue-800">Electrocardiograma:</strong> Dolor
                                        en el pecho, palpitaciones, mareos o para chequeos preoperatorios.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-cyan-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong class="font-semibold text-blue-800">Holter 24hr:</strong> Arritmias
                                        que no son constantes, desmayos sin explicación o para seguimiento
                                        post-infarto.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-2xl shadow-lg p-8 transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600">
                                <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.898 20.572L16.5 21.75l-.398-1.178a3.375 3.375 0 00-2.455-2.456L12.75 18l1.178-.398a3.375 3.375 0 002.455-2.456L16.5 14.25l.398 1.178a3.375 3.375 0 002.456 2.456L20.25 18l-1.178.398a3.375 3.375 0 00-2.456 2.456z" />
                                </svg>
                            </div>
                            <h3 class="mt-6 text-2xl font-bold text-gray-900">Salud Respiratoria y Auditiva</h3>
                        </div>
                        <div class="mt-4 flex-grow">
                            <p class="text-gray-600 mb-4">Para medir la capacidad de tus pulmones y oídos.</p>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-cyan-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong class="font-semibold text-blue-800">Espirometría:</strong> Falta de
                                        aire (disnea), seguimiento de asma o EPOC, y evaluación en fumadores.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-cyan-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span><strong class="font-semibold text-blue-800">Audiometría:</strong> Dificultad
                                        para escuchar, zumbido en los oídos (tinnitus) o para revisiones de salud
                                        laboral.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="md:col-span-2 lg:col-span-3 bg-blue-700 text-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:shadow-2xl flex flex-col md:flex-row items-center animate__animated animate__fadeIn" style="animation-delay: 0.2s;">
                        <div class="flex-shrink-0 text-center md:text-left md:mr-8">
                            <div
                                class="flex items-center justify-center h-20 w-20 rounded-full bg-white text-blue-700 mx-auto md:mx-0">
                                <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.125-.504 1.125-1.125V14.25m-17.25 4.5v-1.875a3.375 3.375 0 003.375-3.375h1.5a1.125 1.125 0 011.125 1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375m15.75 0v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5c0-.621.504-1.125 1.125-1.125h1.5a3.375 3.375 0 003.375-3.375V6.375m-17.25 0v-1.875a3.375 3.375 0 013.375-3.375h1.5c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125H3.375m15.75 0h-1.5a1.125 1.125 0 00-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375v1.875" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 flex-grow text-center md:text-left">
                            <h3 class="text-3xl font-bold text-white">Comodidad y Cuidado Sin Salir de Casa</h3>
                            <p class="mt-2 text-blue-100 text-lg">
                                Nuestro servicio de <strong class="font-semibold">Rayos X a Domicilio</strong> está
                                pensado para quienes tienen movilidad reducida, adultos mayores o simplemente prefieren
                                la comodidad de su hogar. Llevamos nuestra tecnología y cuidado experto a tu puerta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="soluciones" class="bg-slate-50 py-20 sm:py-28">
            <div class="container mx-auto px-6">

                <div class="relative text-center mb-16 animate__animated animate__fadeInUp">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-800">Obtén Claridad y Tranquilidad</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Más que un estudio, te ofrecemos la certeza que necesitas para tomar el control de tu salud y
                        bienestar.
                    </p>
                </div>

                <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12">

                    <div class="flex items-start group animate__animated animate__fadeInLeft">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-md text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-2xl font-bold text-gray-900">Certeza para Decisiones Clave</h3>
                            <p class="mt-2 text-gray-700">
                                Recibe **diagnósticos de alta precisión** con nuestra tecnología digital y de
                                tomografía. Esto le da a tu médico la información exacta que necesita para definir el
                                tratamiento más efectivo, eliminando dudas e incertidumbre.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start group animate__animated animate__fadeInRight">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-md text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-2xl font-bold text-gray-900">Cuidado Experto, Donde Estés</h3>
                            <p class="mt-2 text-gray-700">
                                Evita traslados innecesarios y el estrés de salir de casa. Con nuestro **servicio a
                                domicilio**, obtienes la misma calidad profesional en un entorno familiar y seguro,
                                ideal para una recuperación sin complicaciones.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start group animate__animated animate__fadeInLeft" style="animation-delay: 0.2s;">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-md text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-2xl font-bold text-gray-900">Anticípate y Vive Mejor</h3>
                            <p class="mt-2 text-gray-700">
                                Detecta condiciones cardíacas, pulmonares o auditivas **antes de que se conviertan en un
                                problema mayor**. Nuestros estudios funcionales (ECG, Holter, etc.) te permiten
                                monitorear tu salud y tomar acciones preventivas a tiempo.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start group animate__animated animate__fadeInRight" style="animation-delay: 0.2s;">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-md text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-2xl font-bold text-gray-900">Resultados Ágiles, Menos Ansiedad</h3>
                            <p class="mt-2 text-gray-700">
                                Reduce la angustia de la espera. Nuestros procesos optimizados aseguran una **entrega de
                                resultados eficiente y rápida**, para que tú y tu médico puedan actuar sin demoras y
                                recuperes tu tranquilidad lo antes posible.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        $services = [
            ['name' => 'Estudios de Rayos X', 'description' => 'Imágenes de alta resolución para diagnósticos óseos, torácicos y abdominales.', 'price' => 400, 'is_featured' => false],
            ['name' => 'Tomografía Multicorte (TAC)', 'description' => 'Estudio detallado de órganos, huesos y tejidos blandos desde múltiples ángulos.', 'price' => 2500, 'is_featured' => true],
            ['name' => 'Rayos X a Domicilio', 'description' => 'Llevamos nuestro equipo de Rayos X Digital a tu hogar. *El precio puede variar por zona.*', 'price' => 1200, 'is_featured' => false],
            ['name' => 'Electrocardiograma en Reposo', 'description' => 'Registro de la actividad eléctrica del corazón para detectar arritmias y otras afecciones.', 'price' => 800, 'is_featured' => false],
            ['name' => 'Holter de 24 Horas', 'description' => 'Monitoreo cardíaco continuo durante 24 horas para un análisis completo.', 'price' => 3200, 'is_featured' => false],
            ['name' => 'Espirometría Basal', 'description' => 'Prueba de función pulmonar para medir la capacidad y el flujo de aire.', 'price' => 1200, 'is_featured' => false],
        ];
        ?>

        <section id="servicios" class="bg-white py-20 sm:py-28">
            <div class="container mx-auto px-6">

                <div class="text-center mb-16 animate__animated animate__fadeInUp">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-800">Nuestros Servicios</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Tecnología de punta y un equipo profesional a tu disposición. Conoce cómo funciona y elige el
                        estudio que necesitas.
                    </p>
                </div>

                <div class="max-w-6xl mx-auto animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <div class="bg-slate-50 rounded-2xl shadow-xl overflow-hidden">
                        <div
                            class="hidden md:grid md:grid-cols-10 md:gap-4 items-center bg-blue-800 text-white font-bold p-5">
                            <div class="col-span-4">Servicio</div>
                            <div class="col-span-4">¿Cómo funciona?</div>
                            <div class="col-span-1 text-center">Precio</div>
                            <div class="col-span-1"></div>
                        </div>

                        <?php foreach ($services as $service): ?>
                            <div
                                class="grid grid-cols-1 md:grid-cols-10 md:gap-4 items-center p-5 border-b border-gray-200 last:border-b-0 <?= $service['is_featured'] ? 'bg-blue-50' : '' ?>">

                                <div class="col-span-4 mb-2 md:mb-0">
                                    <p class="text-lg font-bold text-blue-900"><?= htmlspecialchars($service['name']) ?></p>
                                </div>

                                <div class="col-span-4 text-gray-600 mb-4 md:mb-0">
                                    <p><?= htmlspecialchars($service['description']) ?></p>
                                </div>

                                <div class="col-span-1 text-center font-bold text-xl text-blue-800 mb-4 md:mb-0">
                                    <span class="md:hidden">Precio: </span>$<?= number_format($service['price'], 2) ?>
                                </div>

                                <div class="col-span-1 text-center">

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <p class="text-center mt-6 text-sm text-gray-500">* Precios en MXN. Los precios son informativos y
                        pueden estar sujetos a cambios o requerir una cotización específica.</p>
                </div>
            </div>
        </section>


        <section id="contacto" class="bg-slate-50 py-20 sm:py-28">
            <div class="container mx-auto px-6">

                <div class="text-center mb-16 animate__animated animate__fadeInUp">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-800">Visítanos y Agenda tu Cita</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Estamos listos para atenderte. Encuentra nuestra ubicación y contáctanos para resolver tus
                        dudas.
                    </p>
                </div>

                <div
                    class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white rounded-2xl shadow-xl overflow-hidden p-8">

                    <div class="flex flex-col justify-center animate__animated animate__fadeInLeft">
                        <h3 class="text-3xl font-bold text-blue-900 mb-6">Rayos X CENRAD</h3>

                        <div class="flex items-start mb-5">
                            <div class="flex-shrink-0">
                                <svg class="h-7 w-7 text-cyan-500 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-semibold text-gray-800">Nuestra Ubicación</p>
                                <p class="text-gray-600">Av Matamoros, Cuitláhuac #100, Col. Cuauhtémoc, 88950 Cdad. Río
                                    Bravo, Tamps., México.</p>
                            </div>
                        </div>

                        <div class="flex items-start mb-5">
                            <div class="flex-shrink-0">
                                <svg class="h-7 w-7 text-cyan-500 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-semibold text-gray-800">Horario de Atención</p>
                                <p class="text-gray-600">
                                    <strong>Lunes a Viernes:</strong> 9:00 – 19:00<br>
                                    <strong>Sábado:</strong> 9:00 – 15:00<br>
                                    <strong>Domingo:</strong> 10:00 – 14:00
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start mb-8">
                            <div class="flex-shrink-0">
                                <svg class="h-7 w-7 text-cyan-500 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.211-.998-.552-1.348l-1.956-1.956a2.25 2.25 0 00-3.182 0l-1.956 1.956a24.012 24.012 0 01-11.732-11.732l1.956-1.956a2.25 2.25 0 000-3.182L5.536 3.102a2.25 2.25 0 00-1.348-.552H2.25A2.25 2.25 0 000 4.5v2.25z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-semibold text-gray-800">Agenda por Teléfono</p>
                                <a href="tel:+528993332348"
                                    class="text-gray-600 hover:text-blue-700 transition duration-300">+52 899 333
                                    2348</a>
                            </div>
                        </div>

                        <a href="https://maps.google.com/?cid=13725617917017553337&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNl"
                            target="_blank" rel="noopener noreferrer" class="w-full text-center bg-blue-700 text-white font-bold py-4 px-8 rounded-full text-lg shadow-lg
                          hover:bg-blue-800 hover:scale-105 transform transition duration-300 ease-in-out
                          flex items-center justify-center space-x-3">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 6.75V15m6-6v8.25m.5-13.5v5.25c0 .621-.504 1.125-1.125 1.125H4.125a1.125 1.125 0 01-1.125-1.125V6.75m11.25 0H8.25m2.25 0H10.5m2.25 0h.008m.008 0H12m2.25 0h.008m.008 0H14.25m2.25 0h.008m.008 0H16.5m2.25 0h.008m.008 0H18.75m-2.25 0h.008m.008 0h-2.25m2.25 0h-2.25" />
                            </svg>
                            <span>Obtener ruta en Google Maps</span>
                        </a>
                    </div>

                    <div class="w-full h-80 md:h-full rounded-2xl overflow-hidden shadow-lg animate__animated animate__fadeInRight">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.5033439458616!2d-98.10101822488255!3d25.984324077212705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86656d9b92e3b66b%3A0xbe7b30c62a9179b9!2sRayos%20X%20CENRAD!5e0!3m2!1ses-419!2smx!4v1757898757967!5m2!1ses-419!2smx"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </section>


        <section id="consecuencias" class="bg-blue-900 text-white py-20 sm:py-28">
    <div class="container mx-auto px-6">

        <div class="text-center mb-16 animate__animated animate__fadeInUp">
            <h2 class="text-4xl md:text-5xl font-extrabold">No Dejes tu Salud para Después</h2>
            <p class="mt-4 text-lg text-blue-200 max-w-3xl mx-auto">
                Ignorar una señal de tu cuerpo puede tener un costo mayor a largo plazo. Un diagnóstico oportuno es el primer paso para tu tranquilidad.
            </p>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-blue-800 rounded-2xl p-8 border border-blue-700 hover:border-cyan-400 transition-colors duration-300 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-700 text-cyan-400 mb-6">
                    <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">La Incertidumbre Agota</h3>
                <p class="text-blue-200">
                    Vivir con la duda de "¿qué será?" genera un estrés constante que afecta tu ánimo, tu concentración y tu vida diaria. La tranquilidad de saber no tiene precio.
                </p>
            </div>

            <div class="bg-blue-800 rounded-2xl p-8 border border-blue-700 hover:border-cyan-400 transition-colors duration-300 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                 <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-700 text-cyan-400 mb-6">
                    <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Un Problema Pequeño Crece</h3>
                <p class="text-blue-200">
                   Una molestia leve o una lesión menor que no se atiende, con el tiempo puede convertirse en una condición crónica, más difícil y dolorosa de tratar.
                </p>
            </div>

            <div class="bg-blue-800 rounded-2xl p-8 border border-blue-700 hover:border-cyan-400 transition-colors duration-300 animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                 <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-700 text-cyan-400 mb-6">
                    <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.75A.75.75 0 013 4.5h.75m0 0h.75A.75.75 0 015.25 6v.75m0 0H3.75m0 0A.75.75 0 013 6V5.25m0 0A.75.75 0 013.75 4.5h.75m0 0V6m-1.5-1.5V6m1.5-1.5a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75m0 0A.75.75 0 017.5 6h-.75m0 0V5.25m0 0A.75.75 0 017.5 4.5h.75a.75.75 0 01.75.75v.75m0 0h-.75A.75.75 0 017.5 6v-.75m.75 .75A.75.75 0 019 5.25v.75m0 0v-.75a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75m0 0h-.75A.75.75 0 019.75 6v.75m0 0H9m-3 6.75A.75.75 0 016.75 12h.75m0 0A.75.75 0 018.25 12h.75m0 0A.75.75 0 019.75 12h.75m0 0A.75.75 0 0111.25 12h.75m0 0A.75.75 0 0112.75 12h.75m0 0A.75.75 0 0114.25 12h.75m0 0A.75.75 0 0115.75 12h.75m0 0A.75.75 0 0117.25 12h.75m0 0h-3.375" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Tratamientos Más Complejos</h3>
                <p class="text-blue-200">
                    Retrasar un diagnóstico puede significar que, en el futuro, necesites tratamientos más largos, más invasivos y, por lo tanto, más costosos. Actuar ahora es una inversión.
                </p>
            </div>

            <div class="bg-blue-800 rounded-2xl p-8 border border-blue-700 hover:border-cyan-400 transition-colors duration-300 animate__animated animate__fadeInUp" style="animation-delay: 0.7s;">
                 <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-700 text-cyan-400 mb-6">
                   <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Pérdida de Calidad de Vida</h3>
                <p class="text-blue-200">
                   Ese dolor de espalda o esa falta de aire te impiden disfrutar de tu familia, tu trabajo y tus pasatiempos. Recuperar tu bienestar te permite vivir plenamente.
                </p>
            </div>
        </div>
    </div>
</section>
    </main>
<section id="agendar-cita" class="relative bg-white">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-400 to-blue-800 opacity-90"></div>
    </div>

    <div class="relative container mx-auto px-6 py-20 sm:py-28 text-center text-white">
        
        <div x-data="{ open_options: false }" class="max-w-2xl mx-auto">
            
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight animate__animated animate__fadeInUp">Da el Siguiente Paso Hacia tu Bienestar</h2>
            <p class="mt-4 text-lg text-blue-100 mb-10 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                No esperes más. Agendar tu estudio es rápido y sencillo. Estamos aquí para ayudarte.
            </p>
            <p class="mt-4 text-lg text-red-1000 mb-10 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                Click Aquí para agendar tu cita vía WhatsApp o llámarnos 
            </p>

            <button @click="open_options = !open_options" 
                    class="bg-white text-blue-800 font-bold py-4 px-10 rounded-full text-xl shadow-2xl
                           hover:bg-blue-100 hover:scale-105 transform transition duration-300 ease-in-out
                           flex items-center justify-center space-x-3 w-full sm:w-auto mx-auto group
                           animate__animated animate__pulse animate__infinite" style="animation-delay: 1s;">
                <svg class="h-8 w-8 text-blue-700 group-hover:text-blue-900 transition duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0h18M-4.5 12h22.5" />
                </svg>
                <span>Agendar Cita Ahora</span>
            </button>

            <div x-show="open_options" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform -translate-y-4"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-4"
                 class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6 text-left"
                 style="display: none;">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20">
                    <div class="flex items-center mb-3">
                         <svg class="h-8 w-8 text-green-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                           <path d="M16.6 14.2c-.3-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.7-.8.9-.1.1-.3.2-.5.1-.2-.1-.9-.3-1.8-1.1-.7-.6-1.1-1.4-1.3-1.6-.1-.2 0-.4.1-.5.1-.1.2-.2.4-.4.1-.1.2-.2.2-.4.1-.1.1-.3 0-.4-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.5-.4h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2 1 2.4c.1.1 1.5 2.3 3.7 3.2.5.2.9.4 1.2.5.5.2 1 .1 1.4-.1.4-.2 1.5-1.7 1.7-2.3.2-.6.2-1.1.1-1.2l-.4-.2zM12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8z" />
                        </svg>
                        <h4 class="ml-3 text-2xl font-bold">Vía WhatsApp</h4>
                    </div>
                    <p class="text-blue-100 mb-4">Envíanos un mensaje para agendar o resolver dudas rápidas.</p>
                    <a href="https://wa.me/5218995464477" target="_blank" rel="noopener noreferrer" 
                       class="block w-full text-center bg-green-500 font-semibold py-3 px-5 rounded-lg hover:bg-green-600 transition duration-300">
                        Chatear Ahora
                    </a>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20">
                    <div class="flex items-center mb-3">
                       <svg class="h-8 w-8 text-cyan-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                           <path d="M17.7 12.3c-.7-.7-1.8-1.2-2.8-1.2s-2.1.5-2.8 1.2c-.7.7-1.2 1.8-1.2 2.8s.5 2.1 1.2 2.8c.7.7 1.8 1.2 2.8 1.2s2.1-.5 2.8-1.2c.7-.7 1.2-1.8 1.2-2.8s-.5-2.1-1.2-2.8zm-5.6 0c.7-.7 1.8-1.2 2.8-1.2s2.1.5 2.8 1.2c.7.7 1.2 1.8 1.2 2.8s-.5 2.1-1.2 2.8c-.7.7-1.8 1.2-2.8 1.2s-2.1-.5-2.8-1.2c-.7-.7-1.2-1.8-1.2-2.8s.5-2.1 1.2-2.8zM12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8z" />
                        </svg>
                        <h4 class="ml-3 text-2xl font-bold">Por Teléfono</h4>
                    </div>
                    <p class="text-blue-100 mb-4">Llámanos si prefieres una atención más personalizada.</p>
                    <a href="tel:+528994430985" class="block w-full text-center bg-cyan-500 font-semibold py-3 px-5 rounded-lg hover:bg-cyan-600 transition duration-300">
                        Marcar Ahora
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

</body>
</html>