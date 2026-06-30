# Mayra Care Platform

Repositorio oficial de la Plataforma Digital de la Dra. Mayra Alejandra Chaparro Fernandez.

Este repositorio contiene dos dimensiones del proyecto:

- Codigo fuente del primer producto digital: el sitio web basado en WordPress y tema hijo.
- Documentacion estrategica, filosofica, de marca, UX, diseno, contenido, arquitectura y operacion de la plataforma.

El sitio web es el primer producto, pero el repositorio esta preparado para sostener una plataforma digital de largo plazo.

## Estructura principal

```text
mayrachaparro-site/
├── child-theme/       # Codigo del tema hijo de WordPress
├── docs/              # Documentacion oficial de la plataforma
├── prompts/           # Prompts y plantillas de trabajo con IA
├── CHANGELOG.md       # Registro de cambios del proyecto
└── README.md          # Entrada principal del repositorio
```

## Documentacion

La documentacion vive en `docs/` y esta organizada por responsabilidad:

- `00-governance/`: reglas editoriales, proceso de decisiones, glosario y mapa del repositorio.
- `01-care-system/`: fuente filosofica principal del proyecto, pendiente de contenido aprobado.
- `02-strategy/`: estrategia de plataforma y productos.
- `03-brand/`: marca, voz, mensajes y activos.
- `04-design/`: sistema de diseno, tokens, componentes y accesibilidad.
- `05-ux/`: arquitectura de informacion, recorridos, flujos y formularios.
- `06-content/`: estrategia editorial, SEO, modelos de contenido y borradores.
- `07-technical/`: arquitectura tecnica, WordPress, despliegue, seguridad e integraciones.
- `08-adr/`: Architecture Decision Records.
- `09-roadmap/`: hitos, releases y planeacion.
- `10-operations/`: mantenimiento, QA, analitica e incidentes.

Antes de crear o modificar documentos, revisar:

- `docs/00-governance/documentation-standards.md`
- `docs/00-governance/decision-process.md`
- `docs/00-governance/repo-map.md`

## Codigo

El codigo personalizado del sitio vive en `child-theme/`.

El tema hijo encola los recursos siguiendo una cadena de estilos basada en tokens, utilidades y estilos principales.

Validacion PHP sugerida:

```bash
php -l child-theme/functions.php
```

## Despliegue

Prueba de despliegue:

```bash
rsync -avz --dry-run child-theme/ mayra:mayrachaparro/public_html/wp-content/themes/mayrachaparro-child/
```

Despliegue:

```bash
rsync -avz child-theme/ mayra:mayrachaparro/public_html/wp-content/themes/mayrachaparro-child/
```
