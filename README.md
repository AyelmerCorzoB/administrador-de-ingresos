# Administrador de Ingresos de Restaurante

<center>

![Logo del Proyecto](public/favicon.ico)

</center>

## Autor
#### AyelmerCorzoB
<center> 
<img src="resources/images/foto.png" alt="Descripción de la imagen" width="150" height="150">
</center>




## Fecha
21/12/2024

## Descripción
Este proyecto es una aplicación web desarrollada para administrar los ingresos de un restaurante, permitiendo gestionar datos relacionados con las transacciones y ventas realizadas en el establecimiento. 

![Imagen de ejemplo](https://via.placeholder.com/600x200)

## Funcionalidades
- ✅ Registro y seguimiento de ingresos.
- 📊 Visualización de informes de ingresos.
- 🔧 Gestión de datos mediante una interfaz intuitiva.
- 🔒 Seguridad en el manejo de la información.

## Tecnologías Utilizadas
- **Laravel** ( *Framework principal* ):
  - Vite ( *compilación de assets*).
  - TailwindCSS ( *diseño y estilos*).
- **MySQL** ( *Base de datos* ).
- **PhpMyAdmin** ( *Herramienta de administración de base de datos* ).

![Tecnologías Utilizadas](https://via.placeholder.com/600x150)

## Instalación
Sigue estos pasos para instalar el proyecto en tu entorno local:

1. Clonar el repositorio:
    ```bash
   git clone 
    ```

2. Acceder al directorio del proyecto:
   ```bash
   cd administrador-ingresos-restaurante
   ```

3. Instalar dependencias de PHP:
   ```bash
   composer install
   ```

4. Instalar dependencias de Node.js:
   ```bash
   npm install
   ```

5. Configurar el archivo `.env` con los datos de tu base de datos:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

6. Generar la clave de aplicación:
   ```bash
   php artisan key:generate
   ```

7. Ejecutar las migraciones:
   ```bash
   php artisan migrate
   ```

8. Ejecutar el servidor:
   ```bash
   php artisan serve
   ```

![Instalación](https://via.placeholder.com/600x150)

## Uso
1. Accede a la URL proporcionada por el comando `php artisan serve`.
2. Utiliza la interfaz web para gestionar los ingresos del restaurante.
3. Explora las diferentes secciones para ver informes detallados y administrar la información.

![Captura de Pantalla](https://via.placeholder.com/600x400)

## Contribución
Si deseas contribuir al proyecto:
1. Realiza un fork del repositorio.
2. Crea una rama para tu función o mejora:
   ```bash
   git checkout -b nueva-funcionalidad
   ```
3. Realiza tus cambios y haz commit:
   ```bash
   git commit -m "Descripción de los cambios"
   ```
4. Envía un pull request para revisión.

## Contacto
- **Autor**: AyelmerCorzoB
- **Email**: corzobarbosaa@gmail.com

![Contacto](https://via.placeholder.com/600x150)

## Licencia
Este proyecto está bajo la licencia [Licencia del proyecto]. Consulta el archivo `LICENSE` para más información.

## Versión
1.0.0

## Fecha de última actualización
30/12/2024

## Enlaces a Recursos Adicionales
- [Documentación Oficial de Laravel](https://laravel.com/docs)
- [Documentación Oficial de TailwindCSS](https://tailwindcss.com/docs)
- [MySQL Documentation](https://dev.mysql.com/doc/)

![Recursos Adicionales](https://via.placeholder.com/600x150)

