<template>
  <div class="container">
    <br />
    <h2>Formulaire de contact</h2>
    <form method="POST" class="row justify-content-start">
      <div class="col-md-4">
        <div class="form-group">
          <label for="lastName">Nom</label>
          <input
            v-model="lastName"
            type="text"
            class="form-control"
            id="lastName"
          />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input v-model="email" type="email" class="form-control" id="email" />
        </div>
        <div class="form-group">
          <label for="address">Addresse</label>
          <input
            v-model="address"
            type="text"
            class="form-control"
            id="address"
          />
        </div>
        <!-- <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="checkbox_newsletter"
          />
          <label class="form-check-label" for="checkbox_newsletter">
            Je souhaite recevoir la newsletter
          </label>
        </div> -->
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="firstName">Prénom</label>
          <input type="text" class="form-control" id="firstName" />
        </div>
        <div class="form-group">
          <label for="phone">Téléphone (Mobile)</label>
          <input
            type="phone"
            class="form-control"
            id="phone"
            pattern="[0-9]{10}"
          />
        </div>
        <div class="form-group">
          <label for="city">Ville</label>
          <input type="text" class="form-control" id="city" />
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="about_me">Commentaires</label>
          <textarea
            v-model="comment"
            class="form-control about_me"
            id="about_me"
          ></textarea>
        </div>
        <div class="form-group">
          <label for="zipCode">Code Postal</label>
          <input type="text" class="form-control" id="zipCode" />
        </div>
      </div>
      <div class="submit-button d-none d-md-block">
        <button @click="submit" class="btn btn-primary p-1">
          Enregistrer mes modifications
        </button>
      </div>
    </form>
  </div>
</template>

<script >
export default {
  data() {
    return {
      address: '',
      city: '',
      comment: '',
      email: '',
      firstName: '',
      lastName: '',
      phone: '',
      zipCode: '',
    }
  },
  methods: {
    submit() {
      
    },
  },
}
</script>

<style>
</style>