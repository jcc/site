<template>
  <div id="app">
    <navbar></navbar>
    <div class="container">
      <div class="console-wrapper table-box">
        <section class="console-container table-row">
          <aside class="console-sidebar-wrapper table-cell">
          <sidebar></sidebar>
          </aside>
          <section class="console-content-wrapper table-cell">
            <router-view></router-view>
          </section>
        </section>
      </div>
      <footer-bar></footer-bar>
    </div>
  </div>
</template>

<script>
  import Navbar from './components/particals/Navbar.vue'
  import Sidebar from './components/particals/Sidebar.vue'
  import FooterBar from './components/particals/FooterBar.vue'

  export default {
    components: {
      Navbar,
      Sidebar,
      FooterBar
    }
  }
</script>
