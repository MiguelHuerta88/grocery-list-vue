<template>
    <tr>
        <td>{{ groceryItem.name }}</td>
        <td>{{ groceryItem.quantity }}</td>
        <td>{{ groceryItem.notes }}</td>
        <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>
    </tr>
</template>
<script>
    export default {
        props: ['groceryItem']
    }
</script>
<style>
    .btn-warning {
        margin-right: 10px;
    }
</style>
