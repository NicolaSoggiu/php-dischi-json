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
        .get("http://localhost/php-dischi-json/cards.php")
        .then((response) => (this.arrCards = response.data));
    },
    frontPage(event) {
      event.target.classList.toggle("front_page");
    },
  },
  created() {
    this.requestCard();
  },
}).mount("#app");
