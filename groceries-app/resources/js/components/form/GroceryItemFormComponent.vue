<template>
    <div class="container">
        <span class="badge badge-secondary"><h3>Add/Edit Item</h3></span>

        <form @submit="submit">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Enter Item" v-model="fields.name">
                    <div class="error">{{ validations.name }}</div>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-control" type="number" name="quantity" placeholder="Quantity" v-model="fields.quantity">
                    <div class="error">{{ validations.name }}</div>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" type="input" name="noted" placeholder="Notes" v-model="fields.notes">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script>
    import EventBus from '../../eventBus';
    export default {
        data() {
            return {
                isSubmit: true,
                fields: {
                    id: null,
                    name: null,
                    quantity: null,
                    notes: null
                },
                validations: {
                    name: undefined,
                    quantity: undefined,
                    notes: undefined
                }
            }
        },
        methods: {
            submit(evt) {
                evt.preventDefault();
                // try to validate
                this.validations = this.validateFields(this.fields);

                // check the validations. If we have some set we return back
                if (Object.keys(this.validations).length) return;

                if (this.isSubmit) {
                    // otherwise we add to list
                    // but the parent controls the list
                    EventBus.$emit('newItem', this.fields);
                } else {
                    EventBus.$emit('editItem', this.fields);
                }
                // clear the fields
                this.fields = {name: null, quantity: null, notes: null};

            },
            validateFields(fields) {
                const errors = {};

                if (!fields.name) {
                    errors.name = "Item field is required!";
                }

                if (!fields.quantity) {
                    errors.quantity = "Quantity field is required!";
                }

                return errors;
            },
            editItem(item) {
                // first we need to find the item and set the form values to it
                this.fields = item;
                this.isSubmit = false;
            }
        },
        created() {
            EventBus.$on('editItem', item => {
                this.editItem(item);
            });
        }

    }
</script>
<style scoped>
    form {
        margin-top: 20px;
    }
    .error {
        margin: 5px 5px;
        font-size: 10px;
        color: red;
    }
</style>
