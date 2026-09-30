# ASSIGNMENT 1: WEB TECHNOLOGIES FUNDAMENTALS

## Student Project

This project is created as part of Assignment 1: Web Technologies Fundamentals.

### Learning Outcomes

* Understand HTML and PHP basics.
* Understand web application architecture.
* Understand client-server interaction.
* Practice HTML forms, tables and lists.
* Understand GET and POST methods.
* Practice basic PHP scripting.
* Understand basic HTTP requests and responses.

---

# PROJECT STRUCTURE

```text
ASSIGNMENT-1-WEB-TECHNOLOGIES/
│
├── html/
│   ├── index.html
│   ├── form.html
│   ├── table.html
│   ├── lists.html
│   └── get-form.html
│
├── php/
│   ├── 01_variables.php
│   ├── 02_if_else.php
│   ├── 03_for_loop.php
│   ├── 04_while_loop.php
│   ├── 05_function.php
│   ├── 06_array.php
│   ├── 07_string.php
│   ├── 08_even_odd.php
│   ├── 09_factorial.php
│   ├── 10_calculator.php
│   ├── process.php
│   ├── get.php
│   └── login.php
│
├── login/
│   └── login.html
│
└── README.txt
```

---

# SOFTWARE REQUIREMENTS

The following software can be used to run the project:

* XAMPP
* Apache
* PHP
* MySQL
* Visual Studio Code
* Web Browser

---

# SETUP INSTRUCTIONS

## Step 1: Install XAMPP

Install XAMPP on Windows.

After installation, open the XAMPP Control Panel.

## Step 2: Start Apache

Start the following service:

```text
Apache
```

PHP files require the Apache server to execute.

## Step 3: Copy Project

Copy the project folder into:

```text
C:\xampp\htdocs\
```

The final location should be:

```text
C:\xampp\htdocs\ASSIGNMENT-1-WEB-TECHNOLOGIES\
```

## Step 4: Open Project in VS Code

Open Visual Studio Code.

Select:

```text
File → Open Folder
```

Then select:

```text
ASSIGNMENT-1-WEB-TECHNOLOGIES
```

---

# RUNNING THE HTML PAGES

Open a browser and use:

```text
http://localhost/ASSIGNMENT-1-WEB-TECHNOLOGIES/html/index.html
```

Other pages:

```text
http://localhost/ASSIGNMENT-1-WEB-TECHNOLOGIES/html/form.html

http://localhost/ASSIGNMENT-1-WEB-TECHNOLOGIES/html/table.html

http://localhost/ASSIGNMENT-1-WEB-TECHNOLOGIES/html/lists.html

http://localhost/ASSIGNMENT-1-WEB-TECHNOLOGIES/html/get-form.html
```

---

# PHP PROGRAMS

The `php` folder contains 10 basic PHP programs demonstrating:

1. Variables
2. If/Else
3. For Loop
4. While Loop
5. Functions
6. Arrays
7. Strings
8. Even/Odd checking
9. Factorial
10. Calculator

---

# GET METHOD

The `get-form.html` page sends data using the GET method.

It connects to:

```text
php/get.php
```

Example:

```text
http://localhost/ASSIGNMENT-1-WEB-TECHNOLOGIES/php/get.php?name=Aditya
```

The submitted value can be accessed in PHP using:

```php
$_GET['name'];
```

---

# POST METHOD

The HTML form uses the POST method to send information to:

```text
php/process.php
```

The PHP program receives the submitted information using:

```php
$_POST['name'];
$_POST['email'];
```

POST data is sent through the HTTP request body instead of appearing in the URL.

---

# LOGIN FORM

The login form is located at:

```text
login/login.html
```

It sends login information to:

```text
php/login.php
```

The login demonstrates basic PHP form processing.

For a real-world application, passwords should be securely hashed and authenticated using a database rather than hard-coded credentials.

---

# DEVELOPER TOOLS

The assignment also requires practicing browser Developer Tools.

To open Developer Tools:

```text
Right Click → Inspect
```

Useful tabs include:

* Elements
* Console
* Network
* Sources

Example JavaScript modification:

```javascript
document.body.style.background = "lightblue";
```

Example:

```javascript
document.querySelector("h1").textContent = "Modified Page";
```

These commands demonstrate modifying the page DOM through the browser console.

---

# LEARNING OBJECTIVES COMPLETED

This project demonstrates:

* HTML page creation
* HTML forms
* HTML tables
* HTML lists
* GET method
* POST method
* PHP variables
* PHP conditions
* PHP loops
* PHP functions
* PHP arrays
* PHP strings
* Basic form processing
* Basic login processing
* Browser Developer Tools
* Basic client-server interaction

---

# NOTE

This project is intended for educational purposes as part of the Web Technologies Fundamentals assignment.

When testing web requests, cookies, sessions, or other security-related functionality, use systems and applications that you own or have explicit permission to test.
