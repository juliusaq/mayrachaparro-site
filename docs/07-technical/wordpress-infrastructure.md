# WordPress Child Theme Infrastructure

Documento tecnico migrado desde el `README.md` principal para conservar la auditoria inicial del sitio y la guia de despliegue del tema hijo.

## 1. Auditoria del Estado Actual (Sprint 1.1)

El siguiente es el estado inicial del servidor antes del desarrollo de componentes (auditado el 30 de junio de 2026):

### Especificaciones del Servidor

- **Entorno:** WPMU DEV Hosting (SSH disponible)
- **Version de WordPress:** 7.0
- **Version de PHP:** 8.3.31
- **Base de Datos:** MariaDB 10.6.23
- **Servidor Web:** Nginx / FPM

### Temas Instalados

- **Divi (Tema Padre):** Activo (Version 5.8.1)
- **Twenty Twenty-Five:** Inactivo (Version 1.5)

### Plugins Activos

- **Forminator (1.55.0):** Generador de formularios.
- **WP Defender (5.11.0):** Seguridad y cortafuegos.
- **WP Hummingbird (3.19.0):** Optimizacion de rendimiento y cache.
- **WPMU DEV SEO (3.16.2):** Optimizacion para motores de busqueda.
- **WP Smush Pro (4.1.2):** Optimizacion de imagenes.
- **WPMU DEV Updates (5.0.0):** Gestor de actualizaciones de WPMU DEV.
- **hosting (1.0):** Plugin imprescindible (Must-Use) de WPMU DEV.

### Auditoria de Customizaciones en Divi

- **Custom CSS en Divi Options (`et_divi`):** Ninguno (configuracion limpia).
- **Customizer Custom CSS (`theme_mods_Divi`):** Ninguno (`custom_css_post_id` = -1).
- **Theme Options de Divi:** Por defecto, sin configuraciones personalizadas previas heredadas.

## 2. Estructura del Tema Hijo

```text
child-theme/
├── style.css
├── functions.php
├── assets/
│   ├── css/
│   │   ├── tokens.css
│   │   ├── utilities.css
│   │   └── main.css
│   └── js/
│       └── main.js
└── components/
    └── index.php
```

## 3. Guia de Desarrollo Local y Despliegue

### Flujo de Trabajo

1. Todo el desarrollo del tema se realiza en `child-theme/`.
2. Antes de subir cambios, validar la sintaxis de PHP:

```bash
php -l child-theme/functions.php
```

3. Probar el despliegue mediante un `rsync` dry-run:

```bash
rsync -avz --dry-run child-theme/ mayra:mayrachaparro/public_html/wp-content/themes/mayrachaparro-child/
```

4. Si todo es correcto, desplegar los cambios:

```bash
rsync -avz child-theme/ mayra:mayrachaparro/public_html/wp-content/themes/mayrachaparro-child/
```

### Activacion del Tema Hijo

Una vez desplegado por primera vez, el tema hijo se puede activar desde la terminal mediante WP-CLI:

```bash
ssh mayra "wp --path=mayrachaparro/public_html theme activate mayrachaparro-child"
```

## 4. Estructura y Enrutamiento de Activos en `functions.php`

El tema hijo encola los recursos siguiendo buenas practicas de WordPress:

- Encola el estilo del tema padre (`Divi/style.css`).
- Encola los tokens de diseno (`assets/css/tokens.css`).
- Encola las utilidades (`assets/css/utilities.css`).
- Encola el archivo `style.css` del tema hijo como ancla de metadatos.
- Encola la hoja de estilos principal (`assets/css/main.css`).
- Encola `assets/js/main.js` en el footer con estrategia `defer`.
