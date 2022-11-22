<template>
  <div>
    <h1>Lista Post</h1>
    <span><router-link to ="/" class="nav1">Posts</router-link></span>
    <span><router-link to ="/About" class="nav1">About Us</router-link></span>
    <span><router-link to ="/Contact" class="nav1">Contacts</router-link></span>

	<router-view></router-view>  <!--in questo modo prende la rotta definita prima in new VueRouter-->


  </div>

</template>

<script>

export default {
    name:'App',

}
</script>

<style scoped lang="scss">
.nav1 {
    padding: 10px;
    color:red;
}
</style>
