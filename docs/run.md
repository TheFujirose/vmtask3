# How to run

### Fedora

1. Install dependencies from the root folder
    ```bash
    composer install
    ```
2. To run call the [alias](./environment.md#fedora-distribution) for lamp
    ```bash
    lamp start
    ```
3. Connect to the database through http://localhost/  
4. Navigate to the PHPmyadmin
5. Create a database on PHPmyadmin
6. Open the `index.php` from the `wordpress/` folder (should have installed from composer)
7. Create an account and use the database and user from your PHPmyadmin
8. Make the `.env` following the [example](../.env.example)
9. Connect to the admin page :)
10. You'll need to go to the admin dashboard and activate the plugins