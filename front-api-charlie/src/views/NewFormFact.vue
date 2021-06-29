<template>
    <div class="form">
        <div class="form-container">
            <form id="reused_form" @submit="submitForm">
                <b-row class="mt-2">
                    <b-col sm="2">
                        <label>Animal : </label>
                    </b-col>
                    <b-col sm="10">
                        <b-form-select v-model="fact.type" :options="options"></b-form-select>
                    </b-col>
                </b-row>
                <b-row class="mt-5">
                    <b-col sm="2">
                        <label for="textarea">Fact :</label>
                    </b-col>
                    <b-col sm="10">
                        <b-form-textarea
                                id="textarea"
                                v-model="fact.text"
                                placeholder="Tapez le texte de votre histoire !"
                        ></b-form-textarea>
                    </b-col>
                </b-row>
                <b-col sm="10" offset="2" class="mt-4">
                    <b-button type="submit">Valider</b-button>
                </b-col>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "NewFormFact",
        data() {
            return {
                options: [
                    {value: "cats", text: "Chats"},
                    {value: "dogs", text: "Chien"}
                ],
                fact: {
                    id: 0,
                    type: "",
                    text: "",
                },
            };
        },
        methods: {
            submitForm: async function (e) {
                console.log(this.fact);
                e.preventDefault();
                await axios.post("http://127.0.0.1:8000/api/facts/", this.fact);
                this.$router.push("/");
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
