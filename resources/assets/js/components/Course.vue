<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Course</div>
                    <div class="panel-body">
                        <div v-if="course.length == 0">
                            No data found.
                        </div>
                        <div v-else>
                            <div class="col-sm-12">
                                Found {{ course.length }} data(s).
                            </div>
                            <dl>
                                <dd class="col-sm-12" v-for="(s, key) in course" :key="key">
                                    <dt>{{ s.name }}</dt>
                                    <small>
                                        {{ s.description }}
                                    </small>
                                </dd>
                            </dl>                            
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
                course: window.courses,
                query: window.courseQuery
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>