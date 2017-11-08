<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Student</div>
                    <div class="panel-body">
                        <div v-if="student.length == 0">
                            No data found.
                        </div>
                        <div v-else>
                            <div class="col-sm-12">
                                Found {{ student.length }} data(s).
                            </div>
                            <div class="col-sm-12" v-for="(s, key) in student" :key="key">
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
                student: window.students,
                query: window.studentQuery
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>