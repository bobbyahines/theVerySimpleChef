<template>

    <v-app v-cloak>
        <v-content>

            <!------------------------->
            <!--TOOLBAR AT TOP OF APP-->
            <!------------------------->
            <v-toolbar app>
                <v-toolbar-title>
                    <v-btn icon @click.stop="drawer = !drawer">
                        <v-icon>free_breakfast</v-icon>
                    </v-btn>
                    the very simple chef
                </v-toolbar-title>
                <v-spacer></v-spacer>
            </v-toolbar>


            <!--------------------------->
            <!--MAIN VIEW PORTAL OF APP-->
            <!--------------------------->
            <!--<v-container>-->

                <recipes-list></recipes-list>

            <!--</v-container>-->


            <!-------------------------->
            <!--SIDE NAV DRAWER OF APP-->
            <!-------------------------->
            <v-navigation-drawer
                    v-model="drawer"
                    absolute
                    temporary
            >
                <v-list class="pa-1">
                    <v-list-tile avatar>
                        <v-list-tile-avatar>
                            <v-btn icon>
                                <v-icon>free_breakfast</v-icon>
                            </v-btn>
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>
                                the very simple chef
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>

                <v-list class="pt-0" dense>
                    <v-divider></v-divider>

                    <v-list-tile
                            v-for="item in items"
                            :key="item.title"
                            @click=""
                    >
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-content>
                            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-navigation-drawer>

            <!--------------------------->
            <!--FOOTER AT BOTTOM OF APP-->
            <!--------------------------->
            <v-footer app>
                <p class="caption">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &hearts; Scuba Wolves
                    <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&#45;&#45; Scuba Wolves &#45;&#45;&isin;-->
                </p>
            </v-footer>


        </v-content>
    </v-app>

</template>

<script>
    import recipesLayout from './recipesList'
    export default {
        name: "app-layout",
        data() {
            return {
                drawer: null,
                items: [
                    {title: 'Home', icon: 'dashboard'},
                    {title: 'About', icon: 'question_answer'}
                ]
            }
        },
        components: {
            'recipes-layout': recipesLayout
        }
    }
</script>

<style scoped>

</style>