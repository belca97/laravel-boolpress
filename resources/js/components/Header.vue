.<template>

<div>
<nav class="navbar navbar-expand navbar-light bg-light">
  <a class="navbar-brand" href="#">Boolpress</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <!-- <a class="nav-link" href="/">Home </a> -->
        <router-link class="nav-link" :to="{name: 'home'}">Home</router-link>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="/chi-siamo">Chi siamo</a> -->
        <router-link class="nav-link"  :to="{name: 'about'}">Chi siamo</router-link>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="/contatti">Contatti</a> -->
        <router-link class="nav-link"  :to="{name: 'contact'}">Contatti</router-link>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="/contatti">Contatti</a> -->
        <router-link class="nav-link"  :to="{name: 'posts'}">Post</router-link>
      </li>
    </ul>

    <ul>
        <li class="nav-item ms-auto list-unstyled">
            <a href="/admin">Accesso admin</a>
      </li>
    </ul>
</nav>
</div>
  
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style scoped>

    .router-link-exact-active{
        font-weight: bold;
        color: rgb(87, 87, 227)!important;
    }

</style>