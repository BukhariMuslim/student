<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Search Result for {{ name }}</div>
                    <div class="panel-body">
                        <div v-if="query.length != 0">
                            <div class="col-sm-12" v-for="(s, key) in query" :key="key" >
                                Query {{ key + 1 }} :<br/>
                                {{ s.query }}
                                <div v-if="s.bindings.length > 0">
                                    Bindings: 
                                    <span v-for="(d, k) in s.bindings" :key="k" >
                                        {{ d }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div v-else></div>
                        <div v-if="data.length == 0">
                            No data found.
                        </div>
                        <div v-else>
                            <div class="col-sm-12">
                                Found {{ data.length }} data(s).
                            </div>
                            <dl>
                                <dd class="col-sm-12" v-for="(s, key) in data" :key="key">
                                    <dt>{{ s.name }}</dt>
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
                data: window.datas,
                query: window.datasQuery,
                name: window.queryName,
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>