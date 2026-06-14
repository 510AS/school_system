# 🏫 School Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-8-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-7.4-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" />
</p>

A school administration system built with **Laravel** for managing students, teachers, classes, and fee collection. Features CRUD operations for all entities with a clean admin interface.

---

## ✨ Features

### 👨‍🎓 Student Management
- **Student CRUD** — Register, update, view, and remove students
- **Class Assignment** — Assign students to classes and sections
- **Student Profiles** — Personal info, guardian details, contact

### 👩‍🏫 Teacher Management
- **Teacher CRUD** — Manage teacher profiles and assignments
- **Subject Assignment** — Link teachers to subjects and classes

### 🏛 Academic Structure
- **Classes & Sections** — Define school structure (Grade 1-A, 1-B, etc.)
- **Subjects** — Manage curriculum subjects per class

### 💰 Fee Management
- **Fee Collection** — Record and track student fee payments
- **Fee Status** — Paid, pending, overdue tracking
- **Fee Reports** — Overview of collections and outstanding amounts

### 🔐 Authentication
- **Admin Login** — Secure access to management panel
- **Role-Based Access** — Admin and teacher permission levels

---

## 🛠 Tech Stack

| Category | Technology |
|----------|-----------|
| **Framework** | Laravel 8 |
| **Frontend** | Blade Templates + Bootstrap |
| **Database** | MySQL |
| **Auth** | Laravel Auth |
| **Build Tool** | Laravel Mix |

---

## 🚀 Getting Started

```bash
git clone https://github.com/510AS/school_system.git
cd school_system

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

---

## 📁 Project Structure

```
app/
├── Http/Controllers/    # Student, Teacher, Fee, Class controllers
├── Models/              # Student, Teacher, ClassRoom, Fee
resources/
├── views/
│   ├── students/        # Student CRUD views
│   ├── teachers/        # Teacher management
│   ├── fees/            # Fee collection views
│   └── layouts/         # Base templates
routes/
├── web.php              # All routes
database/
├── migrations/          # Students, teachers, classes, fees schema
```

---

## 📄 License

This project is for educational and portfolio purposes.
