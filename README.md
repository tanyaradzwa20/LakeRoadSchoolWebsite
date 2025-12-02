# Lake Road PTA School Website

A modern, responsive Django-based website for Lake Road PTA School, inspired by the Ecole Private School template. This project emphasizes clean UI design, user experience, and production-ready PostgreSQL database configuration.

**Live Demo**: http://127.0.0.1:8000/ (after setup)
**School Website**: https://lrptas.ac.zm/
**Tagline**: Education for Empowerment

---

## Table of Contents

1. [Features](#features)
2. [Technology Stack](#technology-stack)
3. [Quick Start](#quick-start)
4. [Setup on External PC](#setup-on-external-pc)
5. [Project Structure](#project-structure)
6. [PostgreSQL Database Setup](#postgresql-database-setup)
7. [Environment Variables](#environment-variables)
8. [Customization](#customization)
9. [Troubleshooting](#troubleshooting)
10. [Deployment](#deployment)
11. [Git & Version Control](#git--version-control)

---

## Features

### Pages Included
- **Home Page**: Hero section, features showcase, statistics, call-to-action
- **About Us**: School history, vision/mission, core values, management team
- **Academics**: Primary & secondary programs, special education, extracurricular activities
- **Admissions**: Application process, requirements, tuition info, financial aid
- **Contact**: Contact form with validation, school info, map, FAQ

### Design & UI
- ✅ Modern responsive design (mobile, tablet, desktop)
- ✅ Professional color scheme (Deep Blue #113e70 & Red #c33f45)
- ✅ Google Fonts (Noto Serif & Dosis)
- ✅ Smooth animations and transitions
- ✅ Mobile-friendly hamburger navigation
- ✅ Form validation and interactive elements

---

## Technology Stack

| Component | Technology |
|-----------|-----------|
| **Backend** | Django 4.2.24 |
| **Database** | PostgreSQL |
| **Frontend** | HTML5, CSS3, JavaScript (ES6) |
| **Environment** | python-decouple, pipenv |
| **Fonts** | Google Fonts |
| **Icons** | Custom SVG icons |

---

## Quick Start

### Prerequisites
- Python 3.11 or higher
- PostgreSQL installed and running
- Git (optional, for version control)

### Installation (5 Steps)

```bash
# 1. Clone or download the project
cd LakeWood

# 2. Create PostgreSQL database
psql -U postgres
CREATE DATABASE lakeroad_school;
\q

# 3. Copy and configure environment variables
copy .env.example .env          # Windows
cp .env.example .env            # Linux/Mac

# Edit .env and update DB_PASSWORD with your PostgreSQL password

# 4. Install dependencies and activate environment
pipenv install
pipenv shell

# 5. Run migrations and start server
python manage.py migrate
python manage.py runserver
```

**Open browser**: http://127.0.0.1:8000/

---

## Setup on External PC

Follow these steps to set up the project on a different computer:

### Step 1: Install Prerequisites

**Install Python 3.11+**
- Windows: Download from https://www.python.org/downloads/
- Mac: `brew install python@3.11`
- Linux: `sudo apt install python3.11`

**Install PostgreSQL**
- Windows: https://www.postgresql.org/download/windows/
- Mac: `brew install postgresql && brew services start postgresql`
- Linux: `sudo apt install postgresql postgresql-contrib`

**Install pipenv**
```bash
pip install pipenv
```

### Step 2: Get the Project

**Option A: Clone from Git**
```bash
git clone https://github.com/yourusername/lakeroad-school.git
cd lakeroad-school
```

**Option B: Copy Files Manually**
- Copy the entire project folder to the new PC
- Navigate to the folder: `cd path/to/LakeWood`

### Step 3: Set Up PostgreSQL Database

```bash
# Connect to PostgreSQL
psql -U postgres

# Create the database
CREATE DATABASE lakeroad_school;

# Verify it was created
\l

# Exit
\q
```

### Step 4: Configure Environment Variables

```bash
# Copy the example file
# Windows:
copy .env.example .env

# Linux/Mac:
cp .env.example .env

# Edit the .env file
notepad .env        # Windows
nano .env           # Linux/Mac
```

**Update these values in `.env`:**
```env
DB_PASSWORD=your_postgresql_password_here
SECRET_KEY=your-secret-key-here
DEBUG=True
ALLOWED_HOSTS=localhost,127.0.0.1
```

### Step 5: Install Python Dependencies

```bash
# Install all dependencies
pipenv install

# If you prefer pip instead of pipenv:
python -m venv venv
venv\Scripts\activate          # Windows
source venv/bin/activate       # Linux/Mac
pip install -r requirements.txt
```

### Step 6: Activate Virtual Environment

```bash
# With pipenv:
pipenv shell

# With venv (if you used pip):
venv\Scripts\activate          # Windows
source venv/bin/activate       # Linux/Mac
```

### Step 7: Run Database Migrations

```bash
python manage.py migrate
```

You should see:
```
Operations to perform:
  Apply all migrations: admin, auth, contenttypes, sessions
Running migrations:
  Applying contenttypes.0001_initial... OK
  ...
```

### Step 8: Create Admin User (Optional)

```bash
python manage.py createsuperuser
```

Follow the prompts to create an admin account.

### Step 9: Start the Development Server

```bash
python manage.py runserver
```

### Step 10: Access the Website

Open your browser and visit:
- **Homepage**: http://127.0.0.1:8000/
- **Admin Panel**: http://127.0.0.1:8000/admin/

---

## Project Structure

```
LakeWood/
├── lakeroad_school/          # Django project settings
│   ├── settings.py          # Main configuration (uses environment variables)
│   ├── urls.py              # URL routing
│   ├── wsgi.py              # WSGI config for deployment
│   └── asgi.py              # ASGI config
├── main/                     # Main Django app
│   ├── views.py             # Page view functions
│   ├── urls.py              # App URL patterns
│   ├── models.py            # Database models
│   └── admin.py             # Admin configuration
├── templates/                # HTML templates
│   ├── base.html            # Base template with header/footer
│   ├── home.html            # Homepage
│   ├── about.html           # About page
│   ├── academics.html       # Academics page
│   ├── admissions.html      # Admissions page
│   └── contact.html         # Contact page
├── static/                   # Static files (CSS, JS, images)
│   ├── css/style.css        # Main stylesheet
│   ├── js/main.js           # JavaScript functionality
│   └── images/              # Image assets
├── .env.example             # Environment variables template
├── .env                     # Your actual config (NOT in Git)
├── .gitignore               # Git ignore rules
├── Pipfile                  # Pipenv dependencies
├── requirements.txt         # Pip dependencies
├── manage.py                # Django management script
└── README.md                # This file
```

---

## PostgreSQL Database Setup

### Database Configuration

- **Database Name**: `lakeroad_school`
- **Default User**: `postgres`
- **Host**: `localhost`
- **Port**: `5432`

### Create Database

**Windows (Command Prompt):**
```cmd
psql -U postgres
CREATE DATABASE lakeroad_school;
\q
```

**Using pgAdmin (GUI):**
1. Open pgAdmin
2. Right-click "Databases" → "Create" → "Database"
3. Enter name: `lakeroad_school`
4. Click "Save"

### Verify Connection

```bash
psql -U postgres -d lakeroad_school
# Should connect successfully
\q
```

### Common PostgreSQL Commands

```bash
# Start PostgreSQL service
# Windows:
net start postgresql-x64-14

# Mac:
brew services start postgresql

# Linux:
sudo systemctl start postgresql

# Check if PostgreSQL is running
# Windows:
net start | findstr postgresql

# Linux/Mac:
ps aux | grep postgres
```

---

## Environment Variables

The project uses `.env` file for sensitive configuration.

### Setup Process

1. **Copy the template:**
   ```bash
   copy .env.example .env    # Windows
   cp .env.example .env      # Linux/Mac
   ```

2. **Edit `.env` with your values:**

```env
# Django Settings
SECRET_KEY=your-secret-key-here
DEBUG=True
ALLOWED_HOSTS=localhost,127.0.0.1

# Database Configuration
DB_ENGINE=django.db.backends.postgresql
DB_NAME=lakeroad_school
DB_USER=postgres
DB_PASSWORD=your_postgresql_password
DB_HOST=localhost
DB_PORT=5432
```

### Important Notes

- ⚠️ **Never commit `.env` to Git** - It contains passwords!
- ✅ `.env.example` is safe to commit (no real passwords)
- 🔐 Change `SECRET_KEY` for production
- 🚫 Set `DEBUG=False` in production
- 🌐 Update `ALLOWED_HOSTS` with your domain in production

---

## Customization

### Change Colors

Edit `static/css/style.css`:
```css
:root {
    --primary-color: #113e70;      /* Deep blue */
    --secondary-color: #c33f45;    /* Red */
    --accent-color: #f4a261;       /* Orange */
}
```

### Update School Name

Edit `templates/base.html` (around line 39):
```html
<h1 class="logo-text">Your School Name</h1>
```

### Add Images

Place images in `static/images/`:
- `hero-1.jpg` - Hero background (1920x700px)
- `welcome.jpg` - Welcome section (800x600px)
- `academics.jpg` - Academic programs (800x600px)
- `primary-school.jpg` - Primary school (800x600px)
- `secondary-school.jpg` - Secondary school (800x600px)
- `placeholder-person.jpg` - Staff photos (400x400px)

### Edit Content

All page content is in `templates/`:
- `home.html` - Homepage content
- `about.html` - About page
- `academics.html` - Academic programs
- `admissions.html` - Admissions info
- `contact.html` - Contact information

---

## Troubleshooting

### "ModuleNotFoundError: No module named 'django'"

**Solution**: You're not in the virtual environment
```bash
pipenv shell
# or
venv\Scripts\activate    # Windows
source venv/bin/activate # Linux/Mac
```

### "database 'lakeroad_school' does not exist"

**Solution**: Create the database
```bash
psql -U postgres
CREATE DATABASE lakeroad_school;
\q
```

### "password authentication failed for user 'postgres'"

**Solution**: Update `DB_PASSWORD` in `.env` file with your actual PostgreSQL password

### "connection to server at 'localhost' failed"

**Solution**: PostgreSQL is not running
```bash
# Windows:
net start postgresql-x64-14

# Mac:
brew services start postgresql

# Linux:
sudo systemctl start postgresql
```

### Port 8000 already in use

**Solution**: Use a different port
```bash
python manage.py runserver 8080
```

### CSS/JavaScript not loading

**Solution**: Refresh with cache clear
- Chrome: `Ctrl + F5` (Windows) or `Cmd + Shift + R` (Mac)
- Firefox: `Ctrl + Shift + R`

---

## Deployment

### Production Checklist

- [ ] Set `DEBUG=False` in `.env`
- [ ] Generate strong `SECRET_KEY`
- [ ] Update `ALLOWED_HOSTS` with your domain
- [ ] Use production database credentials
- [ ] Set up HTTPS/SSL
- [ ] Configure static files: `python manage.py collectstatic`
- [ ] Set up proper database backups
- [ ] Configure email settings for contact form

### Environment Variables for Production

```env
DEBUG=False
SECRET_KEY=<generate-strong-random-key>
ALLOWED_HOSTS=lrptas.ac.zm,www.lrptas.ac.zm
DB_NAME=lakeroad_school_prod
DB_USER=lrptas_user
DB_PASSWORD=<strong-database-password>
DB_HOST=your-production-db-host.com
DB_PORT=5432
```

### Database Backup

```bash
# Create backup
pg_dump -U postgres lakeroad_school > backup_$(date +%Y%m%d).sql

# Restore backup
psql -U postgres lakeroad_school < backup_20241202.sql
```

---

## Git & Version Control

### Files That Will Be Committed ✅

- All Python code (`.py` files)
- Templates (`.html` files)
- Static files (CSS, JS)
- `.env.example` (template only - safe!)
- `Pipfile`, `requirements.txt`
- Documentation files

### Files That Are Ignored ❌

- `.env` (contains real passwords)
- `db.sqlite3` (old database)
- `__pycache__/` (Python cache)
- `venv/`, `.virtualenvs/` (virtual environments)
- `.claude/` (IDE workspace)

### First Commit

```bash
# Initialize Git
git init

# Verify .env is ignored
git status | grep .env    # Should show nothing

# Add all files (respects .gitignore)
git add .

# Create commit
git commit -m "Initial commit: Lake Road PTA School website"

# Push to GitHub
git remote add origin https://github.com/yourusername/lakeroad-school.git
git push -u origin main
```

---

## Pages & Routes

| Page | URL | Description |
|------|-----|-------------|
| Home | `/` | Homepage with hero, features, stats |
| About | `/about/` | School info, vision, management |
| Academics | `/academics/` | Programs and curriculum |
| Admissions | `/admissions/` | Application process and fees |
| Contact | `/contact/` | Contact form and info |
| Admin | `/admin/` | Django admin panel |

---

## Support & Contact

**For questions about this website:**
- Email: info@lrptas.ac.zm
- Website: https://lrptas.ac.zm/
- Facebook: https://facebook.com/lrptas/

**Technical Issues:**
- Check the [Troubleshooting](#troubleshooting) section
- Review Django error messages
- Verify PostgreSQL is running
- Check environment variables in `.env`

---

## License

This project is created for Lake Road PTA School. All rights reserved.

---

## Credits

- **Design Inspiration**: Ecole Private School Template by CMSMasters
- **School**: Lake Road PTA School, Zambia
- **Framework**: Django
- **Fonts**: Google Fonts (Noto Serif, Dosis)
- **Database**: PostgreSQL

---

**Built with Django** 🎯 | **Powered by PostgreSQL** 🐘 | **Education for Empowerment** 📚
