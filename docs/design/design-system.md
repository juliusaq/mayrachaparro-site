# Design System Foundation (DS-01) — mayrachaparro.com

Este documento define la base del lenguaje visual y la arquitectura CSS que gobernará la plataforma digital de la Dra. Mayra Chaparro.

---

## 1. Filosofía del Sistema de Diseño

La plataforma digital de la Dra. Mayra Chaparro no es un sitio web corporativo o médico tradicional. Está diseñada bajo una metodología de **minimalismo cálido y editorial**, enfocada en la humanidad, la prevención y la tranquilidad.

### Principios Visuales Coherentes
*   **Editorial:** Composiciones balanceadas, tipografías legibles y respiro visual, similares a una revista de diseño o bienestar premium.
*   **Minimalista:** Uso estricto del espacio en blanco. Cada elemento en pantalla debe tener un propósito claro; evitar adornos superfluos.
*   **Humana:** Centrada en la cercanía y la empatía, reflejando el carácter protector y cuidador de la Dra. Mayra Chaparro.
*   **Premium:** Detalles de alta calidad (micro-animaciones fluidas, contrastes suaves y alineaciones perfectas).
*   **Natural:** Colores y formas inspirados en elementos orgánicos y calmantes (salvia, arena, luz).
*   **Tranquila:** Transmitir paz y reducir la incertidumbre o miedo asociado con las visitas al dentista.

### Lo que NUNCA seremos
*   ❌ **Corporativa:** No usamos estructuras rígidas, bloques saturados o lenguajes transaccionales fríos.
*   ❌ **Fría:** Evitamos paletas de colores puramente clínicas (como azules médicos saturados o blancos de quirófano).
*   ❌ **Agresiva:** Sin tipografías toscas, llamadas a la acción estresantes, ni banners invasivos.
*   ❌ **Recargada:** Sin animaciones aceleradas, exceso de bordes duros o acumulación de elementos innecesarios.

---

## 2. Arquitectura CSS

La estructura técnica del código CSS sigue un orden conceptual estricto de menor a mayor especificidad y complejidad (modelo adaptado de la metodología CUBE CSS y diseño atómico):

```
Design Tokens (variables globales de base)
   ↓
Utilities (clases utilitarias de un solo propósito)
   ↓
Primitives (estilos base de elementos HTML globales)
   ↓
Components (bloques de UI modulares y reutilizables)
   ↓
Layouts (estructuras de página, grids, headers, footers)
   ↓
Pages (modificaciones específicas para páginas individuales)
```

### Implementación en el Tema Hijo:
*   `tokens.css`: Contiene la declaración de variables custom properties en `:root`.
*   `utilities.css`: Contiene clases utilitarias (`.text-center`, `.flow`, etc.).
*   `main.css`: Contiene la inicialización de elementos HTML base (primitivas) y la estructura de componentes.

Amparado en las buenas prácticas de WordPress y rendimiento, **no cargamos CSS con `@import`**. Todos los archivos se encolan secuencialmente en `functions.php` con dependencias explícitas:
1. `mayrachaparro-tokens`
2. `mayrachaparro-utilities` (depende de `tokens`)
3. `mayrachaparro-child-style` (en `main.css`, depende de `utilities`)

---

## 3. Convenciones de Nombres

*   **Variables de Tokens:** Usan el prefijo `--` seguido de la categoría y el modificador en minúsculas y kebab-case.
    *   Ejemplo: `--color-primary`, `--space-md`, `--transition-normal`.
*   **Clases Utilitarias:** Tienen nombres altamente descriptivos y directos.
    *   Ejemplo: `.text-center`, `.visually-hidden`.
*   **Composición y Layout:** Clases utilitarias de estructura que no aplican estilos visuales sino comportamiento espacial.
    *   Ejemplo: `.flow`, `.stack`, `.cluster`.

---

## 4. Propósito de las Categorías de Tokens

### Colores de Base (Palette)
Definen los colores crudos del proyecto. No se usan directamente en componentes complejos, sino como base de referencia.
*   **Primary (Verde Salvia):** Representa la filosofía de prevención, salud y bienestar natural.
*   **Secondary (Rosa Suave):** Representa la calidez, la personalidad cercana y el lado protector de Mayra.
*   **Base (Blanco Cálido y Arena):** Establecen el entorno de luz, orden y espacio en blanco.

### Colores Semánticos (Semantic Colors)
Asocian los colores de la paleta base con funciones específicas en la interfaz, lo que permite escalabilidad y cambios de tema en el futuro.
*   `--surface`: Fondo principal de la página (Blanco Cálido).
*   `--surface-alt`: Fondo secundario para contrastar secciones o cards (Arena Claro).
*   `--surface-accent`: Color de fondo destacado (Sage Green muy claro o Rosa suave).
*   `--text-primary`: Color de texto principal para lectura cómoda (Gris cálido oscuro).
*   `--text-secondary`: Color de texto secundario para metadatos o subtítulos (Gris cálido medio).
*   `--border-subtle`: Bordes muy suaves para separar elementos sin crear divisiones visuales agresivas.

### Tipografía (Typography)
*   `--font-family-display`: Usada para encabezados principales y títulos de gran escala (H1, H2, H3), estableciendo el carácter editorial.
*   `--font-family-body`: Usada para cuerpo de texto y elementos de interfaz de alta lectura.
*   *Nota: Ambas apuntan al system-font stack temporalmente.*

### Espaciado (Spacing)
Escala espacial móvil-primero basada en un factor de escala consistente (4px/8px grid) nombrada por tamaños abstractos en lugar de píxeles rígidos, garantizando consistencia en todas las vistas.
*   `--space-2xs` (4px) hasta `--space-3xl` (72px).

### Bordes (Borders)
Establece la curvatura física de los contenedores para suavizar la interfaz.
*   `--radius-sm` (4px), `--radius-md` (8px), `--radius-lg` (12px), `--radius-xl` (16px), `--radius-pill` (9999px).

### Sombras (Shadows)
Representan la profundidad y elevación tridimensional de manera muy sutil, simulando luz difusa natural.
*   `--shadow-xs` a `--shadow-lg` con opacidades muy bajas (entre 2% y 5%).

### Transiciones (Motion)
Controlan la velocidad y suavizado de los estados interactivos (hovers, transiciones de pantalla).
*   `--transition-fast` (150ms), `--transition-normal` (300ms) y `--transition-slow` (500ms).

### Capas (Layers)
Garantizan el orden de apilamiento vertical (`z-index`) para evitar conflictos visuales entre elementos sticky, modales y notificaciones.
*   `--z-base` (0), `--z-dropdown` (100), `--z-sticky` (200), `--z-modal` (1000), `--z-toast` (2000).
