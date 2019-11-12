<template>
    <tr>
        <td>{{ groceryItem.name }}</td>
        <td>{{ groceryItem.quantity }}</td>
        <td>{{ groceryItem.notes }}</td>
        <td>
            <!--<button class="btn btn-warning" @click="editItem(groceryItem)">Edit</button>-->
            <button class="btn btn-danger" @click="deleteItem(groceryItem.id)">Delete</button>
        </td>
    </tr>
</template>
<script>
    import EventBus from '../../eventBus';
    export default {
        props: ['groceryItem'],
        methods: {
            deleteItem(itemId) {
                // emit the event
                EventBus.$emit('deleteItem', itemId);
            }
        }
    }
</script>
<style>
    .btn-warning {
        margin-right: 10px;
    }
</style>
