<template>
  <div id="app">
    <nav id="nav">
      <ul>
        <li><router-link :to="{ name: 'Home'}">Voir les facts</router-link></li>
        <li><router-link :to="{ name: 'NewFormFact'}">Créer une nouvelle fact</router-link></li>
      </ul>
    </nav>
    <router-view class="container" />
  </div>
</template>

<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

#nav {

  padding: 30px;
}

#nav ul{
  display: flex;
  justify-content: space-around;
  list-style: none;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}


#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
