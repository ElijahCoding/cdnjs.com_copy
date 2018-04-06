<template>

      <ais-index app-id="F5573XIZ75"
             api-key="6c4c9e56624257bd24ac5782a3057da5"
             index-name="libraries"
             >
             <div class="form-group" @keydown="convert()">
               <ais-input :placeholder="librariesSum" type="input" class="form-control"></ais-input>
             </div>

             <ais-results v-if="typing">

               <template slot-scope="{ result }">
                    <div class="form-group">
                      <div class="card form-control">

                         <div class="card-heading">

                           <dl class="row">
                             <dt class="col-sm-3">
                               <a target="_blank" :href="result.latest">
                                 <h5 class="float-left">
                                   {{ result.name }}
                                 </h5>
                               </a>
                             </dt>
                             <dd class="col-sm-6" ref="text">{{ result.latest }}</dd>
                          </dl>
                         </div>

                     </div>
                    </div>
	                </template>

             </ais-results>
           </ais-index>


</template>

<script>
   export default {
     data () {
       return {
         typing: false,
         libraries: [],

       }
     },

     methods: {
       convert() {
         this.typing = true
       },

        copy () {
          this.$refs.text.select();
          document.execCommand('copy')
        }
     },

     mounted() {
       axios.get('http://127.0.0.1:8000/api/libraries').then((response) => {
         this.libraries = response.data
       })
     },

     computed: {
       librariesSum() {
         return `Search from ${ this.libraries.length } libraries`
       }
     },

   }
</script>
