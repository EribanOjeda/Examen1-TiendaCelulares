
# Examen1 - Tienda de Celulares 📱

Proyecto Laravel API RESTful con autenticación usando Sanctum.

---

## 🔧 Requisitos

- PHP 8.x
- Composer
- MySQL
- Node.js y npm

---

## 🚀 Instalación y configuración

```bash
git clone https://github.com/tuusuario/Examen1-TiendaCelulares.git
cd Examen1-TiendaCelulares
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
```

Configura tu archivo `.env` con tus credenciales MySQL:

```
DB_DATABASE=tiendadb
DB_USERNAME=root
DB_PASSWORD=
```

Luego ejecuta:

```bash
php artisan migrate
php artisan serve
```

---

## 🔐 Endpoints API

- POST `/api/register`
- POST `/api/login`
- POST `/api/logout` (requiere token)
- CRUD `/api/marcas`
- CRUD `/api/productos`

---

## 🧪 Pruebas con Postman

1. Registrar y loguear usuario
2. Usar el token en rutas protegidas (Bearer token)
3. Probar CRUDs de marcas y productos

---

## 📂 Autor

Eriban Ojeda – Examen 1 – Taller de Aplicaciones de Internet
