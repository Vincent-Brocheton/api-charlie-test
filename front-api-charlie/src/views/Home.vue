<template>
  <div>
    <div class="display">
      <div class="col-3 m-2 shadow" v-for="facts in fact" :key="facts.id">
        <div >
          <router-link :to="{ name: 'SelectedFact', params: { id: facts.id } }">
          <b-card bg-variant="secondary" text-variant="white" :header="facts.type" class="text-center">
            <b-card-text>{{facts.text}}</b-card-text>
          </b-card>
          </router-link>
        </div>
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
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}
a{
  text-decoration: none;
}
</style>
