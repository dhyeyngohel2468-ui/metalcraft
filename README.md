# WeldWork — Welding Services Website

A full-stack welding services business website built with PHP and MySQL, featuring a dynamic public-facing frontend and a custom-built admin panel with authentication and session management.

---

## 🔧 Tech Stack

| Layer | Technology |
|---|---|
| Frontend | HTML5, CSS3, Bootstrap 5, JavaScript |
| Backend | PHP (procedural) |
| Database | MySQL (via MySQLi) |
| UI Libraries | Font Awesome, Bootstrap Icons, Owl Carousel, WOW.js, Animate.css |
| Server | Apache (XAMPP / WAMP) |

---

## ✨ Features

### Public Website
- Responsive multi-page layout using a **master page pattern** (`index.php` routes all pages via `?p=` query parameter)
- **Dynamic Services page** — services are fetched from the database and rendered automatically
- **Service detail page** — each service has its own detail view via `viewservice.php`
- **Appointment booking form** — user submissions are saved directly to the database
- **Contact page** with embedded Google Maps
- Smooth animations using WOW.js and Owl Carousel testimonial slider

### Admin Panel (`/ownadmin`)
- **Session-based authentication** — login required to access any admin page
- **Master page architecture** — shared `header.php` and `footer.php` across all admin pages
- **bfcache protection** — pressing Back after logout redirects to login instead of showing a cached page
- **Session timeout** — auto logout after inactivity
- **Appointments viewer** — view all customer appointment submissions in a table
- **Service manager** — add new services (title, image, description, charges) that appear live on the website

---

## 🗄️ Database Tables

| Table | Purpose |
|---|---|
| `appointment` | Stores customer appointment form submissions |
| `web_services` | Stores services displayed on the public website |
| `login_credentials` | Admin login username and password |

---

## ⚙️ Setup Instructions

1. Clone the repository
   ```bash
   git clone https://github.com/DhyeyGohel/metalcraft.git
   ```

2. Move the project folder to your server root
   - XAMPP: `C:/xampp/htdocs/metalcraft`
   - WAMP: `C:/wamp64/www/metalcraft`

3. Import the database
   - Open **phpMyAdmin**
   - Create a database named `internship_2025`
   - Import the provided `.sql` file

4. Configure database credentials
   ```bash
   cp ownadmin/db.example.php ownadmin/db.php
   ```
   Then edit `ownadmin/db.php` with your MySQL credentials.

5. Open in browser
   ```
   http://localhost/metalcraft
   ```

---

## 📁 Project Structure

```
metalcraft/
├── index.php               # Main entry point (routes all pages)
├── control.php             # Handles appointment form submission
├── viewservice.php         # Single service detail page
├── css/                    # Bootstrap + custom styles
├── js/                     # Main JavaScript
├── img/                    # Website images
├── lib/                    # Owl Carousel, WOW.js, etc.
├── ownadmin/
│   ├── index.php           # Admin dashboard
│   ├── login.php           # Admin login page
│   ├── logout.php          # Session destroy + redirect
│   ├── auth_check.php      # Authentication guard (included by all admin pages)
│   ├── header.php          # Admin master page header + sidebar
│   ├── footer.php          # Admin master page footer
│   ├── adminappointment.php # View appointments
│   ├── adminservice.php    # Add new services
│   ├── control.php         # Handles service form submission
│   ├── db.example.php      # Database config template (safe to commit)
│   └── db.php              # ⚠️ Actual DB credentials (gitignored)
└── README.md
```

---

## 👨‍💻 Developed By

**Dhyey Gohel**  
Built on top of the WeldWork HTML template by HTMLCodex — all backend functionality, database integration, admin panel, and authentication developed from scratch.
