# Crepas Calif 🥞✨

Welcome to **Crepas Calif**! This is a Full-Stack web application designed and developed for a real food business. It was originally created as a Capstone Project for the Web Programming course during my 5th semester at **CBTIS 03**.

The platform combines an attractive, responsive user interface for customers with a robust internal management system (CRUD) for the administrator, replicating the core features of a modern e-commerce platform.

---

## 🚀 Key Features

The project is divided into two main modules: the customer-facing store and the secure administration panel.

### 🌐 Public Site (Customer Experience)
* **Home:** Welcome screen showcasing the brand's identity.
* **About Us:** Institutional section detailing the business's history, mission, and vision.
* **Gallery:** An interactive visual showcase displaying high-quality product images.
* **Contact Us:** Information and form for customer inquiries.
* **Interactive Menu (Amazon-Style):** A virtual store where users can explore available products in real-time and manage their orders using a dynamic **Shopping Cart** built with JavaScript.

### 🔐 Admin Panel (CRUD System)
* **Secure Authentication:** Protected login gateway exclusively for the business administrator.
* **Inventory Control (CRUD):** A secure backend interface allowing the administrator to perform operational optimization:
  * **Create:** Upload new products to the menu with detailed descriptions, images, and pricing.
  * **Read:** View an updated, real-time list of current inventory.
  * **Update:** Modify information of existing products for real-time inventory control.
  * **Delete:** Remove items from the live menu instantly.

---

## 🛠️ Tech Stack

This project was built using native technologies, ensuring optimal performance and lightweight architecture without heavy external frameworks:

* **Frontend:** HTML5, CSS3 (Responsive Design), and **JavaScript (ES6)** for the interactive shopping cart and UI dynamics.
* **Backend:** **PHP** managing server-side logic, user sessions, and secure database communication.
* **Database:** MySQL (managed via phpMyAdmin).
* **Local Development Environment:** **XAMPP** (Apache Server and MySQL integration).

---

## 💻 Installation and Local Setup

To run this project locally, ensure you have [XAMPP](https://www.apachefriends.org/) installed on your machine.

### 1. Clone the repository
Clone the project inside your local server's root directory (usually `htdocs` in XAMPP):
`cd C:/xampp/htdocs
git clone [https://github.com/Imtexis09/crepas-calif.git](https://github.com/Imtexis09/crepas-calif.git)`
### 2. Database Configuration
* Open the XAMPP Control Panel and start both the **Apache** and **MySQL** modules.
* Navigate to `http://localhost/phpmyadmin/` in your web browser.
* Create a new database (e.g., `crepas_calif`).
* Import the `.sql` file located in the project structure (e.g., `database/crepas_calif.sql`).

### 3. Connection Setup
* Review the database connection file in PHP (usually `conexion.php` or config file).
* Ensure that the credentials user (`root`), password (`""` empty by default), and database name match your local setup.

### 4. Run the Application
* Open your browser and navigate to: `http://localhost/crepas-calif/`

---

## 📈 Academic Impact
This project was developed under the rigorous technical requirements of the CBTIS 03 Programming Academy, successfully meeting the standards established for building web applications with persistent data storage.
   
