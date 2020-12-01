<template>
  <v-form @submit.prevent="login">
    <v-container>
      <v-row>
        <v-col
          cols="12"
          md="6"
        >
          <v-text-field
            v-model="form.email"
            type="email"
            label="Email"
            required
          ></v-text-field>
        </v-col>

        <v-col
          cols="12"
          md="6"
        >
          <v-text-field
            v-model="form.password"
            type="password"
            label="E-mail"
            required
          ></v-text-field>
        </v-col>
      </v-row>
      <v-btn
          color="green"
          type="submit"
      >
          Login
      </v-btn>
    </v-container>
  </v-form>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email:null,
                password: null
            }
        }
    },
    methods: {
        login() {
            axios.post('/api/auth/login', this.form)
            .then(res => console.log(res.data))
            .catch(error => console.log(error.response.data))
        }
    }
}
</script>

<style>

</style>