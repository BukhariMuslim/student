import Vue from 'vue'
import Instructor from './components/Instructor'

Vue.filter('capitalize', function (value) {
  if (!value) return ''
  value = value.toString()
  return value.charAt(0).toUpperCase() + value.slice(1)
})

new Vue(Instructor).$mount('#instructor-list')