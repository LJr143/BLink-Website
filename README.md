

# BLink Philippines International OPC – Corporate Website

##  Project Overview

This repository contains the official corporate website for **BLink Philippines International OPC**.

The project is a **commission-based web development project** focused on designing and developing a modern, responsive, and maintainable company website. The system is built using the Laravel framework and modern frontend tooling to ensure scalability, performance, and clean architecture.

---

## About the Company

**BLink Philippines International OPC** is a Philippine-based corporation operating as a One Person Corporation (OPC). This website serves as the company’s official digital presence, providing information about its services, company profile, and contact details.

---

## 🛠️ Technology Stack

This project is built using the following technologies:

* **Backend Framework:** Laravel (PHP)
* **Frontend Templating:** Blade
* **Frontend Interactivity:** Alpine.js
* **Reactive Components:** Livewire
* **Asset Bundler:** Vite
* **JavaScript:** Vanilla JavaScript (ES Modules)
* **Database:** MySQL (configurable via .env)

---

## Architecture

The project follows:

* **MVC (Model–View–Controller)** architectural pattern
* Laravel request lifecycle handling
* Component-based UI development using Livewire
* Modern asset compilation using Vite

---

## Features

* Responsive corporate website
* Dynamic content rendering via Blade
* Interactive UI components using Alpine.js
* Livewire-powered reactive components
* Optimized asset bundling via Vite
* Secure form handling and validation
* Scalable Laravel structure for future expansion

---

## ⚙️ Installation Guide

Follow the steps below to set up the project locally:

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/LJr143/BLink-Website.git
cd BLink-Website
```

### 2️⃣ Install Dependencies

```bash
composer install
npm install
```

### 3️⃣ Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Update your `.env` file with database credentials.

### 4️⃣ Run Migrations

```bash
php artisan migrate
```

### 5️⃣ Start Development Server

```bash
npm run dev
php artisan serve
```

---

## 📦 Production Build

To build assets for production:

```bash
npm run build
```

---

## 📁 Project Structure Overview

```
app/
resources/views/
routes/
public/
database/
```

* `app/` – Core application logic
* `resources/views/` – Blade templates
* `routes/` – Web routes
* `public/` – Public assets
* `database/` – Migrations and seeders

---

## 🔐 Project Status

This is a commissioned project and may contain proprietary design and business logic specific to BLink Philippines International OPC.

---

## 👨‍💻 Developer

Developed by:
**Lorjohn Raña**
Laravel & Web Systems Developer

Front-end Team
**------**

---

## 📄 License

This project is proprietary and developed exclusively for BLink Philippines International OPC. Unauthorized distribution or reuse is prohibited without written permission.

---

