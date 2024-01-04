# Resignation Form

This is a simple resignation form project using PHP and MySQL.

## Features:

- Allows employees to submit their resignation reason.
- Stores the resignation data in a MySQL database.

## Setup:

### 1. Download and Install XAMPP:

- Download XAMPP from [here](https://www.apachefriends.org/index.html).
- Install XAMPP by following the installation instructions for your operating system.

### 2. Start Apache and MySQL Services:

- Launch the XAMPP Control Panel.
- Start the Apache and MySQL services.

### 3. Configure the Database Connection:

- Open the `database.php` file in your preferred text editor.
- Update the database connection details to match your XAMPP MySQL setup. For example:

```php
$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = ""; // Default password is empty in XAMPP
$DATABASE = "Fullresignationform";