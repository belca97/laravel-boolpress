
<template>

        <main>

            <div class="container">

                <h1>Elenco dei post</h1>
                <div class="row">
                    <div class="col-6"  v-for="post in posts" :key="post.id">
                        <div class="card w-100" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{post.title}}</h5>
                                <p class="card-text">{{post.content}}</p>
                                <a href="#" class="btn btn-primary">Leggi il post</a>
                            </div>
                        </div>
                    </div>
                </div> 

                <nav aria-label="Page navigation example" class="mt-4">
                    <ul class="pagination">
                        <li class="page-item btn" :class="(currentPage == 1) ?'disabled' :''"><span class="page-link" @click="getPost(currentPage - 1)">Precedente</span></li>
                        <li class="page-item btn" :class="(currentPage == lastPage) ?'disabled' :''"><span class="page-link" @click="getPost(currentPage + 1)">Successivo</span></li>
                    </ul>
                </nav>            

            </div>
        </main>

</template>

<script>
export default {
    name: 'Main',

    data (){

        return {
            posts: [],
            currentPage: 1,
            lastPage: null
        }

    },

    methods: {
        getPost (apiPage) {
            axios.get('/api/posts', {
                'params' : {
                    'page' : apiPage,
                }
            })
            
            .then((response) =>{

                //console.log(response) con il console log di responde vedo dove vanno a rifinire i dati

            this.currentPage = response.data.results.current_page;

            this.posts = response.data.results.data;

            this.lastPage = response.data.results.last_page;

        })            
        }
    },

    created(){
        this.getPost(1)
    }
}
</script>

<style>

</style>