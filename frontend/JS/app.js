const app = Vue.createApp({
  data() {
    return {
      songs: [],
    };
  },
  // affettuo la chiamata axios in {get(per ottenere un dato) non in post (per inviarlo)} usando il path assoluto del file get-list.php
  created() {
    axios
      .get("http://localhost/boolean/php-dischi-json/API/get-list.php")
      .then((response) => {
        this.songs = response.data;
      });
  },
});
app.mount("#app");
