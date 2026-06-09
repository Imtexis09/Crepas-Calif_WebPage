# Crepas Calif 🥞✨

¡Bienvenido a **Crepas Calif**! Este es un proyecto de desarrollo web completo (Full-Stack) diseñado y desarrollado para un negocio real de comida, creado originalmente como proyecto integrador para la materia de Programación en el **CBTIS 03** (5° Semestre).

El sitio web combina una interfaz atractiva e informativa para los clientes con un potente sistema de gestión interna (CRUD) para el administrador, simulando la experiencia de una plataforma de comercio electrónico moderna.

---

## 🚀 Características Principales

El proyecto se divide en dos grandes secciones: la experiencia del usuario final y el panel de administración.

### 🌐 Sitio Público (Experiencia del Cliente)
* **Inicio:** Pantalla de bienvenida con la identidad de la marca.
* **Conócenos:** Sección institucional que detalla la historia, misión y visión del negocio.
* **Galería:** Espacio visual interactivo para mostrar la calidad de los productos.
* **Contáctanos:** Formulario y datos de contacto para los clientes.
* **Menú Interactivo (Tipo Amazon):** Una tienda virtual donde los usuarios pueden explorar los productos disponibles en tiempo real y gestionar su pedido mediante un **Carrito de Compras** dinámico programado en JavaScript.

### 🔐 Panel de Administración (Sistema CRUD)
* **Autenticación Protegida:** Inicio de sesión especial y seguro exclusivo para el administrador del negocio.
* **Control Total de Inventario (CRUD):** El administrador puede:
  * **Create:** Subir nuevos productos al menú con sus respectivos detalles y precios.
  * **Read:** Visualizar la lista actualizada de existencias.
  * **Update:** Modificar información de productos existentes.
  * **Delete:** Dar de baja productos del menú de manera inmediata.

---

## 🛠️ Stack Tecnológico

El proyecto fue construido utilizando tecnologías nativas, garantizando un rendimiento óptimo sin depender de frameworks pesados:

* **Frontend:** HTML5, CSS3 (Diseño responsivo y estilizado) y **JavaScript (ES6)** para la lógica del carrito de compras y dinamismo de la interfaz.
* **Backend:** **PHP**, encargado de la lógica del servidor, sesiones de usuario y comunicación con la base de datos.
* **Base de Datos:** MySQL (gestionada a través de phpMyAdmin).
* **Entorno de Desarrollo Local:** **XAMPP** (Servidor Apache y MySQL integrado).

---

## 💻 Instalación y Configuración Local

Para ejecutar este proyecto en tu entorno local, asegúrate de tener instalado [XAMPP](https://www.apachefriends.org/).

### 1. **Clonar el repositorio** dentro de la carpeta raíz de tu servidor local (habitualmente `htdocs` en XAMPP):
   `cd C:/xampp/htdocs
   git clone [https://github.com/TU_USUARIO/crepas-calif.git](https://github.com/TU_USUARIO/crepas-calif.git)`
### 2. Configurar la Base de Datos:

 * Abre el panel de control de XAMPP e inicia los módulos de Apache y MySQL.

 * Dirígete a http://localhost/phpmyadmin/ en tu navegador.

 * Crea una nueva base de datos (por ejemplo, crepas_calif).

 * Importa el archivo .sql que se encuentra en la carpeta del proyecto (ej. database/crepas_calif.sql).

 * Ajustar la conexión (si es necesario):

 * Revisa el archivo de configuración de conexión en PHP (habitualmente conexion.php o similar) y asegúrate de que el usuario (root), la contraseña (vacía por defecto) y el nombre de la base de datos coincidan con tu configuración local.

### Ejecutar la aplicación:

 * Abre tu navegador web e ingresa a: http://localhost/crepas-calif/

## 📈 Impacto Académico
Este proyecto fue desarrollado bajo los estrictos requerimientos técnicos de la academia de Programación del CBTIS 03, cumpliendo con los estándares exigidos para la aprobación del módulo de desarrollo de aplicaciones web con almacenamiento de datos persistentes.
   
