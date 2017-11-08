<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Instructor</div>
                    <div class="panel-body">
                        <div v-if="instructor.length == 0">
                            No data found.
                        </div>
                        <div v-else>
                            <div class="col-sm-12">
                                Found {{ instructor.length }} data(s).
                            </div>
                            <div class="col-sm-12" v-for="(s, key) in instructor" :key="key">
                                {{ s.name }}
                                <small>
                                    ({{ s.gender | capitalize }})
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                instructor: window.instructors,
                query: window.instructorQuery
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>