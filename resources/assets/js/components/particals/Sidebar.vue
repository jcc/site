<template>
  <nav id="sidebar-nav">
    <ul>
      <li class="active" v-for="menu in menus">
        <router-link :to="menu.uri" v-if="!menu.subMenus" exact>
          <i :class="menu.icon"></i> {{ menu.label }}
        </router-link>
        <router-link :to="menu.label" v-else exact>
          <i :class="menu.icon"></i> {{ menu.label }}
          <span class="pull-right"><i class="ion-ios-arrow-down"></i></span>
        </router-link>
        <ul v-if="!!menu.subMenus">
          <li v-for="sub in menu.subMenus">
            <router-link :to="sub.uri" exact><span>{{ sub.label }}</span></router-link>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</template>

<script>
  import menus from '../../config/menu.js'

  export default {
    data () {
      return {
        menus: menus.default
      }
    }
  }
</script>
