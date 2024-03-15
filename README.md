<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#feature">Feature</a></li>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

Isi dari project ini adalah aplikasi pendataan skill yang dimiliki user.

### Feature
1. User :
    - Autentikasi : 
      - Login
      - Register
    
2. Member :
    - Skill :
        - Mencari sesuai dengan kata kunci
        - Melihat seluruh skill yang tersidia (pagination)
        - Menambahkan, menghapus, menghapus skill ke dalam data pengguna yang sedang login

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

<table style="border-collapse: collapse;">
    <tr>
        <td style="border: none;">
            <div style="display: flex; align-items:center; gap: 15px;">
                <img src="https://laravel.com/img/logomark.min.svg" height=35>
                <img src="https://laravel.com/img/logotype.min.svg" height=35>
            </div>
        </td>
    </tr>
</table>

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

_Berikut ini adalah cara untuk memulai pengetesan._

1. Clone
   ```sh
   git clone https://github.com/iogm-git/test.git
   ```
2. Update composer
   ```sh
   composer update
   ```
3. Copy .env.example and setting env
    ```sh
        DB_CONNECTION=mysql
        DB_HOST=your_db_host
        DB_PORT=your_db_port
        DB_DATABASE=your_db
        DB_USERNAME=your_db_username
        DB_PASSWORD=your_db_password
    ```
4. Generate Key
   ```sh
   php artisan key:generate
   ```

5. Buka dan jalankan aplikasi pengelola database mysql seperti xampp/wampp/mampp/lainnya kemudian ketik di terminal
   ```sh
   php artisan migrate:fresh --seed
   ```

6. Install Npm
    ```sh
   npm install
   ```

7. Build
    ```sh
   npm run build
   ```

8. Dev
    ```sh
   npm run dev
   ```

9. Buka termnial kedua dan aplikasi siap di jalankan
    ```sh
   php artisan serve
   ```
<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Ilham Rahmat Akbar - ilhamrhmtkbr@gmail.com

<p align="right">(<a href="#readme-top">back to top</a>)</p>

