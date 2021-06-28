<template>
  <div>
    <div class="display">
      <div v-for="facts in fact" :key="facts.id">
        <router-link :to="{ name: 'SelectedFact', params: { id: facts.id } }">
          {{ facts.id }}
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Home",
  data() {
    return {
      fact: null,
    };
  },
  mounted() {
    axios.get("http://127.0.0.1:8000/api/facts").then((response) => {
      this.fact = response.data;
    });
  },
};
</script>
<style>
.display {
  background-color: rgba(179, 172, 167, 0.08);
  display: flex;
  justify-content: space-around;
}
.display div {
  width: 30%;
  text-align: center;
  margin-left: 1em;
  margin-right: 1em;
}
a{
  text-decoration: none;
}
</style>
