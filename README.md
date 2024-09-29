# PHP Trip-Registration Form Project

## Overview
This project is a simple trip-registration form created using PHP and MySQL. It allows users to register by entering their personal details, which are then stored in a database.

## Requirements
Before you begin, ensure you have met the following requirements:
- **XAMPP**: Download and install [XAMPP](https://www.apachefriends.org/index.html). This package includes the Apache server and MySQL database.

## Installation

1. **Download the Project**:
   - Clone or download the project repository from GitHub.

2. **Set Up the Project**:
   - Extract the downloaded folder and locate the `cwh` folder.
   - Move the `cwh` folder to the `htdocs` directory of your XAMPP installation. This is usually located at:
     ```
     C:\xampp\htdocs\
     ```

3. **Start the XAMPP Server**:
   - Open the XAMPP Control Panel.
   - Start both **Apache** and **MySQL** services.

4. **Create the Database**:
   - Open your browser and go to `http://localhost/phpmyadmin`.
   - Follow the tutorial on creating a database: [Learn PHP in One Video](https://www.codewithharry.com/videos/learn-php-in-one-video-in-hindi-2020/). 
     - **Database Creation Part Starts at**: `01:57:58 – Creating database for our project`
   - Make sure to create a database named `trip` and a table named `trip` with appropriate fields (name, age, gender, email, phone, other, dt).

5. **Configure the Database Connection**:
   - Ensure the database connection settings in your PHP script match your local server setup.

## Functionality
- **Registration Form**: Users can enter their name, age, gender, email, phone number, and additional information.
- **Data Storage**: Submitted data is stored in the `trip` table of the `trip` database.

## Usage
- Open your browser and navigate to `http://localhost/cwh/index.php`.
- Fill in the registration form with your details and submit.

## Contributing
If you would like to contribute to this project, please fork the repository and submit a pull request.

