# 🚀 Laravel E-Commerce REST API (Dockerized)

A clean, production-ready RESTful API for an E-commerce platform built with **Laravel 11** and fully containerized using **Docker**.
This project provides a complete backend solution for managing products, categories, orders, and order items.

---

## 🧱 Tech Stack

* **Backend:** PHP 8.2 + Laravel 11
* **Database:** MySQL 8.0
* **Containerization:** Docker & Docker Compose
* **Server:** Laravel Development Server (Bitnami container)

---

## ✨ Features

✔ Full CRUD for Products
✔ Category management
✔ Order creation & history
✔ Order items management
✔ Dockerized environment
✔ Ready for Frontend / Mobile integration

---

## 📦 Requirements

Make sure you have installed:

* Docker
* Docker Compose

Check installation:

```bash
docker -v
docker compose version
```

---

# 🚀 Installation & Setup

## 1️⃣ Clone the Repository

```bash
git clone <your-repository-url>
cd project
```

---

## 2️⃣ Start Docker Containers

```bash
docker compose up -d
```

Check container status:

```bash
docker compose ps
```

---

## 3️⃣ Initialize the Application

Run the following commands inside the container:

### Install Dependencies

```bash
docker compose exec app composer install
```

### Generate Application Key

```bash
docker compose exec app php artisan key:generate
```

### Run Database Migrations

```bash
docker compose exec app php artisan migrate
```

### Start Laravel Server

```bash
docker compose exec -d app php artisan serve --host=0.0.0.0 --port=8000
```

Application will be available at:

```
http://localhost:8000
```

---

# 🌐 API Endpoints

## 📦 Products

| Method | Endpoint             | Description          |
| ------ | -------------------- | -------------------- |
| GET    | `/api/products`      | Get all products     |
| GET    | `/api/products/{id}` | Get product details  |
| POST   | `/api/products`      | Create a new product |
| PUT    | `/api/products/{id}` | Update product       |
| DELETE | `/api/products/{id}` | Delete product       |

### 🔹 Example Request

**POST /api/products**

```json
{
    "name": "Gaming Mouse",
    "category_id": 1,
    "price": 49.99,
    "stock": 100
}
```

---

## 🗂 Categories

| Method | Endpoint          | Description         |
| ------ | ----------------- | ------------------- |
| GET    | `/api/categories` | List all categories |
| POST   | `/api/categories` | Create new category |

---

## 🛒 Orders

| Method | Endpoint           | Description          |
| ------ | ------------------ | -------------------- |
| GET    | `/api/orders`      | View order history   |
| POST   | `/api/orders`      | Place a new order    |
| GET    | `/api/order-items` | View all order items |

---

# 🗄 Database Connectivity (External Client)

You can connect using tools like:

* TablePlus
* DBeaver
* MySQL Workbench

### Connection Settings

```
Host: 127.0.0.1
Port: 33061
Username: lll
Password: password
Database: laravel
```

---

# 🛠 Maintenance Commands

## Stop All Services

```bash
docker compose down
```

## Restart Services

```bash
docker compose restart
```

## Access Container Terminal

```bash
docker compose exec app bash
```

## View Logs

```bash
docker compose logs -f app
```

---

# 🧯 Troubleshooting

| Issue                 | Solution                                    |
| --------------------- | ------------------------------------------- |
| Container not running | `docker logs laravel_app`                   |
| Permission denied     | `sudo chmod -R 777 storage bootstrap/cache` |
| DB connection error   | Ensure `.env` has `DB_HOST=db`              |

---

# 📁 Project Structure

```
project/
 ├── app/
 ├── routes/
 ├── database/
 ├── docker-compose.yml
 ├── Dockerfile
 └── README.md
```

---

# 📈 Ready for Extension

This project can be easily extended with:

* JWT / Laravel Sanctum authentication
* Frontend integration (React, Vue, Next.js)
* Payment gateway integration
* Microservices architecture

---

# 🏁 Conclusion

A clean, scalable, Dockerized REST API suitable for:

* Portfolio projects
* Technical assessments
* MVP development
* E-commerce backend foundation

---

If you'd like, I can also generate:

* 🔹 A GitHub-style README with badges
* 🔹 Swagger / OpenAPI documentation
* 🔹 Postman collection
* 🔹 Production deployment guide (VPS / CI-CD)
