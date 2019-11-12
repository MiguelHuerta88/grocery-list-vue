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
                <!--<tr>
                    <td>Milk</td>
                    <td>1</td>
                    <td>Make sure to bring 2%</td>
                    <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                    <td>Cheese</td>
                    <td>2</td>
                    <td>Make sure its the swiss Kroger Brand</td>
                    <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                    <td>Romaine Lettuce</td>
                    <td>1</td>
                    <td>3 pack</td>
                    <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>
                </tr>-->
            </tbody>
        </table>
    </div>
</template>
<script>
    import GroceryComponent from "./GroceryComponent";

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
        components: {
            GroceryComponent
        }
    }
</script>
<style scoped>

</style>
