# FacturacionZataca
Gestion de facturación zataca y gestión de apliación.


1. Login de usuario. HECHO
2. CRUDs (en general, usuarios, servicios, clientes..etc)
3. Control de roles. HECHO (FALTA)
4. Validación de datos.
5. Generación de facturas.

  DIEGO: 
  IZAN:
  JUANEKKO:

  PONER AHI LO QIUE QUEREIS HACER.

  PARA LOS ROLES: 
  https://www.nigmacode.com/laravel/roles-de-usuario-en-laravel/
  PLANTILLAS:
  ADMIN LTE O LO QUE VEAMOS

  Resumen: 
   DESCRIPCIÓN DEL PROYECTO:
   Aplicación que gestiona facturación para proveedor de servicios ,segun el rol asignado a dicho usuario, podrá realizar distintas funciones, entre ellas dar de alta, editar o borrar clientes y servicios, al igual que generar facturas.
    Alcance:
        Generar facturación de servicios de manera automática y manual.
        Automatizar el proceso mensual, evitando errores.

    Descripción del Producto:
        Registro de clientes con información detallada.
        Registro de servicios con fecha de inicio.
        Facturación recurrente mensual de forma desatendida.
        Generar histórico de facturaciones.

    Partes Interesadas:
        CEO, personal de administración, empleados.
        Roles específicos y responsabilidades para cada parte interesada.

    Campos Importantes para Clientes y Servicios:
        Información del cliente: Licencia, tarifa, NIF, etc.
        Información del servicio: Nombre, fecha de inicio, etc.

    Tipos de Facturación:
        Importe fijo, cantidad por precio, variedad de unidades.

    Generación de Facturación:
        Campos obligatorios, liquidación por fecha, periodo de facturación.

    Seguridad:
        Acceso restringido a datos sensibles.

    Interfaces de Usuario:
        Gestión de clientes, servicios, unidades de medida, etc.
        Generación de facturas y consultas.

    Roles de Usuario:
        CEO, personal de administración, empleados con diferentes niveles de acceso.

    Requisitos de Interfaz:
        Implementación de interfaces para la gestión de clientes, servicios, unidades de medida y generación de facturas.

CON ELOQUENT

    Entidades Principales:
        Cliente
        Servicio
        Factura
        Usuario (para gestionar roles)

    Relaciones:
        Un cliente puede tener múltiples servicios (relación uno a muchos).
        Una factura pertenece a un cliente y contiene información de los servicios.

    Migraciones y Modelos:
        Crear migraciones y modelos para cada entidad.
        Establecer relaciones utilizando métodos Eloquent como hasMany, belongsTo.

    Roles y Permisos:
        Implementar un sistema de roles y permisos utilizando paquetes como "spatie/laravel-permission".

    Interfaces:
        Utilizar Laravel Blade para construir las interfaces de gestión y consulta.
        Integrar formularios para la introducción de datos necesarios.

    Generación de Facturas:
        Desarrollar un sistema de generación de facturas que tome la información de clientes y servicios.

    Seguridad:
        Implementar middleware para restringir el acceso a datos sensibles según los roles.

  

 
  


