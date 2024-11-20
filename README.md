## About Project

This project is built with Laravel, Vue.js, and Tailwind, and allows users to view the current weather for a specific city, village, or country. It fetches weather data through the REST API provided by openweathermap.org.

## Requirements

- PHP >= 8.x
- Composer
- Node.js (which includes NPM)
- Laravel 10.x (or higher)
- Vue.js
- Tailwind

## Project Setup

To get started, follow these steps:

**1. Create the environment file:**
   - Copy the contents of `.env.example` to a new file named `.env`.
   - Add your API key from openweathermap.org to the WEATHER_KEY variable in the .env file.

**2. Install dependencies:**
   - Run the following commands in your terminal:
     - `composer update`
     - `php artisan key:generate`
     - `npm install`
       
**3. Run the project:**
   - Start the Laravel server by running:
     - `php artisan serve`
   - Start the development server for Vue.js by running:
     - `npm run dev`
       
**4. The project is now ready to use.**

## License

This project is licensed under the **Samuel Šteiner License**.

- **Free for personal and educational use.**
- **Not allowed for commercial use or redistribution as a part of any product.**
- **May not be used as a base for proprietary projects.**

If you'd like to contribute or use it for commercial purposes, please contact the author.

---

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
