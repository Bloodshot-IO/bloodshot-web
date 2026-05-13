<?php
$page_title = "Nosotros | La Mente Detrás de Bloodshot";
include 'includes/header.php';
?>

<section class="relative pt-44 pb-16 md:pt-40 md:pb-24 px-6 overflow-hidden border-b border-white/5">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-red rounded-full filter blur-[180px] opacity-[0.08] animate-pulse pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-brand-red rounded-full filter blur-[180px] opacity-[0.05] animate-pulse pointer-events-none" style="animation-delay: 1s;"></div>
    
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="flex items-center justify-center gap-1.5 mb-6 reveal">
            <span class="text-brand-red font-bold tracking-[0.2em] text-sm uppercase">Nuestra Esencia</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight leading-[1.1] mb-6 reveal delay-100 drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]">
            No hacemos webs, <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-red-800">forjamos</span> activos.
        </h1>
        
        <p class="text-base md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed reveal delay-200">
            Bloodshot nació en Monterrey con una visión clara: eliminar las páginas web "bonitas pero inútiles". Combinamos ingeniería de software de alto nivel con psicología de conversión.
        </p>
    </div>
</section>

<section class="py-24 bg-brand-gray border-y border-white/5 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Filosofía de Ingeniería</h2>
            <p class="text-gray-400">Nuestro stack no es casualidad; es rendimiento puro.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-12">
            <div class="reveal delay-100 text-center md:text-left">
                <div class="text-brand-red mb-4 flex justify-center md:justify-start"><i data-lucide="binary" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Código Limpio</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Evitamos el "bloatware". Escribimos código que las máquinas entienden rápido y los humanos pueden escalar.</p>
            </div>
            <div class="reveal delay-200 text-center md:text-left">
                <div class="text-brand-red mb-4 flex justify-center md:justify-start"><i data-lucide="gauge" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Obsesión por la Carga</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Cada milisegundo cuenta. Optimizamos assets y servidores para que tu sitio vuele, incluso en conexiones móviles.</p>
            </div>
            <div class="reveal delay-300 text-center md:text-left">
                <div class="text-brand-red mb-4 flex justify-center md:justify-start"><i data-lucide="shield-check" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Seguridad Nativa</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Desde SSL hasta protecciones a nivel de servidor. Tu negocio y los datos de tus clientes están blindados.</p>
            </div>
        </div>
    </div>
</section>

<section class="pt-24 pb-0 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-4 gap-6">
            <div class="lg:col-span-2 reveal">
                <h2 class="text-4xl font-bold text-white mb-6">Por qué Monterrey confía en nosotros.</h2>
                <p class="text-gray-400 mb-8">No somos una agencia de volumen, somos una boutique de calidad. Atendemos pocos proyectos al mes para asegurar que cada línea de código sea perfecta.</p>
                <a href="inicio#proyectos" class="inline-flex items-center gap-2 text-brand-red font-bold hover:underline transition-all">
                    Ver nuestra trayectoria <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
            </div>
            
            <div class="bg-white/5 border border-white/10 p-8 rounded-2xl reveal delay-100 flex flex-col justify-center hover:border-brand-red/50 transition-colors">
                <h4 class="text-white font-bold mb-3 text-lg flex items-center gap-2">
                    <i data-lucide="target" class="w-5 h-5 text-brand-red"></i> Misión
                </h4>
                <p class="text-gray-400 text-sm leading-relaxed">Transformar la presencia online de nuestros clientes en infraestructuras técnicas enfocadas en maximizar la conversión y la escalabilidad.</p>
            </div>
            
            <div class="bg-white/5 border border-white/10 p-8 rounded-2xl reveal delay-200 flex flex-col justify-center hover:border-brand-red/50 transition-colors">
                <h4 class="text-white font-bold mb-3 text-lg flex items-center gap-2">
                    <i data-lucide="eye" class="w-5 h-5 text-brand-red"></i> Visión
                </h4>
                <p class="text-gray-400 text-sm leading-relaxed">Ser el estudio digital de referencia para empresas que buscan innovación. Liderar el estándar de diseño web enfocado al retorno de inversión.</p>
            </div>
        </div>
    </div>
</section>

<section class="pt-12 md:pt-24 pb-12 px-6">
    <div class="max-w-5xl mx-auto bg-gradient-to-br from-brand-red to-red-900 rounded-[2rem] py-10 px-8 md:py-12 md:px-12 text-center reveal flex flex-col items-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-8 italic drop-shadow-md">¿Quieres dar el siguiente paso?</h2>
        
        <a href="inicio#contacto" class="px-8 py-4 border border-white/20 bg-white/5 rounded-full font-bold hover:bg-white hover:text-black transition-all duration-300 flex items-center justify-center shadow-[0_0_20px_rgba(255,255,255,0.05)] hover:shadow-[0_0_40px_rgba(255,255,255,0.4)] w-fit gap-2 group">
            Comenzar proyecto
            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>