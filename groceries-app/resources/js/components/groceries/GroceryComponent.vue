<template>
    <tr>
        <td>{{ groceryItem.name }}</td>
        <td>{{ groceryItem.quantity }}</td>
        <td>{{ groceryItem.notes }}</td>
        <td>
            <!--<button class="btn btn-warning" @click="editItem(groceryItem)">Edit</button>-->
            <button class="btn btn-danger">Delete</button>
        </td>
    </tr>
</template>
<script>
    import EventBus from '../../eventBus';
    export default {
        props: ['groceryItem'],
        methods: {
            editItem(id) {
                // we need to tell the other component to remove the item and update the list
                EventBus.$emit('editItem', id);
            }
        }
    }
</script>
<style>
    .btn-warning {
        margin-right: 10px;
    }
</style>
