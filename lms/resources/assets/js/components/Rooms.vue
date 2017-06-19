<template>
    <div class="row">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="room in rooms">
                    <td>{{ room.name }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: {
            buildingId: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                rooms: []
            };
        },
        mounted() {
            this.fetchRooms()
        },
        methods: {
            fetchRooms() {
                axios.get('/rooms/'+this.buildingId)
                    .then(this.success)
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            success(response) {
                this.rooms = response.data;
            }
        }
    }
</script>
