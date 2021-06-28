<template>
  <div class="form">
    <div class="form-container">
      <form id="reused_form" @submit="submitForm">
        <div>
          <label for="type"></label>
          <select name="type" id="type" v-model="fact.type">
            <option value="cats" selected>Chat</option>
          </select>
        </div>
        <div>
          <textarea
            name="text"
            id="text"
            cols="30"
            rows="10"
            placeholder="Tapez le texte de votre fact"
            v-model="fact.text"
          ></textarea>
        </div>
        <div>
          <button>Valider</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "FormFact",
  data() {
    return {
      nameRoute: this.$route.name,
      factId: this.$route.params.id,
      fact: {
        id: 0,
        type: "",
        text: "",
      },
    };
  },
  mounted() {
    if (this.nameRoute === "FormFact") {
      axios
        .get("http://127.0.0.1:8000/api/facts/" + this.factId)
        .then((response) => {
          this.fact = response.data;
        });
    }
  },
  methods: {
    submitForm: function (e) {
      e.preventDefault();
      if (this.nameRoute == "FormFact") {
        if (this.fact.text != "") {
          return axios.put(
            "http://127.0.0.1:8000/api/facts/" + this.factId,
            this.fact
          );
        }
      } else if (this.nameRoute == "NewFormFact") {
        return axios.post("http://127.0.0.1:8000/api/facts/", this.fact);
      }
    },
  },
};
</script>

<style>
.form {
  background-color: rgba(179, 172, 167, 0.08);
  text-align: center;
  padding: 0px 50px 5px 50px;
}

.form-container {
  padding-top: 20px;
}

#reused_form {
  position: relative;
  margin: 50px auto;
}

input,
textarea {
  width: 470px;
  background: transparent;
  outline: none;
  color: #726659;
  border: 1px solid #b3aca7;
}

input {
  font-size: 0.85em;
  height: 50px;
  padding: 0 15px;
  border-bottom: none;
}

textarea {
  max-height: 110px;
  height: 110px;
  padding: 15px;
  resize: none;
}

input::placeholder,
textarea::placeholder,
input:focus::placeholder,
textarea:focus::placeholder {
  color: #aca49c;
}

input:hover::placeholder,
textarea:hover::placeholder,
input:hover:focus::placeholder,
textarea:hover:focus::placeholder {
  color: #e2dedb;
}
</style>
