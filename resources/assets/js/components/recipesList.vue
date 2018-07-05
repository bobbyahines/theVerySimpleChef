<template>

    <!--<v-layout row justify-center>-->
    <div>
        <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
            <!--<v-btn slot="activator" color="primary" dark>Open Dialog</v-btn>-->
            <v-card>
                <v-toolbar light>
                    <v-btn icon light @click.native="dialog = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>Recipe</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn light flat @click.native="dialog = false" icon>
                            <v-icon>share</v-icon>
                        </v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text>
                    <p class="body-2">Ingredients:</p>
                    <ul v-for="">
                        <li>
                            <p class="body-2">X</p>
                        </li>
                    </ul>
                </v-card-text>
            </v-card>
        </v-dialog>

    <!--</v-layout>-->

    <v-data-table
            :headers="[{text: 'Recipe',align: 'left',sortable: false,value: 'name'}]"
            :items="recipes"
            item-key="id"
            expand
            hide-headers
            hide-actions
    >

        <template slot="items" slot-scope="props">
            <tr @click="props.expanded = !props.expanded">
                <td class="body-2">{{ props.item.name }}</td>
            </tr>
        </template>

        <template slot="expand" slot-scope="props">
            <v-card flat>
                <v-card-text>
                    <p class="body-1"><strong>{{ props.item.description }}</strong></p>
                    <p class="body-1"><strong>prep: </strong>{{ props.item.prep_time }} mins</p>
                    <p class="body-1"><strong>cook: </strong>{{ props.item.cook_time }} mins</p>
                    <v-btn @click.native="dialog = true" outline>View Recipe</v-btn>
                </v-card-text>
            </v-card>
        </template>

    </v-data-table>

    </div>

</template>

<script>
    export default {
        name: "recipes-list",
        data() {
            return {
                headers: [
                    {text: 'Recipe',align: 'left',sortable: false,value: 'name'},
                ],
                recipes: [],
                ingredients: [],
                dialog: false,
            }
        },
        created() {
            this.getRecipes()
        },
        methods: {

            getRecipes() {

                axios.get('http://' + window.location.hostname + '/api/recipes')
                    .then(response => {
                        if (response.data.length > 0) {
                            // console.log(response.data.length);
                            for (let i = 0; i < response.data.length; i++) {
                                this.recipes.push(response.data[i]);
                            }
                        } else {
                            this.recipes = [];
                        }
                    })

            },

            getIngredients(id) {

                this.dialog = true;

                let params = new URLSearchParams();
                params.append('recipe_id',id);

                axios.post()
                    .then(response => {
                        if (response.data.length > 0) {
                            for (let i = 0; i < response.data.length; i++) {
                                this.variable.push(response.data[i]);
                            }
                        } else {
                            this.variable = [];
                        }
                    })

            }
        }
    }
</script>

<style scoped>

</style>