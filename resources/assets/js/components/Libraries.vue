<template>
  <div>
    <ais-index app-id="F5573XIZ75"
             api-key="6c4c9e56624257bd24ac5782a3057da5"
             index-name="libraries"
             >

             <ais-input placeholder="Search libraries..."></ais-input>

             <ais-results>
               <template scope="{ result }">
            		   <div>
            			   <h1>@{{ result.name }}</h1>
            			   <h4>@{{ result.latest }}</h4>
            		   </div>
	                </template>
             </ais-results>
  </ais-index>
  </div>

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
