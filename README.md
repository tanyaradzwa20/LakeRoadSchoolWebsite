# Lake Road PTA School – Quick Setup Guide

A simplified guide for installing and running the Lake Road PTA School Django website on a new computer.

## 1. Install Requirements

Make sure the following are installed:

- Python 3.11+
- PostgreSQL
- pipenv (or use venv)

Install pipenv if needed:

```bash
pip install pipenv
```

## 2. Get the Project

**Clone from GitHub:**
```bash
git clone repo
cd LakeWood
```

OR copy the project folder manually to your new computer.

## 3. Create PostgreSQL Database

Open PostgreSQL terminal:

```bash
psql -U postgres
```

Create database:

```sql
CREATE DATABASE lakeroad_school;
\q
```

## 4. Configure Environment Variables

Copy the example environment file:

```bash
copy .env.example .env      # Windows
cp .env.example .env        # Linux/Mac
```

Edit `.env` and update:

```env
SECRET_KEY=your-secret-key
DB_PASSWORD=your_postgres_password
DEBUG=True
ALLOWED_HOSTS=localhost,127.0.0.1
```

## 5. Install Dependencies

**Using pipenv:**

```bash
pipenv install
pipenv shell
```

**Or using venv:**

```bash
python -m venv venv
venv\Scripts\activate        # Windows
source venv/bin/activate     # Linux/Mac
pip install -r requirements.txt
```

## 6. Apply Migrations

```bash
python manage.py migrate
```

## 7. Start the Server

```bash
python manage.py runserver
```

## 8. Open the Website

- **Main Site:** http://127.0.0.1:8000/
- **Admin Panel:** http://127.0.0.1:8000/admin/

---

---

## Troubleshooting

**Database connection error?**
- Make sure PostgreSQL is running
- Check `DB_PASSWORD` in `.env` matches your PostgreSQL password

**Module not found error?**
- Activate virtual environment: `pipenv shell` or `source venv/bin/activate`

**Port already in use?**
- Use different port: `python manage.py runserver 8080`

---

**Website:** https://lrptas.ac.zm/
**Tagline:** A Perfect Place for the Education of Any Child
