# ReadSync LMS

## Project Overview
**ReadSync LMS** is a PHP-based Library Management System (LMS) developed as a Software Engineering (CSE327) course project.  
It provides features for both **users** and **admins** to manage books, borrowing, returning, and book requests through a web interface.

The project is organized into separate frontend and backend layers:
- **FrontEnd/** for UI pages and forms
- **BackEnd/** for server-side processing and database operations 
- **database/** for SQL schema setup

---

## Tech Stack
- **Backend:** PHP
- **Frontend:** PHP + HTML + CSS
- **Database:** MySQL (SQL schema included)
- **Language Composition:**
  - PHP: **59.7%**
  - CSS: **40.3%**

---

## Repository Structure

```text
ReadSync_CSE327_Project/
├── BackEnd/
│   ├── addbooks.php
│   ├── adminStock.php
│   ├── adminlogin.php
│   ├── borrowBook.php
│   ├── borrowedBooks.php
│   ├── connectDB.php
│   ├── deleteBook.php
│   ├── library.php
│   ├── removeUser.php
│   ├── request_book.php
│   ├── requestedBooks.php
│   ├── returnBook.php
│   ├── signup.php
│   ├── testDB.php
│   ├── updateBookCopy.php
│   ├── updateBookName.php
│   ├── updateBookPrice.php
│   └── userlogin.php
│
├── FrontEnd/
│   ├── Background_Images/
│   ├── css/
│   ├── addBooksF.php
│   ├── adminDashboardF.php
│   ├── adminLoginF.php
│   ├── adminStockF.php
│   ├── borrowBookF.php
│   ├── borrowedBooksF.php
│   ├── deleteBookF.php
│   ├── landingF.php
│   ├── libraryF.php
│   ├── request_bookF.php
│   ├── requestedBooksF.php
│   ├── returnBookF.php
│   ├── signupF.php
│   ├── updateBookCopyF.php
│   ├── updateBookNameF.php
│   ├── updateBookPriceF.php
│   ├── updatePanelF.php
│   ├── userDashBoard.php
│   └── userloginF.php
│
└── database/
    └── lmsDatabase.sql
```

---

## Core Features

### User Features
- User registration (`signupF.php` + `signup.php`)
- User login (`userloginF.php` + `userlogin.php`)
- View available library books (`libraryF.php` + `library.php`)
- Borrow books (`borrowBookF.php` + `borrowBook.php`)
- Return books (`returnBookF.php` + `returnBook.php`)
- View borrowed books (`borrowedBooksF.php` + `borrowedBooks.php`)
- Request new books (`request_bookF.php` + `request_book.php`)

### Admin Features
- Admin login (`adminLoginF.php` + `adminlogin.php`)
- Admin dashboard (`adminDashboardF.php`)
- Manage stock (`adminStockF.php` + `adminStock.php`)
- Add books (`addBooksF.php` + `addbooks.php`)
- Delete books (`deleteBookF.php` + `deleteBook.php`)
- Update book info:
  - Name (`updateBookNameF.php` + `updateBookName.php`)
  - Price (`updateBookPriceF.php` + `updateBookPrice.php`)
  - Copy count (`updateBookCopyF.php` + `updateBookCopy.php`)
- View/manage requested books (`requestedBooksF.php` + `requestedBooks.php`)
- Remove users (`removeUser.php`)

---

## Database
The SQL file is located at:

- `database/lmsDatabase.sql`

This script should be imported into MySQL before running the application.  
It likely includes tables for users, admins, books, borrowed records, and requests.

---

## How to Run (Local Setup)

1. Install a local PHP server stack such as **XAMPP** or **WAMP**.
2. Clone/download this repository into your web root:
   - Example (XAMPP): `htdocs/ReadSync_CSE327_Project`
3. Create a MySQL database (e.g., `lmsDatabase`).
4. Import `database/lmsDatabase.sql` into the database.
5. Open and configure DB credentials in:
   - `BackEnd/connectDB.php`
6. Start Apache and MySQL.
7. Access the project from browser:
   - `http://localhost/ReadSync_CSE327_Project/FrontEnd/landingF.php`

---

## Architectural Notes
- This project uses a simple **page-to-endpoint mapping** pattern:
  - FrontEnd page collects form input
  - BackEnd PHP script processes request
  - Database is updated/read via shared DB connection
- The system is straightforward for academic/demo use, and can be improved with:
  - Input validation/sanitization
  - Password hashing checks and stronger auth/session handling
  - API routing and modularization
  - Role-based access controls and audit logs

---

## Team & Supervision

### Contributors

| Name                     | Student ID  |
|--------------------------|-------------|
| Hasnat Karibul Islam     | 2211275042  |
| Karma Sonam Rabgay       | 2233716042  |
| Raqibul Hasan            | 2022473642  |
| Anisha Ashfiya Alamgir   | 2211044642  |

### Faculty Supervisor
- Dr. Mohammad Musfique Anwar
