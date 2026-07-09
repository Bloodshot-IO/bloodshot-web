<?php 
$page_title = "Correos Empresariales | Paquetes y Precios | Bloodshot.io";
include 'includes/header.php'; 
?>

<section class="relative pt-44 pb-10 md:pt-40 md:pb-16 px-6 overflow-hidden border-b border-white/5">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-red rounded-full filter blur-[180px] opacity-[0.08] animate-pulse pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-brand-red rounded-full filter blur-[180px] opacity-[0.05] animate-pulse pointer-events-none" style="animation-delay: 1s;"></div>
    
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="flex items-center justify-center gap-1.5 mb-6 reveal">
            <span class="text-brand-red font-bold tracking-widest text-sm uppercase">Nuestros paquetes</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.1] mb-6 reveal delay-100 text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]">
            Proyecta confianza en cada message.
        </h1>

        <p class="text-base md:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed reveal delay-200">
            Desde cuentas integradas hasta infraestructuras corporativas Google Workspace. Profesionaliza tu comunicación con correos @tuempresa.com.
        </p>
    </div>
</section>

<section class="pt-20 md:pt-32 pb-16 px-6 bg-brand-dark relative z-20">
    <div class="max-w-7xl mx-auto">
        
        <div class="grid lg:grid-cols-3 gap-8 items-stretch">
            
            <!-- PLAN ESENCIAL -->
            <div class="reveal delay-100 flex flex-col h-full bg-black border border-white/10 rounded-3xl p-8 hover:border-white/20 transition-all duration-300 relative group">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-white mb-2">Esencial</h3>
                    <p class="text-gray-400 text-sm h-10">Ideal para emprendedores buscando profesionalizar su bandeja.</p>
                </div>
                
                <div class="mb-8 pb-8 border-b border-white/10">
                    <span class="text-4xl font-extrabold text-white">$200</span><span class="text-gray-500 font-medium">.00 MXN</span>
                    <p class="text-brand-red text-sm font-bold mt-2">Mantenimiento mensual (Retainer)</p>
                </div>

                <ul class="space-y-4 mb-10 flex-grow text-gray-300 text-sm">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Hasta 2 buzones enlazados a tu Gmail personal.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Almacenamiento delegado a tu cuenta de Google.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Seguridad DNS: Firmas SPF y políticas DMARC.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Organización por filtros y etiquetas automáticas.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Sincronización en la App oficial de Gmail.</span>
                    </li>
                </ul>

                <a href="index.php?servicio=Correo Esencial#contacto" class="w-full py-4 text-center border border-white/20 rounded-xl text-white font-bold hover:bg-white hover:text-black transition-colors block mt-auto">
                    Seleccionar Esencial
                </a>
            </div>

            <!-- PLAN CRECIMIENTO -->
            <div class="reveal delay-200 flex flex-col h-full bg-brand-gray border-2 border-brand-red rounded-3xl p-8 relative transform md:-translate-y-4 shadow-[0_0_40px_rgba(220,38,38,0.15)] z-10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-red text-white text-xs font-black uppercase tracking-widest py-1.5 px-4 rounded-full">
                    El más elegido
                </div>
                
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-white mb-2">Crecimiento</h3>
                    <p class="text-gray-400 text-sm h-10">Capacidad extendida y herramientas avanzadas con buzones nativos.</p>
                </div>
                
                <div class="mb-8 pb-8 border-b border-white/10">
                    <span class="text-4xl font-extrabold text-white">$400</span><span class="text-gray-500 font-medium">.00 MXN</span>
                    <p class="text-brand-red text-sm font-bold mt-2">Mantenimiento mensual (Retainer)</p>
                </div>

                <ul class="space-y-4 mb-10 flex-grow text-gray-300 text-sm">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Hasta 2 buzones nativos e independientes.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>10 GB de almacenamiento real y dedicado por cuenta.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>50 confirmaciones de lectura al mes para rastreo de envíos.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Hasta 3 plantillas de email nativas para respuestas rápidas.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Conexión IMAP para uso en Outlook o Mac Mail.</span>
                    </li>
                </ul>

                <a href="index.php?servicio=Correo Crecimiento#contacto" class="w-full py-4 text-center bg-brand-red rounded-xl text-white font-bold hover:bg-red-700 transition-colors shadow-[0_0_20px_rgba(220,38,38,0.4)] block mt-auto">
                    Seleccionar Crecimiento
                </a>
            </div>

            <!-- PLAN CORPORATIVO -->
            <div class="reveal delay-300 flex flex-col h-full bg-black border border-white/10 rounded-3xl p-8 hover:border-white/20 transition-all duration-300 relative group">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-white mb-2">Corporativo</h3>
                    <p class="text-gray-400 text-sm h-10">El estándar premium y oficial bajo el ecosistema de Google.</p>
                </div>
                
                <div class="mb-8 pb-8 border-b border-white/10">
                    <span class="text-4xl font-extrabold text-white">$250</span><span class="text-gray-500 font-medium">.00 MXN</span>
                    <p class="text-brand-red text-sm font-bold mt-2">Mantenimiento mensual por usuario</p>
                </div>

                <ul class="space-y-4 mb-10 flex-grow text-gray-300 text-sm">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>1 cuenta/usuario oficial de Google Workspace Starter.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>30 GB de almacenamiento empresarial en Drive.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Acceso oficial a Google Meet, Calendar y Docs.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Administración centralizada y control de endpoints.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-brand-red shrink-0 mt-0.5"></i>
                        <span>Asesoría para la creación de alias ilimitados.</span>
                    </li>
                </ul>

                <a href="index.php?servicio=Correo Corporativo#contacto" class="w-full py-4 text-center border border-white/20 rounded-xl text-white font-bold hover:bg-white hover:text-black transition-colors block mt-auto">
                    Seleccionar Corporativo
                </a>
            </div>

        </div>
        
        <!-- TEXTO LEGAL INFERIOR ACTUALIZADO -->
        <div class="mt-16 text-center text-sm text-gray-500">
            <p>Los precios mostrados corresponden al depósito de mantenimiento mensual de infraestructura (retainer). Adicionalmente, el inicio de cada proyecto requiere cubrir una tarifa única de configuración inicial (<span class="text-gray-300 font-bold">$850 MXN</span> Esencial, <span class="text-gray-300 font-bold">$1,200 MXN</span> Crecimiento, o <span class="text-gray-300 font-bold">$1,500 MXN</span> Corporativo).</p>
        </div>
        
    </div>
</section>

<?php include 'includes/footer.php'; ?>