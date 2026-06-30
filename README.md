# mayrachaparro.com - WordPress Child Theme Infrastructure

Repositorio del tema hijo personalizado y recursos para el sitio web **mayrachaparro.com**. Este proyecto está diseñado para ser modular, orientado a componentes reutilizables, y preparado para un crecimiento a largo plazo.

---

## 1. Auditoría del Estado Actual (Sprint 1.1)

El siguiente es el estado inicial del servidor antes del desarrollo de componentes (Auditado el 30 de junio de 2026):

### Especificaciones del Servidor
*   **Entorno:** WPMU DEV Hosting (SSH disponible)
*   **Versión de WordPress:** 7.0
*   **Versión de PHP:** 8.3.31
*   **Base de Datos:** MariaDB 10.6.23
*   **Servidor Web:** Nginx / FPM

### Temas Instalados
*   **Divi (Tema Padre):** Activo (Versión 5.8.1)
*   **Twenty Twenty-Five:** Inactivo (Versión 1.5)

### Plugins Activos
*   **Forminator (1.55.0):** Generador de formularios.
*   **WP Defender (5.11.0):** Seguridad y cortafuegos.
*   **WP Hummingbird (3.19.0):** Optimización de rendimiento y caché.
*   **WPMU DEV SEO (3.16.2):** Optimización para motores de búsqueda.
*   **WP Smush Pro (4.1.2):** Optimización de imágenes.
*   **WPMU DEV Updates (5.0.0):** Gestor de actualizaciones de WPMU DEV.
*   **hosting (1.0):** Plugin imprescindible (Must-Use) de WPMU DEV.

### Auditoría de Customizaciones en Divi
*   **Custom CSS en Divi Options (`et_divi`):** Ninguno (Configuración limpia).
*   **Customizer Custom CSS (`theme_mods_Divi`):** Ninguno (`custom_css_post_id` = -1).
*   **Theme Options de Divi:** Por defecto, sin configuraciones personalizadas previas heredadas.

---

## 2. Estructura del Repositorio

El repositorio sigue un esquema limpio donde el código personalizado del sitio vive dentro de la carpeta `child-theme/`:

```
mayrachaparro-site/
├── README.md               # Documentación general y guías de desarrollo
├── CHANGELOG.md            # Registro de cambios por sprints
├── branding/               # Recursos de marca (Logos, paletas de colores, tipografías)
├── docs/                   # Documentación adicional, briefs o wireframes
├── child-theme/            # Carpeta raíz del Tema Hijo para WordPress
│   ├── style.css           # Metadatos del tema hijo y estilos generales
│   ├── functions.php       # Lógica del tema hijo, enqueue de scripts/estilos y carga de componentes
│   ├── assets/             # Recursos estáticos
│   │   ├── css/
│   │   │   └── main.css    # Estilos CSS personalizados globales y modulares
│   │   ├── js/
│   │   │   └── main.js     # JavaScript personalizado global
│   │   └── images/         # Imágenes locales del tema (iconos, SVGs, placeholders)
│   └── components/         # Componentes y bloques PHP/HTML reutilizables
│       └── index.php       # Archivo de seguridad
└── prompts/                # Instrucciones de IA y plantillas de prompts
```

---

## 3. Guía de Desarrollo Local y Despliegue

### Flujo de Trabajo
1.  Todo el desarrollo se realiza de manera local en el directorio `child-theme/`.
2.  Antes de subir cambios, valida la sintaxis de PHP:
    ```bash
    php -l child-theme/functions.php
    ```
3.  Prueba el despliegue mediante un `rsync` dry-run:
    ```bash
    rsync -avz --dry-run child-theme/ mayra:mayrachaparro/public_html/wp-content/themes/mayrachaparro-child/
    ```
4.  Si todo es correcto, despliega los cambios en producción:
    ```bash
    rsync -avz child-theme/ mayra:mayrachaparro/public_html/wp-content/themes/mayrachaparro-child/
    ```

### Activación del Tema Hijo
Una vez desplegado por primera vez, el tema hijo se puede activar desde la terminal mediante WP-CLI:
```bash
ssh mayra "wp --path=mayrachaparro/public_html theme activate mayrachaparro-child"
```

---

## 4. Estructura y Enrutamiento de Activos en `functions.php`

El tema hijo encola los recursos siguiendo las mejores prácticas de WordPress:
- Encola el estilo del tema padre (`Divi/style.css`).
- Encola el estilo principal del tema hijo (`mayrachaparro-child/style.css`).
- Encola la hoja de estilos personalizada global (`assets/css/main.css`).
- Encola los archivos de scripts personalizados (`assets/js/main.js`) en el footer de manera diferida (`defer`).
