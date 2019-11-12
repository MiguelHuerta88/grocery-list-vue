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
                    <th scope="col">Edit/Delete</th>
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

    export default {
        data() {
            return {
                groceries : [
                    {
                        name: 'Milk',
                        quantity: 1,
                        notes: 'Make sure to bring 2%'
                    },
                    {
                        name: 'Cheese',
                        quantity: 1,
                        notes: 'Kroger branch swiss'
                    },
                    {
                        name: 'Lettuce',
                        quantity: 1,
                        notes: '3 pack'
                    }
                ]
            }
        },
        created() {
            EventBus.$on('newItem', item => {
                this.addItem(item);
            });
        },
        components: {
            GroceryComponent,
            GroceryItemForm
        },
        methods: {
            addItem(item) {
                this.groceries.push(item);
            }
        }
    }
</script>
<style scoped>

</style>
