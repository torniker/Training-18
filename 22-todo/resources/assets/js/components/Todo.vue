<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form @submit.prevent="onSubmit">
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
        props: {
            value: Array,
        },
        data() {
            return {
                newItem: '',
                todos: [],
            };
        },
        mounted() {
            this.todos = this.value;
        },
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
                var todo = { text: this.newItem, isCompleted: false};
                this.todos.push(todo);
                this.save(todo);
                this.newItem = '';
            },
            save(todo) {
                axios.post('/todos', todo).then(response => {
                    console.log('saved');
                    todo.id = response.data.id;
                }, response => {
                    console.error(response);
                });
                console.log('submit');
            },
            toggleComplete(todo) {
                axios.post('/todos/'+todo.id, {}).then(response => {
                    console.log(response);
                }, response => {
                    console.error(response);
                });
                todo.isCompleted = !todo.isCompleted;
            }
        }
    }
</script>