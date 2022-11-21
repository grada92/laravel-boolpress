<template>
  <div>
    <div v-for="post in posts" :key="post.id">
       <ul>
        <li>{{post.title}}</li> 

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

}
}
</script>

<style>

</style>
