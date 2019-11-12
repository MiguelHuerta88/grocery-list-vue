<template>
    <!-- this component should just begin looping through a collection pulled from the backend -->
    <div class="container">
        <h3>Current List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="cold">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
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
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>

</script>
<style scoped>
    .btn-warning {
        margin-right: 10px;
    }
</style>
