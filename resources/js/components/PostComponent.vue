<template>
  <div>

    <div v-for="post in posts" :key="post.id">
       <ul>
        <li @click="showPost(post.id)">{{post.title}} </li>

       </ul>
    </div>
</div>
</template>

<script>

export default {
name: 'PostComponent',
data(){
    return {
        posts:[]
    }
},
mounted(){
    axios.get('api/posts').then(({data})=> {
        this.posts = data.results;

    })

},
methods: {
    showPost(id){
    console.log('hai cliccato il post: ', id);
    this.$router.push('/posts/' + id);
}
}
}
</script>

<style>

</style>
