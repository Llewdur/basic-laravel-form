# Laravel Form Application - Installation and Usage Guide

Welcome! This guide will walk you through the steps to install and use the Laravel Form Application. Even if you're not a developer, don't worry—this guide is designed to be simple and easy to follow.

---

## **What is this application?**

This is a simple web application built with Laravel (a PHP framework) that allows users to submit their information through a form. The form collects the user's name, email, and comments, validates the data, and stores it in a database. After submission, the user is redirected to a "Thank You" page.

---

## **Prerequisites**

Before you begin, make sure you have the following installed on your computer:

1. **PHP** (version 8.4 or higher)
2. **Composer**
3. **MySQL/MariaDB**
4. **Git**

---

## **Step 1: Download the Application**

1. Open your terminal or command prompt.
2. Navigate to the folder where you want to install the application.
3. Run the following command to clone the repository:
   ```bash
   git clone git@github.com:Llewdur/basic-laravel-form.git
   ```
4. Navigate into the project folder:
   ```bash
   cd basic-laravel-form
   ```

---

## **Step 2: Install Dependencies**

The application uses Composer to manage its dependencies. To install them, run:
```bash
composer install
```

---

## **Step 3: Set Up the Environment**

1. Create the docker containers:
   ```bash
   ./vendor/bin/sail up
   ```
2. Create test data for local development:
   ```bash
   ./vendor/bin/sail artisan migrate:fresh --seed
   ```
3. Open your database client with these database credentials:
   ```
   port=3307
   username=sail
   password=password
   ```
4. Open your web browser and go to:
   ```
   http://0.0.0.0/
   ```

---

## **Step 4: Use the Application**

1. **Fill Out the Form**:
   - Enter your name, email, and comments in the form.
   - Click the "Submit" button.

2. **Validation**:
   - If any field is missing or invalid, you'll see error messages. Correct the errors and submit again.

3. **Success**:
   - If everything is correct, you'll be redirected to a "Thank You" page.

---

## **Step 5: View the Data (Optional)**

If you'd like to view the submitted data:

1. Open your MySQL database (e.g., using MySQL Workbench, or TablePlus or any other client).
2. Check the `users` table. You should see the submitted entries.

---

## **Step 6: Run the tests (Optional)**

Open your terminal and paste:
   ```
   ./vendor/bin/sail artisan test
   ```

---

## **Troubleshooting**

- **Database Connection Issues**:
  - Double-check your `.env` file to ensure the database credentials are correct.
  - Make sure your MySQL server is running.

- **Composer Issues**:
  - Ensure Composer is installed correctly. You can check by running:
    ```bash
    composer --version
    ```

- **PHP Issues**:
  - Ensure PHP is installed and added to your system's PATH. You can check by running:
    ```bash
    php -v
    ```

---

## **Need Help?**

If you encounter any issues or have questions, feel free to reach out! You can contact us at llewdurandt@gmail.com.

---

## **Conclusion**

That's it! You've successfully installed and used the Laravel Form Application. Enjoy exploring the application, and thank you for following this guide! 🎉
