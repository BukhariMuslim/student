<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Payment</div>
                    <div class="panel-body">
                        <div v-if="payment.length == 0">
                            No data found.
                        </div>
                        <div v-else>
                            <div class="col-sm-12">
                                Found {{ payment.length }} data(s).
                            </div>
                            <div class="col-sm-12" v-for="(s, key) in payment" :key="key">
                                {{ s.code }} |
                                <small>
                                    {{ s.amount }} ({{ s.status ? 'Done' : 'Pending' }})
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
                payment: window.payments,
                query: window.paymentQuery
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>