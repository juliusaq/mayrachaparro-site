# ADR-0002: North Star as Strategic Source

Estado: Accepted

Fecha: 2026-06-30

## Contexto

El repositorio ya separa documentacion filosofica, estrategica, de marca, de diseno y tecnica.

The Care System existe como fuente filosofica principal del proyecto. El Brand Book documenta la identidad de marca. El Design System documenta el lenguaje visual.

La plataforma necesita una fuente documental separada para definir la direccion estrategica de largo plazo.

## Decision

Crear `docs/02-strategy/north-star.md` como documento estrategico dedicado a la North Star de la plataforma.

Separar responsabilidades documentales de esta forma:

- The Care System: filosofia.
- North Star: direccion.
- Brand Book: marca.
- Design System: lenguaje visual.

## Consecuencias

- Las decisiones futuras podran evaluarse contra una fuente estrategica dedicada.
- La filosofia no queda mezclada con direccion estrategica.
- La marca no queda obligada a resolver preguntas de rumbo.
- El sistema visual puede derivar de filosofia, estrategia y marca sin reemplazarlas.
- El contenido estrategico de North Star debera incorporarse solo cuando haya sido aprobado.

## Alternativas consideradas

- Integrar North Star dentro de The Care System.
- Integrar North Star dentro del Brand Book.
- Mantener la direccion estrategica dispersa entre varios documentos.

Estas alternativas fueron descartadas para preservar fuentes de verdad claras y evitar duplicidad documental.
