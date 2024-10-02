Este proyecto consiste en el desarrollo de una página web para la empresa ToCupboard, utilizando WordPress y aplicando las mejores prácticas del modelo DevSecOps. 
El proyecto incluye la integración de llamadas a una API y una simulación de una pasarela de pagos, asegurando que todo el sitio cumpla con los estándares 
de seguridad recomendados.

-Estructura del Repositorio
El repositorio contiene las siguientes carpetas y archivos:
jetpack-waf/: Archivos relacionados con el plugin Jetpack y configuración de seguridad.
languages/: Archivos de traducciones para compatibilidad multilenguaje.
plugins/: Contiene los plugins activos en la instalación de WordPress.
themes/: Carpeta con los temas instalados, incluido el tema personalizado utilizado para ToCupboard.
uploads/: Contiene los archivos subidos al sitio, como imágenes o documentos.
wflogs/: Archivos de logs generados por el plugin Wordfence, usado para seguridad.
backup_2024-10-01-0906_ToCupBoard_e087...zip: Archivo de respaldo de la instalación de WordPress realizado.
index.php: Archivo principal de la instalación de WordPress.

Instalacion
Descarga el repositorio
Subir el contenido del repositorio al directorio correspondiente de tu instalación de WordPress.
Activar el tema personalizado desde el panel de administración de WordPress.
Configurar las llamadas a la API en el archivo /api/config.php con sus credenciales
Para la simulación de la pasarela de pagos, asegúrate de tener configurado un entorno de prueba en PayPal Sandbox
Sigue las prácticas de seguridad recomendadas en /security/ para proteger tu instalación.

Uso:
Acceso a las páginas de Inicio, Sobre Nosotros, Productos y Contact a través de la barra de navegación.
Prueba las llamadas API visitando la página de productos o enviando un formulario desde la página de contacto.
Simula un pago en paypal seleccionando un producto y siguiendo el proceso de compra.

Seguridad:
El proyecto sigue las mejores prácticas de seguridad recomendadas por el modelo DevSecOps, que incluye:
Integración Continua (CI) y Despliegue Continuo (CD) con pruebas automatizadas.
Uso de plugins de seguridad en WordPress.
Autenticación segura en las llamadas a la API.
Implementación de HTTPS en todo el sitio.
Validación y encriptación de datos en la simulación de la pasarela de pagos.

