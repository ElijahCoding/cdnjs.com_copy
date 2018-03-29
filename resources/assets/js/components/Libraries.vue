<template>

</template>

<script>
   export default {
     data () {
       return {
         libraries: []
       }
     },

     mounted () {
       axios.get('http://cdnjsapi.test/api/libraries').then((response) => {
         this.libraries = response.data
       })
     }
   }
</script>
