# Bloodshot.io

Sitio web oficial de **Bloodshot.io**, agencia de diseño y desarrollo web con sede en Monterrey, Nuevo León, MX. Landing page orientada a conversión con páginas de servicios (diseño web, e-commerce y correos empresariales) y formulario de contacto para captación de leads.

## Stack

- **PHP** (sin framework) — páginas con includes compartidos (`includes/header.php` y `includes/footer.php`)
- **Tailwind CSS** vía CDN, con tema de marca personalizado (paleta `brand`: negro, rojo `#DC2626`, etc.)
- **Lucide Icons** vía CDN
- **Fuente Inter** desde Google Fonts
- **Apache** (`.htaccess`) en producción / router PHP en local

## Estructura del proyecto

```
bloodshot_io_v1/
├── index.php           # Landing principal (hero, marquee de clientes, proyectos, contacto)
├── diseno-web.php      # Servicio: diseño web
├── ecommerce.php       # Servicio: tiendas en línea
├── correos.php         # Servicio: correos empresariales (paquetes y precios)
├── nosotros.php        # Página "Nosotros"
├── proyectos.php       # Página de proyectos (en construcción)
├── servicios.php       # Página de servicios (en construcción)
├── contacto.php        # Página de contacto (vacía; el formulario vive en index.php)
├── send_mail.php       # Backend del formulario de contacto (envío vía mail())
├── router.php          # Router para el servidor embebido de PHP (desarrollo local)
├── .htaccess           # Reglas de Apache (producción)
├── includes/
│   ├── header.php      # <head>, config de Tailwind, navbar
│   └── footer.php      # Footer y cierre del documento
└── assets/
    ├── css/styles.css  # Estilos propios (animaciones, glass, reveal, etc.)
    ├── js/main.js      # Interacciones (navbar, reveals, etc.)
    └── img/            # Logos e imágenes de clientes/proyectos
```

## URLs limpias

Las páginas se sirven **sin extensión `.php`**:

- En **producción**, `.htaccess` reescribe `/servicios` → `servicios.php`, redirige `/inicio` → `index.php` y fuerza HTTPS.
- En **local**, `router.php` replica el mismo comportamiento para el servidor embebido de PHP.

## Desarrollo local

Requiere PHP instalado. Desde la raíz del proyecto:

```bash
php -S localhost:8000 router.php
```

Abrir [http://localhost:8000](http://localhost:8000).

> **Nota:** en localhost el envío de correo con `mail()` normalmente falla; `send_mail.php` lo detecta y simula un envío exitoso (`?status=success&mode=dev_simulation`) para poder probar la interfaz de las alertas.

## Formulario de contacto

`send_mail.php` procesa el formulario de la landing:

1. Solo acepta `POST` (acceso directo redirige a `/inicio`).
2. Sanitiza y valida `name`, `email`, `service` y `message`.
3. Envía el correo a `contacto@bloodshot.io` con asunto `[NUEVO LEAD WEB] - <servicio>`.
4. Redirige a `/inicio?status=success` o `?status=error_*` según el resultado.

## Despliegue

El sitio se despliega en **Hostinger**. El flujo de trabajo usa la rama `dev` para cambios y Pull Requests hacia `main`, que dispara el despliegue (CI/CD de Hostinger).

## Clientes destacados

Botanero Limón · Nue Lingerie · Boimsa · Gabrielo's Pizza
