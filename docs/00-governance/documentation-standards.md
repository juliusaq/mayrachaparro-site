# Documentation Standards

## Proposito

Definir reglas minimas para que la documentacion del repositorio sea mantenible durante el crecimiento de la plataforma.

## Estados documentales

- `Draft`: documento en preparacion.
- `Review`: documento listo para revision.
- `Approved`: documento aprobado por Julius.
- `Archived`: documento historico que ya no debe usarse como fuente activa.

## Reglas

- No incorporar estrategia nueva sin aprobacion explicita.
- No mezclar filosofia, marca, UX, tecnica y operacion en un mismo documento.
- Cada carpeta principal debe tener un `README.md`.
- Los documentos deben declarar su proposito antes de desarrollar contenido.
- Los documentos aprobados deben evitar notas especulativas dentro del cuerpo principal.
- Las decisiones arquitectonicas deben registrarse como ADR en `docs/08-adr/`.

## Convenciones de nombres

- Usar nombres en minusculas y kebab-case.
- Usar prefijos numericos solo cuando el orden sea parte del significado.
- Evitar versiones en el nombre del archivo salvo que el documento sea historico o exportable.

## Contenido pendiente

Cuando un documento exista solo como placeholder, debe indicarlo de forma clara y no simular contenido final.
