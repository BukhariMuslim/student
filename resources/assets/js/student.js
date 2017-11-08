import Vue from 'vue'
import Student from './components/Student'

Vue.filter('capitalize', function (value) {
  if (!value) return ''
  value = value.toString()
  return value.charAt(0).toUpperCase() + value.slice(1)
})

new Vue(Student).$mount('#student-list')