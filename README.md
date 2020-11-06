# regClient
Aplicativo para registrar los datos de los cliente.

Resumen:

1.	Un cliente nuevo se puede registrar sin iniciar sesión, ya que es primera vez que ingresa a la página.
2.	Ahora, si un cliente requiere modificar sus datos personales puede hacerlo iniciando sesión y digitando los datos nuevos para guardarlos dando clic en modificar.
3.	El usuario con correo admin@admin.com podrá visualizar todos los clientes registrados dando clic en el menú Consultar. Su contraseña es 123456.
4.  El usuario con correo david@hotmail.com, es un cliente por lo tanto solamente podrá visualizar sus propios datos. Su contraseña es 123456.
5.  Ningún usuario puede modificar su correo electrónico, de ser necesario cambiarlo deberá registrarse de nuevo.

Para desplegar el aplicativo.

1.  Debe tener instalado Xampp for Windows 7.3.22
        Configuración de la base de datos: root
        Host: localhost
        Password: ""
        Nombre de la base de dato: clienteproimpo
        Drive Base de datos: MySql (MariaDB)
  
2.  Para clonar el repositorio deberá hacerlo en la carpeta htdocs/regClient ya que existen rutas y redireccionamientos a partir del directorio raíz.

      Abre la Git Bash.
      Cambia el directorio de trabajo actual a la ubicación en donde quieres clonar el directorio.
      Escribe git clone, y luego pega la URL que copiaste antes.
      $ git clone https://github.com/revy1464/regClient.git
