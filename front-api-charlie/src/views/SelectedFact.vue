<template>
  <div>
    <b-card class="text-center" bg-variant="secondary" text-variant="white" :title="fact.type">
      <b-card-text >
        {{fact.text}}
      </b-card-text>

    <div id="buttons">
      <router-link :to="{ name: 'FormFact' }">Modifier la fact</router-link>

      <div>
        <b-button v-b-modal.modal-1>Supprimer la fact</b-button>
      </div>
    </div>
        </b-card>
        <b-modal id="modal-1" title="Supprimer une fact" hide-footer>
          <template #modal-header="{ close }">
            <!-- Emulate built in modal header close button action -->
            <b-button size="sm" variant="outline-danger" @click="close()">
              Close Modal
            </b-button>
            <h5>Supprimer une fact</h5>
          </template>
          <p class="my-4">Souhaitez vous rééllement supprimer cette fact ?</p>
          <div id="modal-button">
          <b-button variant="success" class="col-5" @click="$bvModal.hide('modal-1')"> Non </b-button>
          <b-button variant="danger" class="col-5" @click="del"> Oui </b-button>
          </div>
        </b-modal>


  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "SelectedFact",
  data() {
    return {
      factId: this.$route.params.id,
      fact: Array,
    };
  },
  mounted() {
    axios
      .get("http://127.0.0.1:8000/api/facts/" + this.factId)
      .then((response) => {
        this.fact = response.data;
        console.log(this.fact);
      });
  },
  methods: {
    del: async function () {
      console.log("ok");
      await axios.delete("http://127.0.0.1:8000/api/facts/" + this.factId);
      this.$router.push("/");
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#modal-button{
  display: flex;
  justify-content: space-around;
}

#buttons a,
#buttons button {
  color: black;
  padding: 16px 10px 10px 10px;
  margin-top: 20px;
  font-size: 1.1em;
  float: right;
  border-radius: 3px;
  background: #e2dedb;
  animation: shadow-pop-br 0.3s cubic-bezier(0.47, 0, 0.745, 0.715) both;
}
#buttons a:active,
#buttons button:active {
  animation: shadow-push 0.5s cubic-bezier(0.47, 0, 0.745, 0.715) both;
}

#buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}
/**
 * ----------------------------------------
 * animation shadow-pop-br
 * ----------------------------------------
 */
@keyframes shadow-pop-br {
  0% {
    box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e,
      0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
    transform: translateX(0) translateY(0);
  }
  100% {
    box-shadow: 1px 1px #3e3e3e, 2px 2px #3e3e3e, 3px 3px #3e3e3e,
      4px 4px #3e3e3e, 5px 5px #3e3e3e, 6px 6px #3e3e3e, 7px 7px #3e3e3e,
      8px 8px #3e3e3e;
    transform: translateX(-8px) translateY(-8px);
  }
}

@keyframes shadow-push {
  0% {
    box-shadow: 1px 1px #3e3e3e, 2px 2px #3e3e3e, 3px 3px #3e3e3e,
      4px 4px #3e3e3e, 5px 5px #3e3e3e, 6px 6px #3e3e3e, 7px 7px #3e3e3e,
      8px 8px #3e3e3e;
    transform: translateX(-8px) translateY(-8px);
  }
  100% {
    box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e,
      0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
    transform: translateX(0) translateY(0);
  }
}
</style>
