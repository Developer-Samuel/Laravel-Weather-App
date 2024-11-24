<template>
    <div class="content w-full h-screen bg-black">
        <div
            :class="['container relative md:w-[1000px] w-full h-full border-l-2 border-r-2 border-solid border-white md:px-0 px-2 mx-auto',
                    errorMessage ? 'bg-red-600' : 'bg-green-700']"
        >
            <div v-if="errorMessage" class="error bg-red-600 w-full">
                <p class="relative top-36 text-white text-2xl font-bold text-center">
                    {{ errorMessage }}
                </p>
            </div>

            <div v-if="weatherData" class="relative w-full text-lg text-white text-center">
                <img class="mx-auto w-[76px] h-[76px]" :src="weatherData.imageData">
                <div><b>City / Village / Country: </b>{{ weatherData.city }}</div>
                <div><b>Degrees Celsius: </b>{{ weatherData.tempCelsius }} &deg;C</div>
                <div><b>Weather Condition: </b>{{ weatherData.weatherCondition }}</div>
            </div>

            <form @submit.prevent="getWeather" class="absolute transform -translate-y-1/2 top-1/2 w-full bg-black text-center border-t-2 border-b-2 border-solid border-white p-4">
                <div class="w-full mb-2">
                    <label for="city" class="text-white text-lg font-bold">City / Village / Country:</label>
                    <div class="px-32">
                        <input v-model="city" name="city" class="w-full text-md rounded-lg outline-0 mt-1.5 px-2 py-1">
                    </div>
                </div>
                <div class="relative flex justify-center mt-8">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 transition duration-500 text-black text-md font-bold px-3 py-2 rounded-full cursor-pointer">Get Weather</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
  import axios from 'axios';

  export default {
    data() {
      return {
        city: '',
        weatherData: null,
        errorMessage: ''
      };
    },
    methods: {
      async getWeather() {
        try {
          const response = await axios.get('/api/weather/get', {
            params: {
              city: this.city,
            }
          });

          this.weatherData = {
            city: response.data.name,
            tempCelsius: Math.round(response.data.main.temp - 273.15),
            weatherCondition: response.data.weather[0].description,
            imageData: `http://openweathermap.org/img/w/${response.data.weather[0].icon}.png`
          };

          this.errorMessage = '';
        } catch (error) {
          this.errorMessage = error.response?.data?.message || 'City / Country not found or API error';
          this.weatherData = null;
        }
      }
    }
  };
</script>
