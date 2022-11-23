
<template>
    <div>
        <div v-if="posts">
            <h2> {{posts.slug}} </h2>

        </div>


    </div>

</template>
<script>

export default {
name: 'DetailPost',
data(){
    return {
        posts: undefined,
    }
},
mounted(){
    const id = this.$route.params.id;
	this.loadPage('api/posts/' + id);
},
methods: {
    loadPage(url){
        console.log(url);

        axios.get(url).then((response) => {
            if(response.status ==200){
            console.log(response);
            this.posts= response.data;

            }

        })
    }
        }

    }




</script>


