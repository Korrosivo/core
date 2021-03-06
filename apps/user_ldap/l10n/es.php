<?php $TRANSLATIONS = array(
"Failed to clear the mappings." => "Ocurrió un fallo al borrar las asignaciones.",
"Failed to delete the server configuration" => "No se pudo borrar la configuración del servidor",
"The configuration is valid and the connection could be established!" => "La configuración es válida y la conexión puede establecerse!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "La configuración es válida, pero falló el Enlace. Por favor, compruebe la configuración del servidor y las credenciales.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "La configuración no es válida. Por favor, busque en el log de ownCloud para más detalles.",
"Deletion failed" => "Falló el borrado",
"Take over settings from recent server configuration?" => "¿Asumir los ajustes actuales de la configuración del servidor?",
"Keep settings?" => "Mantener la configuración?",
"Cannot add server configuration" => "No se puede añadir la configuración del servidor",
"mappings cleared" => "Asignaciones borradas",
"Success" => "Éxito",
"Error" => "Error",
"Connection test succeeded" => "La prueba de conexión fue exitosa",
"Connection test failed" => "La prueba de conexión falló",
"Do you really want to delete the current Server Configuration?" => "¿Realmente desea eliminar la configuración actual del servidor?",
"Confirm Deletion" => "Confirmar eliminación",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Advertencia:</b> Las aplicaciones user_ldap y user_webdavauth son incompatibles.  Puede que experimente un comportamiento inesperado. Pregunte al administrador del sistema para desactivar uno de ellos.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Advertencia:</b> El módulo LDAP de PHP no está instalado, el sistema no funcionará. Por favor consulte al administrador del sistema para instalarlo.",
"Server configuration" => "Configuración del Servidor",
"Add Server Configuration" => "Agregar configuracion del servidor",
"Host" => "Servidor",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Puede omitir el protocolo, excepto si requiere SSL. En ese caso, empiece con ldaps://",
"Base DN" => "DN base",
"One Base DN per line" => "Un DN Base por línea",
"You can specify Base DN for users and groups in the Advanced tab" => "Puede especificar el DN base para usuarios y grupos en la pestaña Avanzado",
"User DN" => "DN usuario",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "El DN del usuario cliente con el que se hará la asociación, p.ej. uid=agente,dc=ejemplo,dc=com. Para acceso anónimo, deje DN y contraseña vacíos.",
"Password" => "Contraseña",
"For anonymous access, leave DN and Password empty." => "Para acceso anónimo, deje DN y contraseña vacíos.",
"User Login Filter" => "Filtro de inicio de sesión de usuario",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Define el filtro a aplicar cuando se ha realizado un login. %%uid remplazrá el nombre de usuario en el proceso de login.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "usar %%uid como comodín, ej: \"uid=%%uid\"",
"User List Filter" => "Lista de filtros de usuario",
"Defines the filter to apply, when retrieving users." => "Define el filtro a aplicar, cuando se obtienen usuarios.",
"without any placeholder, e.g. \"objectClass=person\"." => "Sin comodines, ej: \"objectClass=person\".",
"Group Filter" => "Filtro de grupo",
"Defines the filter to apply, when retrieving groups." => "Define el filtro a aplicar, cuando se obtienen grupos.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "sin comodines, ej: \"objectClass=posixGroup\".",
"Connection Settings" => "Configuración de conexión",
"Configuration Active" => "Configuracion activa",
"When unchecked, this configuration will be skipped." => "Cuando deseleccione, esta configuracion sera omitida.",
"Port" => "Puerto",
"Backup (Replica) Host" => "Servidor de copia de seguridad (Replica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Dar un servidor de copia de seguridad opcional. Debe ser una réplica del servidor principal LDAP / AD.",
"Backup (Replica) Port" => "Puerto para copias de seguridad (Replica)",
"Disable Main Server" => "Deshabilitar servidor principal",
"When switched on, ownCloud will only connect to the replica server." => "Cuando se inicie, ownCloud unicamente conectará al servidor replica",
"Use TLS" => "Usar TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "No lo use para conexiones LDAPS, Fallará.",
"Case insensitve LDAP server (Windows)" => "Servidor de LDAP no sensible a mayúsculas/minúsculas (Windows)",
"Turn off SSL certificate validation." => "Apagar la validación por certificado SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Si la conexión sólo funciona con esta opción, importe el certificado SSL del servidor LDAP en su servidor ownCloud.",
"Not recommended, use for testing only." => "No recomendado, sólo para pruebas.",
"Cache Time-To-Live" => "Cache TTL",
"in seconds. A change empties the cache." => "en segundos. Un cambio vacía la caché.",
"Directory Settings" => "Configuracion de directorio",
"User Display Name Field" => "Campo de nombre de usuario a mostrar",
"The LDAP attribute to use to generate the user`s ownCloud name." => "El atributo LDAP a usar para generar el nombre de usuario de ownCloud.",
"Base User Tree" => "Árbol base de usuario",
"One User Base DN per line" => "Un DN Base de Usuario por línea",
"User Search Attributes" => "Atributos de la busqueda de usuario",
"Optional; one attribute per line" => "Opcional; un atributo por linea",
"Group Display Name Field" => "Campo de nombre de grupo a mostrar",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "El atributo LDAP a usar para generar el nombre de los grupos de ownCloud.",
"Base Group Tree" => "Árbol base de grupo",
"One Group Base DN per line" => "Un DN Base de Grupo por línea",
"Group Search Attributes" => "Atributos de busqueda de grupo",
"Group-Member association" => "Asociación Grupo-Miembro",
"Special Attributes" => "Atributos especiales",
"Quota Field" => "Cuota",
"Quota Default" => "Cuota por defecto",
"in bytes" => "en bytes",
"Email Field" => "E-mail",
"User Home Folder Naming Rule" => "Regla para la carpeta Home de usuario",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Vacío para el nombre de usuario (por defecto). En otro caso, especifique un atributo LDAP/AD.",
"Internal Username" => "Nombre de usuario interno",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder in ownCloud. It is also a port of remote URLs, for instance for all *DAV services. With this setting, the default behaviour can be overriden. To achieve a similar behaviour as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users." => "Por defecto el nombre de usuario interno será creado desde el atributo UUID. Esto asegura que el nombre de usuario es único y los caracteres no necesitan ser convertidos. En el nombre de usuario interno sólo se pueden usar estos caracteres: [a-zA-Z0-9_.@-]. Otros caracteres son sustituidos por su correspondiente en ASCII o simplemente quitados. En coincidencias un número será añadido o incrementado. El nombre de usuario interno es usado para identificar un usuario internamente. Es también el nombre por defecto para la carpeta personal del usuario in ownCloud. También es un puerto de URLs remotas, por ejemplo, para todos los servicios *DAV. Con esta configuración el comportamiento por defecto puede ser cambiado. Para conseguir un comportamiento similar a como era antes de ownCloud 5, introduce el atributo del nombre en pantalla del usuario en el siguiente campo. Déjalo vacío para el comportamiento por defecto. Los cambios solo tendrán efecto en los nuevos usuarios LDAP.",
"Internal Username Attribute:" => "Atributo Nombre de usuario Interno:",
"Override UUID detection" => "Sobrescribir la detección UUID",
"By default, ownCloud autodetects the UUID attribute. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Por defecto, ownCloud autodetecta el atributo UUID. El atributo UUID es usado para identificar indudablemente usuarios y grupos LDAP. Además, el nombre de usuario interno será creado en base al UUID, si no ha sido especificado otro comportamiento arriba. Puedes sobrescribir la configuración y pasar un atributo de tu elección. Debes asegurarte de que el atributo de tu elección sea accesible por los usuarios y grupos y ser único. Déjalo en blanco para usar el comportamiento por defecto. Los cambios tendrán efecto solo en los nuevos usuarios y grupos de LDAP.",
"UUID Attribute:" => "Atributo UUID:",
"Username-LDAP User Mapping" => "Asignación del Nombre de usuario de un usuario LDAP",
"ownCloud uses usernames to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from ownCloud username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found by ownCloud. The internal ownCloud name is used all over in ownCloud. Clearing the Mappings will have leftovers everywhere. Clearing the Mappings is not configuration sensitive, it affects all LDAP configurations! Do never clear the mappings in a production environment. Only clear mappings in a testing or experimental stage." => "ownCloud utiliza nombres de usuario para almacenar y asignar (meta) datos. Con el fin de identificar con precisión y reconocer usuarios, cada usuario LDAP tendrá un nombre de usuario interno. Esto requiere una asignación de nombre de usuario de ownCloud a usuario LDAP. El nombre de usuario creado se asigna al UUID del usuario LDAP. Además el DN se almacena en caché más bien para reducir la interacción de LDAP, pero no se utiliza para la identificación. Si la DN cambia, los cambios serán encontrados por ownCloud. El nombre interno de ownCloud se utiliza para todo en ownCloud. Eliminando las asignaciones tendrá restos por todas partes. Eliminando las asignaciones no es sensible a la configuración, que afecta a todas las configuraciones de LDAP! No limpiar nunca las asignaciones en un entorno de producción. Sólo borrar asignaciones en una situación de prueba o experimental.",
"Clear Username-LDAP User Mapping" => "Borrar la asignación de los Nombres de usuario de los usuarios LDAP",
"Clear Groupname-LDAP Group Mapping" => "Borrar la asignación de los Nombres de grupo de los grupos de LDAP",
"Test Configuration" => "Configuración de prueba",
"Help" => "Ayuda"
);
