<template>
  <v-container>
    <v-form @submit.prevent="login">
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
            label="Password"
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
    </v-form>
  </v-container>
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
            User.login(this.form)
        }
    }
}
</script>

<style>

</style>