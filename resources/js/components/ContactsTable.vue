<template>
    <div class="container-fluid">
        <table class="table">
            <tr>
                <th scope="col">Date d'envoi</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Commentaire</th>
                <th scope="col">
                    <template v-if="contacts.length">
                        <button
                            @click="
                                deleteAllComment(origin + '/admin/contact/all')
                            "
                            class="btn btn-danger"
                        >
                            Tout Supprimer
                        </button>
                    </template>
                </th>
            </tr>
            <template v-if="contacts.length">
                <tr v-for="contact in contacts" :key="contact.id">
                    <td>{{ contact.created_at }}</td>
                    <td><input v-model="contact.last_name" type="text" /></td>
                    <td><input v-model="contact.first_name" type="text" /></td>
                    <td><input v-model="contact.email" type="text" /></td>
                    <td><input v-model="contact.address" type="text" /></td>
                    <td><input v-model="contact.zip_code" type="text" /></td>
                    <td><input v-model="contact.city" type="text" /></td>
                    <td><input v-model="contact.phone" type="text" /></td>

                    <td>
                        <textarea v-model="contact.comments"></textarea>
                    </td>
                    <td>
                        <button
                            @click="
                                editComment(
                                    origin + '/admin/contact/' + contact.id,
                                    contact
                                )
                            "
                            class="btn btn-warning"
                        >
                            Editer
                        </button>
                        <button
                            @click="
                                deleteComment(
                                    origin + '/admin/contact/' + contact.id
                                )
                            "
                            class="btn btn-danger"
                        >
                            Suppression
                        </button>
                    </td>
                </tr>
            </template>

            <tr v-else>
                <td colspan="100%">Pas de commentaires</td>
            </tr>
        </table>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    props: ['initialContacts'],
    data() {
        return {
            contacts: [...this.initialContacts],
            origin: window.location.origin,
        }
    },
    mounted() {},
    methods: {
        async deleteAllComment(url) {
            let resp
            try {
                const resp = await axios.post(url)
                if (resp.status == 200) {
                    const deletedId = resp.data.id
                    this.contacts = []
                    alert('contacts supprimés')
                }
            } catch (error) {
                alert('error:' + error.message)
            }
        },
        async deleteComment(url) {
            let resp
            try {
                resp = await axios.delete(url)
                if (resp.status == 200) {
                    const deletedId = resp.data.id
                    this.contacts = this.contacts.filter(
                        ({ id }) => id != deletedId
                    )
                    alert('contact supprimé')
                }
            } catch (error) {
                alert('error:' + error.message)
            }
        },
        async editComment(url, contact) {
            let resp
            try {
                resp = await axios.put(url, { ...contact })
                if (resp.status == 200) {
                    const editedId = resp.data.id
                    const editedContact = this.contacts
                        .filter(({ id }) => id == editedId)
                        .pop()

                    alert(editedContact.email + " édité'")
                }
            } catch (error) {
                alert('error:' + error.message)
            }
        },
    },
}
</script>

<style></style>
