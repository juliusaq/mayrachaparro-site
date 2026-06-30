# ADR-0001: Documentation Architecture

Estado: Accepted

Fecha: 2026-06-30

## Contexto

El repositorio dejo de representar unicamente el codigo fuente de un sitio web y paso a ser el repositorio oficial de la Plataforma Digital de la Dra. Mayra Alejandra Chaparro Fernandez.

El proyecto necesitara sostener documentacion estrategica, filosofica, de marca, UX, diseno, contenido, tecnica, arquitectura, roadmap y operacion.

## Decision

Separar la documentacion en carpetas numeradas dentro de `docs/`, cada una con una responsabilidad documental clara.

Crear `docs/01-care-system/` como carpeta propia para The Care System.

The Care System queda establecido como la fuente filosofica principal del proyecto. Su contenido se mantendra separado de estrategia, marca, UX, diseno y documentacion tecnica para evitar duplicidad o mezcla de responsabilidades.

## Consecuencias

- La filosofia principal del proyecto tiene una ubicacion estable y prioritaria.
- La estrategia puede apoyarse en The Care System sin reemplazarlo.
- La marca, UX, diseno y contenido pueden derivar principios desde una fuente central.
- El repositorio queda preparado para crecer mas alla del sitio web inicial.
- Cualquier contenido filosofico nuevo debe incorporarse solo cuando haya sido aprobado.

## Alternativas consideradas

- Mantener la filosofia dentro de `docs/02-strategy/`.
- Mantener la filosofia dentro de `docs/03-brand/`.
- Mantener un unico documento fundacional sin separacion por sistema.

Estas alternativas fueron descartadas porque podrian mezclar fuente filosofica, estrategia comercial, identidad de marca y ejecucion tactica.
