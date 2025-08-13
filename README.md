
# SIPOLI

Sistem Informasi Antrian Poliklinik

![image](https://github.com/user-attachments/assets/0229c5e8-12ae-42c3-bd24-f1f11fd864d7)

![image](https://github.com/user-attachments/assets/1eb8837a-d669-4bdf-91d6-246b5d4ffdcb)

![image](https://github.com/user-attachments/assets/042e0123-7312-4dce-b217-6ace8fc718d4)


### System Requirement
- PHP 8.2+
- MySQL / SQL Lite
## Installation

1. Clone Repository:

```bash
  git clone https://github.com/rhbekti/filament-sipoli.git
```
2. Install dependencies:
```bash
  composer Install
  npm install
```
3. Set up environment:
```bash
  cp .env.example .env
  php artisan key:generate
```
4. Configure database in .env file:
```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=<your_database>
   DB_USERNAME=<your_username>
   DB_PASSWORD=<your_password>
```
5. Run migrations:
```bash
  php artisan migrate
```
6. Create a Filament admin user:
```bash
  php artisan make:filament-user
```
7. Start the development server:
```bash
  php artisan serve
```
