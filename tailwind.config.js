/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html, js}",
    "./public/index.php",
    "./public/grafik.php",
    "./public/tbsensor.php",
    "./public/tabel.php",
    "./public/cetak.php",
    "./public/monitoring.php",
    "./public/gf.php",
    "./public/login1.php",
    "./public/login.php",
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      screens: {
        "2xl": "1200px",
      },
    },
  },
  plugins: [],
};
