# 🌐 My Website – Full Stack Web Application

A modern and responsive full-stack web application developed using **HTML5, CSS3, JavaScript, PHP, and MySQL**.  
This project demonstrates frontend design, backend integration, form handling, and database management in a simple yet effective web solution.

The website includes multiple sections such as Home, About, Services, and Contact along with a dynamic content submission system that securely stores user data into a MySQL database using PHP prepared statements.

---

# 📌 Project Overview

This project was created to practice and demonstrate:

- Frontend web development
- Backend form processing
- Database connectivity
- Responsive UI design
- Secure data handling using PHP
- Basic full-stack development workflow

The application provides a clean user interface and allows users to submit content through an interactive form.

---

# ✨ Key Features

## 🎨 Frontend Features
- Responsive website layout
- Navigation menu with smooth section access
- Styled sections for About, Services, and Contact
- Interactive user form
- Mobile-friendly viewport support

## ⚙ Backend Features
- PHP-based form handling
- MySQL database integration
- Secure prepared SQL statements
- Automatic timestamp storage
- Error handling for database connection

## 🔐 Security Features
- SQL Injection prevention using prepared statements
- Server-side data handling
- Structured database operations

---

# 🛠 Technologies Used

| Technology | Purpose |
|------------|---------|
| HTML5 | Structure of the website |
| CSS3 | Styling and layout |
| JavaScript | Dynamic functionality |
| PHP | Backend processing |
| MySQL | Database management |
| XAMPP/WAMP | Local server environment |

---

# 📂 Project Structure

```text
mywebsite/
│
├── index.html        # Main frontend webpage
├── submit.php        # Backend PHP form handler
├── README.md         # Project documentation
```

---

# 🖥 Website Sections

## 🏠 Home
Displays the welcome message and introduction.

## 📖 About
Contains personal/project information.

## 🛎 Services
Lists the technologies and services provided.

## 📞 Contact
Displays contact information for communication.

## 📝 Submission Form
Allows users to submit:
- Name
- Email
- Content

Submitted information is stored in the database.

---

# 🗄 Database Configuration

## Step 1: Create Database

```sql
CREATE DATABASE mywebsite;
USE mywebsite;
```

## Step 2: Create Table

```sql
CREATE TABLE submissions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  content TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

# ⚙ PHP Backend Working

The `submit.php` file performs the following operations:

1. Connects to MySQL database
2. Retrieves user form data
3. Uses prepared statements for secure insertion
4. Stores records into database
5. Displays success/error messages

---

# 🚀 How to Run the Project

## ✅ Requirements

- XAMPP or WAMP Server
- PHP 7+
- MySQL
- Web Browser

---

## ▶ Installation Steps

### 1. Clone or Download the Repository

```bash
git clone https://github.com/your-username/mywebsite.git
```

### 2. Move Project Folder

Place the folder inside:

```text
htdocs/
```

### 3. Start Local Server

Start:
- Apache
- MySQL

using XAMPP/WAMP Control Panel.

---

### 4. Configure Database

Open:

```text
http://localhost/phpmyadmin
```

Run the SQL commands provided above.

---

### 5. Run the Application

Open browser and visit:

```text
http://localhost/mywebsite/index.html
```

---

# 📸 Application Workflow

```text
User Fills Form
        ↓
HTML Form Sends POST Request
        ↓
submit.php Receives Data
        ↓
PHP Connects to MySQL
        ↓
Data Stored in Database
        ↓
Success Message Displayed
```

---

# 🔍 JavaScript Functionality

The project also includes a small JavaScript functionality:

```javascript
window.onload = function() {
  let base = "https://krish.com/services/";
  let service = "app-development";
  let url = base + encodeURIComponent(service);
  console.log(url);
};
```

This dynamically creates encoded URLs for services.

---

# 🎯 Learning Outcomes

Through this project, the following concepts were practiced:

- Web page structuring
- Responsive web design
- PHP backend integration
- Database operations
- Form handling
- SQL queries
- Secure coding practices

---

# 🔮 Future Enhancements

Possible improvements include:

- User authentication system
- Admin dashboard
- Form validation enhancements
- Bootstrap integration
- REST API support
- Email notifications
- Deployment on cloud hosting

---

# 👩‍💻 Author

## Talari Srujana

Passionate about building creative and functional web applications using frontend and backend technologies.

---

# 📧 Contact Information

- Email: srujanatalari65@gmail.com

---

# 📜 License

This project is developed for educational and learning purposes.

---

# ⭐ Acknowledgements

Special thanks to open-source technologies and web development communities for providing learning resources and tools.
