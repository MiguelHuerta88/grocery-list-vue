<template>
    <!-- this component should just begin looping through a collection pulled from the backend -->
    <div class="container">
        <h3>Current List</h3>
        <table class="table" v-if="groceries">
            <thead>
                <tr>
                    <th scope="cold">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <GroceryComponent v-for="(groceryItem, index) in groceries" :key="index" :groceryItem="groceryItem"></GroceryComponent>
            </tbody>
        </table>

        <!-- form component -->
        <GroceryItemForm></GroceryItemForm>
    </div>
</template>
<script>
    import GroceryComponent from "./GroceryComponent";
    import GroceryItemForm from "../form/GroceryItemFormComponent";
    import EventBus from '../../eventBus';
    import { mapGetters } from 'vuex';

    export default {
        data() {
            return {
                groceries : null
            }
        },
        created() {
            // dispatch groceries action
            this.$store.dispatch('groceries').then(() => {
                this.groceries = this.getGroceries();
            });

            EventBus.$on('deleteItem', itemId => {
                this.deleteItem(itemId);
            });
        },
        components: {
            GroceryComponent,
            GroceryItemForm
        },
        methods: {
            ...mapGetters(['getGroceries']),
            addItem() {
                this.groceries = this.getGroceries();
            },
            deleteItem(itemId) {
                this.$store.dispatch('deleteGrocery', itemId).then(response => {
                    this.groceries = this.getGroceries();
                });
            }
        }
    }
</script>
<style scoped>

</style>
