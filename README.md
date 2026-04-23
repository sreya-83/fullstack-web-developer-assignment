TRUSLYTICS CONSULTING – Full Stack Project

Project Overview

This is a full-stack web application built using React (CDN), PHP, and MySQL.

The project includes:

* User Registration & Login
* Contact Form
* Admin Dashboard
* Message Management System

---
 Technologies Used

* Frontend: React (CDN), HTML, CSS
* Backend: PHP
* Database: MySQL
* API: REST (Fetch API)

---

 Folder Structure


/Folder-Structure
│── index.html
│── dashboard.html
│── contact.php
│── login.php
│── register.php
│── getMessages.php
│── logout.php
│── connection.php
│── /css
│── /js
│── /images
```

---

 How to Run Project
 1. Setup Server

* Install XAMPP / WAMP
* Place project inside:

  ```
  htdocs/
  ```

 2. Start Server

* Start Apache & MySQL

 3. Import Database

* Open phpMyAdmin
* Create database: `fullstack`
* Import SQL file
 4. Run Project

Open browser:

```
http://localhost/fullstack/index.html
```

---

 Features
 User

* Register Account
* Login System
* Contact Form Submission

 Admin Dashboard

* View Messages
* Message Count
* Logout System

---

 API Endpoints

| API             | Method | Description    |
| --------------- | ------ | -------------- |
| contact.php     | POST   | Save message   |
| login.php       | POST   | User login     |
| register.php    | POST   | User register  |
| getMessages.php | GET    | Fetch messages |

---

 Author

Sreya Bera

---

 Notes

* This project uses React via CDN (no installation required)
* Backend handled using PHP APIs
* Data stored in MySQL database

---
