<template>
  <div>
    <h1>Lista Post</h1>
     <PostComponent/>
  </div>

</template>

<script>
import PostComponent from '../components/PostComponent.vue'
export default {
    name:'App',
    components:{PostComponent}
}
</script>

<style scoped lang="scss">

</style>
