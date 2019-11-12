<template>
	<div class="container">
        <div class="row">
            <span class=" badge badge-secondary"><h2>Need Groceries?</h2></span>

            <!-- first component -->
            <GroceriesComponent></GroceriesComponent>
        </div>
    </div>
</template>
<script>
    import GroceriesComponent from './groceries/GroceriesComponent';
    import GroceryItemForm from './form/GroceryItemFormComponent';

    export default {
        components: {
            GroceriesComponent
        },
    }
</script>
<style scoped>
    .container {
        margin-top: 20px;
    }
</style>
