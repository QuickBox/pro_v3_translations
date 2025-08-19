# Sistema de Traducción del Dashboard QuickBox

Este directorio contiene los archivos de idioma español para el sistema de traducción modular del Dashboard QuickBox. Este documento explica la estructura, uso y pautas de contribución para el sistema de traducción.

## Tabla de Contenidos

- [Sistema de Traducción del Dashboard QuickBox](#sistema-de-traducción-del-dashboard-quickbox)
  - [Tabla de Contenidos](#tabla-de-contenidos)
  - [Descripción General](#descripción-general)
  - [Estructura del Directorio](#estructura-del-directorio)
  - [Archivos de Traducción](#archivos-de-traducción)
    - [Estructura del Archivo](#estructura-del-archivo)
    - [Convenciones de Nomenclatura](#convenciones-de-nomenclatura)
  - [Agregar Nuevas Traducciones](#agregar-nuevas-traducciones)
  - [Modificar Traducciones Existentes](#modificar-traducciones-existentes)
  - [Claves de Traducción](#claves-de-traducción)
    - [Estructura de las Claves](#estructura-de-las-claves)
    - [Pautas de Nomenclatura de Claves](#pautas-de-nomenclatura-de-claves)
  - [Mejores Prácticas](#mejores-prácticas)
  - [Contribuir](#contribuir)
    - [Para Traductores](#para-traductores)
    - [Para Desarrolladores](#para-desarrolladores)
  - [Validación y Pruebas](#validación-y-pruebas)
    - [Scripts de Validación](#scripts-de-validación)
    - [Probar Nuevas Traducciones](#probar-nuevas-traducciones)
  - [Solución de Problemas](#solución-de-problemas)
    - [Problemas Comunes](#problemas-comunes)
    - [Obtener Ayuda](#obtener-ayuda)

## Descripción General

El Dashboard QuickBox utiliza un sistema de traducción modular que separa las traducciones en archivos lógicos basados en sus áreas funcionales. Esto hace que el sistema de traducción sea más mantenible y fácil de trabajar que el enfoque monolítico anterior.

## Estructura del Directorio

```bash
src/dashboard/lang/
├── es/                     # Archivos de idioma español
│   ├── buttons.php         # Etiquetas y acciones de botones
│   ├── dashboard.php       # Elementos de interfaz del dashboard principal
│   ├── errors.php          # Mensajes de error y validación
│   ├── help_manual.php     # Documentación de ayuda y tooltips
│   ├── misc.php            # Traducciones misceláneas
│   ├── navigation.php      # Elementos del menú de navegación
│   ├── pages.php           # Traducciones específicas de páginas
│   ├── popup.php           # Mensajes de diálogos emergentes
│   ├── settings.php        # Traducciones de la página de configuración
│   ├── system.php          # Mensajes relacionados con el sistema
│   ├── user_management.php # Interfaz de gestión de usuarios
│   ├── widgets.php         # Contenido de widgets del dashboard
│   └── README.md           # Este archivo
├── __testing__/            # Scripts de prueba y validación
├── lang_es.php             # Traducciones principales en español
└── lang_es_override.php    # Sobrescrituras de traducción
```

## Archivos de Traducción

### Estructura del Archivo

Cada archivo de traducción debe devolver un array asociativo donde:
- Las claves son las claves de traducción (en UPPER_SNAKE_CASE)
- Los valores son las cadenas traducidas

Ejemplo (`buttons.php`):

```php
<?php
/**
 * Etiquetas y Acciones de Botones
 * 
 * Este archivo contiene traducciones para botones y elementos de acción utilizados en todo el dashboard.
 */

return [
    'SAVE' => 'Guardar',
    'CANCEL' => 'Cancelar',
    'EDIT' => 'Editar',
    'DELETE' => 'Eliminar',
    'SUBMIT' => 'Enviar',
    'RESET' => 'Restablecer',
    'CLOSE' => 'Cerrar',
    'BACK' => 'Atrás',
    'NEXT' => 'Siguiente',
    'CONFIRM' => 'Confirmar',
    'DISMISS' => 'Descartar',
    'ENABLE' => 'Habilitar',
    'DISABLE' => 'Deshabilitar',
    'UPDATE' => 'Actualizar',
    'REMOVE' => 'Eliminar',
    'ADD' => 'Agregar',
    'SEARCH' => 'Buscar',
    'FILTER' => 'Filtrar',
    'SORT' => 'Ordenar',
    'MORE' => 'Más',
    'LESS' => 'Menos',
    'APPLY' => 'Aplicar',
    'CLEAR' => 'Limpiar',
    'UPLOAD' => 'Subir',
    'DOWNLOAD' => 'Descargar',
    'PREVIEW' => 'Vista Previa',
    'SELECT' => 'Seleccionar',
    'VIEW_DETAILS' => 'Ver Detalles',
    'MANAGE' => 'Gestionar',
    'CONFIGURE' => 'Configurar',
    'SETTINGS' => 'Configuración',
    'PREFERENCES' => 'Preferencias',
    'ADVANCED' => 'Avanzado',
    'LOADING' => 'Cargando...',
    'PROCESSING' => 'Procesando...',
    'PLEASE_WAIT' => 'Por favor espere...',
    'SUCCESS' => '¡Éxito!',
    'ERROR' => '¡Error!',
    'WARNING' => '¡Advertencia!',
    'INFO' => 'Información',
    'HELP' => 'Ayuda'
];
```

### Convenciones de Nomenclatura

1. **Nombres de Archivos**: Usar minúsculas con guiones bajos (ej., `user_management.php`)
2. **Claves de Traducción**: Usar UPPER_SNAKE_CASE (ej., `USERNAME_REQUIRED`)
3. **Comentarios**: Incluir bloques PHPDoc al inicio de cada archivo y para traducciones complejas

## Agregar Nuevas Traducciones

1. **Elegir el archivo apropiado** basado en el propósito de la traducción
2. **Agregar la nueva traducción** con una clave descriptiva
3. **Agregar comentarios** para contexto si es necesario
4. **Actualizar el README** si estás agregando una nueva categoría

Ejemplo:

```php
// En el archivo apropiado (ej., user_management.php)
return [
    // ... traducciones existentes ...
    'TWO_FACTOR_AUTH' => 'Autenticación de Dos Factores',
    'TWO_FACTOR_AUTH_DESCRIPTION' => 'Agregar una capa extra de seguridad a tu cuenta',
];
```

## Modificar Traducciones Existentes

1. **Encontrar la clave** en el archivo apropiado
2. **Actualizar el valor** manteniendo la misma clave
3. **Actualizar cualquier documentación relacionada** si el significado ha cambiado

## Claves de Traducción

### Estructura de las Claves

Las claves de traducción siguen estos patrones:

- `NOUN_VERB`: `USER_CREATED`, `PASSWORD_CHANGED`
- `NOUN_DESCRIPTION`: `ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL`: `USERNAME_LABEL`
- `NOUN_PLACEHOLDER`: `SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP`: `API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB`: `ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB`: `SUCCESS_USER_CREATED`

### Pautas de Nomenclatura de Claves

1. Ser descriptivo pero conciso
2. Agrupar claves relacionadas juntas
3. Usar terminología consistente
4. Evitar abreviaciones a menos que sean ampliamente entendidas

## Mejores Prácticas

1. **Consistencia**: Usar terminología y estilo consistentes
2. **Contexto**: Proporcionar contexto para términos ambiguos
3. **Variables**: Usar sintaxis `{variable}` para contenido dinámico
4. **HTML**: Incluir HTML mínimo solo cuando sea necesario
5. **Longitud**: Mantener traducciones concisas
6. **Comentarios**: Agregar comentarios para traducciones complejas o ambiguas

## Contribuir

### Para Traductores

1. **Forkear** el repositorio
2. **Crear una rama** para tus traducciones
3. **Enviar un pull request** con tus cambios
4. **Referenciar cualquier issue relacionado** en tu PR

### Para Desarrolladores

1. **Agregar nuevas traducciones** al módulo apropiado
2. **Actualizar pruebas** si es necesario
3. **Ejecutar validación** antes de enviar PRs
4. **Documentar cambios** en la descripción del PR

## Validación y Pruebas

### Scripts de Validación

Ejecutar el script de validación para verificar problemas:

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### Probar Nuevas Traducciones

1. Limpiar cualquier opcache si está habilitado
2. Probar todos los elementos de UI afectados
3. Verificar reemplazo de contenido dinámico
4. Verificar escape apropiado

## Solución de Problemas

### Problemas Comunes

1. **Traducciones Faltantes**: Verificar el archivo y clave correctos
2. **HTML Roto**: Verificar que todas las etiquetas estén correctamente cerradas
3. **Desajuste de Variables**: Asegurar que todas las `{variables}` coincidan entre traducciones
4. **Problemas de Caché**: Limpiar caché del navegador y PHP opcache

### Obtener Ayuda

Si encuentras problemas:
1. Verificar issues existentes para problemas similares
2. Consultar la documentación de QuickBox
3. Abrir un nuevo issue con detalles sobre el problema

---

Esta documentación es parte del sistema de traducción del Dashboard QuickBox.
