<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form v-on:submit.prevent="onSubmit">
                    <div class="input-group">
                        <input type="text" class="form-control" v-model="newItem" placeholder="რა უნდა ქნა?">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">დაამატე!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" v-for="todo in incompleted">
            <div class="col-xs-12">
                <strong @click="toggleComplete(todo)">{{ todo.text }}</strong>
            </div>
        </div>
        <hr>
        <h2>Completed</h2>
        <div class="row" v-for="todo in completed">
            <div class="col-xs-12">
                <strong @click="toggleComplete(todo)">{{ todo.text }}</strong>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                newItem: '',
                todos: [],
            };
        },
        mounted() {},
        computed: {
            completed() {
                return this.todos.filter(function (item) {
                    return item.isCompleted
                })
            },
            incompleted() {
                return this.todos.filter(function (item) {
                    return !item.isCompleted
                })
            }
        },
        methods: {
            onSubmit() {
                this.todos.push({ text: this.newItem, isCompleted: false});
                this.newItem = '';
            },
            toggleComplete(todo) {
                todo.isCompleted = !todo.isCompleted;
            }
        }
    }
</script>