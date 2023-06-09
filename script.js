const { createApp } = Vue;

createApp({
  data() {
    return {
      arrCards: [],
    };
  },
  methods: {
    requestCard() {
      axios
        .get("http://localhost/php-dischi-json/script.php")
        .then((response) => (this.arrCards = response.data));
    },
  },
  created() {
    this.requestCard();
  },
}).mount("#app");
