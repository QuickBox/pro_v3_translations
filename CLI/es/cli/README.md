# QuickBox Pro - Sistema de Idioma Modular

## Resumen

Este directorio contiene el sistema de idioma modular para QuickBox Pro CLI. El archivo original `cli_lang` (3,695 líneas) ha sido dividido en módulos funcionales para una mejor organización, mantenibilidad y escalabilidad.

## Estructura de Módulos

El sistema de idioma modular está organizado en los siguientes grupos funcionales:

### Módulos Principales
- **core.sh** - Operaciones del sistema central (bloqueos, limpieza, funciones básicas)
- **apt.sh** - Operaciones de gestión de paquetes APT
- **software.sh** - Operaciones de instalación, remoción y actualización de software
- **ssl.sh** - Gestión de certificados SSL/LetsEncrypt
- **dns.sh** - Gestión de credenciales DNS
- **users.sh** - Operaciones de gestión de usuarios
- **vpn.sh** - Operaciones VPN/WireGuard
- **database.sh** - Gestión de base de datos (MySQL/SQLite)
- **updater.sh** - Operaciones del actualizador del sistema
- **manager.sh** - Gestor de software (respaldo/restauración/rollback)
- **help.sh** - Mensajes de ayuda y manejo de errores

### Módulos Extendidos
- **software_access.sh** - Información de acceso al software y URLs
- **software_config.sh** - Mensajes de configuración y configuración del software
- **wireguard.sh** - Configuración y gestión específica de WireGuard
- **misc.sh** - Utilidades misceláneas y mensajes generales del sistema

## Descripciones de Módulos

### Módulos Principales

#### core.sh
Contiene operaciones del sistema central incluyendo:
- Funciones de limpieza de memoria y caché
- Manejo y eliminación de bloqueos
- Utilidades de logging del dashboard
- Mensajes básicos de estado del sistema

#### apt.sh
Gestiona operaciones de gestión de paquetes APT:
- Actualizaciones de base de datos de paquetes
- Resolución de bloqueos
- Mensajes de finalización de actualización
- Verificación y validación de paquetes

#### software.sh
Maneja instalación, remoción y actualizaciones de software:
- Encabezados y progreso de instalación
- Procesos de reinstalación
- Operaciones de remoción
- Procedimientos de actualización
- Gestión de compilación y dependencias

#### ssl.sh
Gestión integral de certificados SSL/LetsEncrypt:
- Instalación y renovación de certificados
- Soporte de desafío DNS para múltiples proveedores
- Operaciones de desafío HTTP
- Validación de certificados y manejo de errores
- Configuración interactiva de DNS para varios proveedores

#### dns.sh
Sistema de gestión de credenciales DNS:
- Verificación de estado de proveedores
- Validación de credenciales
- Instrucciones de configuración para todos los proveedores soportados
- Manejo de errores y solución de problemas
- Operaciones de respaldo y restauración

#### users.sh
Operaciones de gestión de usuarios:
- Creación y eliminación de usuarios
- Gestión de contraseñas
- Promoción y degradación de usuarios
- Operaciones de ban/unban

#### vpn.sh
Operaciones VPN y WireGuard:
- Configuración de VPN
- Configuración de cliente
- Gestión de servidor
- Estado de conexión

#### database.sh
Gestión de base de datos para MySQL y SQLite:
- Instalación y configuración
- Migración entre tipos de base de datos
- Operaciones de respaldo y restauración
- Mantenimiento y optimización
- Verificación de integridad

#### updater.sh
Operaciones del actualizador del sistema:
- Seguimiento del progreso de actualización
- Gestión de dependencias
- Actualizaciones de componentes
- Estado de finalización

#### manager.sh
Operaciones del gestor de software:
- Creación y gestión de respaldos
- Operaciones de restauración
- Funcionalidad de rollback
- Gestión de configuración predeterminada
- Gestión de versiones

#### help.sh
Sistema de ayuda y manejo de errores:
- Generación de ayuda específica del software
- Instrucciones de uso de comandos
- Mensajes de error y advertencias
- Funciones de ayuda interactiva

### Módulos Extendidos

#### software_access.sh
Información de acceso al software y configuración:
- URLs y puertos de interfaz web
- Credenciales de acceso y configuración
- Información de acceso específica del dominio
- Detalles de configuración del cliente

#### software_config.sh
Configuración del software y manejo especial:
- Migración MySQL para Ombi
- Manejo de credenciales de actualización de Plex
- Configuración de Rclone
- Procesos especiales de configuración del software

#### wireguard.sh
Operaciones específicas de WireGuard:
- Configuración de cliente y servidor
- Procesos de configuración interactiva
- Sistema de ayuda de gestión
- Manejo de errores para operaciones de WireGuard

#### misc.sh
Utilidades misceláneas y mensajes generales:
- Manejo de opciones desconocidas
- Mensajes de error generales
- Funciones de utilidad
- Ayuda del generador de configuración de NordVPN

## Uso

### Para Desarrolladores

1. **Agregar Nuevos Mensajes**: Agregar nuevas funciones de idioma al módulo apropiado basado en la funcionalidad
2. **Modificar Mensajes Existentes**: Localizar la función en el módulo relevante y actualizarla
3. **Crear Nuevos Módulos**: Seguir la convención de nomenclatura y estructura de módulos existentes

### Para Administradores de Sistemas

1. **Usar el Sistema Modular**: El sistema carga automáticamente todos los módulos vía `cli_lang_modular`
2. **Compatibilidad Hacia Atrás**: Todas las llamadas de función existentes continúan funcionando sin cambios
3. **Validación de Módulos**: El sistema valida que todos los módulos requeridos estén presentes

## Convenciones de Nomenclatura

- **Nombres de Archivos**: Usar nombres descriptivos con extensión `.sh` (ej., `software_access.sh`)
- **Nombres de Funciones**: Seguir el patrón `quickbox::lang::categoría::subcategoría::acción()`
- **Variables**: Usar nombres descriptivos con alcance apropiado
- **Comentarios**: Incluir documentación completa para funciones complejas

## Beneficios

### Mantenibilidad
- **Módulos Enfocados**: Cada módulo maneja un área funcional específica
- **Navegación Más Fácil**: Los desarrolladores pueden localizar rápidamente funciones relevantes
- **Complejidad Reducida**: Archivos más pequeños son más fáciles de entender y modificar

### Escalabilidad
- **Crecimiento Modular**: Nueva funcionalidad puede agregarse sin afectar módulos existentes
- **Desarrollo Independiente**: Múltiples desarrolladores pueden trabajar en diferentes módulos simultáneamente
- **Carga Selectiva**: Solo los módulos requeridos necesitan ser cargados

### Organización
- **Agrupación Lógica**: Las funciones relacionadas están agrupadas juntas
- **Estructura Clara**: La jerarquía de módulos refleja la arquitectura del sistema
- **Documentación**: Cada módulo es autodocumentado con propósitos claros

## Estrategia de Migración

### Fase 1: Creación de Módulos ✅
- [x] Dividir el archivo original `cli_lang` en módulos funcionales
- [x] Crear archivo puente `cli_lang_modular`
- [x] Implementar validación de módulos y manejo de errores

### Fase 2: Pruebas y Validación
- [ ] Probar todos los módulos con funcionalidad existente de QuickBox Pro
- [ ] Validar compatibilidad hacia atrás
- [ ] Pruebas de rendimiento y optimización

### Fase 3: Despliegue
- [ ] Lanzamiento gradual a entornos de desarrollo
- [ ] Pruebas de aceptación de usuario
- [ ] Despliegue en producción

### Fase 4: Documentación y Capacitación
- [ ] Completar documentación para desarrolladores
- [ ] Crear guías de migración
- [ ] Materiales de capacitación para contribuyentes

## Contribuir

### Directrices
1. **Seguir Convenciones de Nomenclatura**: Usar patrones establecidos para consistencia
2. **Agregar Documentación**: Incluir comentarios para funciones complejas
3. **Probar Cambios**: Asegurar que las modificaciones no rompan la funcionalidad existente
4. **Actualizar README**: Mantener la documentación actualizada con los cambios

### Agregar Nuevos Módulos
1. Crear el archivo del módulo en el directorio `cli/`
2. Agregar el módulo al archivo puente (`cli_lang_modular`)
3. Actualizar la lista de validación
4. Documentar el módulo en este README

### Modificar Módulos Existentes
1. Localizar el módulo apropiado para tus cambios
2. Seguir el estilo de código y patrones existentes
3. Probar tus cambios exhaustivamente
4. Actualizar la documentación relevante

## Estructura de Archivos

```bash
cli/
├── README.md                 # Este archivo de documentación
├── core.sh                   # Operaciones del sistema central
├── apt.sh                    # Gestión de paquetes APT
├── software.sh               # Instalación/remoción/actualización de software
├── ssl.sh                    # Operaciones SSL/LetsEncrypt
├── dns.sh                    # Gestión de credenciales DNS
├── users.sh                  # Operaciones de gestión de usuarios
├── vpn.sh                    # Operaciones VPN/WireGuard
├── database.sh               # Gestión de base de datos
├── updater.sh                # Operaciones del actualizador del sistema
├── manager.sh                # Operaciones del gestor de software
├── help.sh                   # Ayuda y manejo de errores
├── software_access.sh        # Información de acceso al software
├── software_config.sh        # Configuración del software
├── wireguard.sh              # Operaciones específicas de WireGuard
└── misc.sh                   # Utilidades misceláneas
```

## Métricas de Éxito

- **Tamaño de Archivo Reducido**: Cada módulo es significativamente más pequeño que el archivo original de 3,695 líneas
- **Mantenibilidad Mejorada**: Más fácil localizar y modificar funcionalidad específica
- **Colaboración Mejorada**: Múltiples desarrolladores pueden trabajar en diferentes módulos
- **Mejor Organización**: Agrupación lógica de funciones relacionadas
- **Compatibilidad Hacia Atrás**: Toda la funcionalidad existente continúa funcionando sin cambios

## Soporte

Para preguntas o problemas con el sistema de idioma modular:
- Revisar este README para directrices de uso
- Revisar la estructura de módulos y convenciones de nomenclatura
- Probar cambios en un entorno de desarrollo primero
- Consultar al equipo de desarrollo de QuickBox Pro para modificaciones complejas 