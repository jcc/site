import Home from './components/views/Home.vue'
import Trick from './components/views/Trick.vue'
import Parent from './components/views/Parent.vue'
import Tag from './components/views/Tag.vue'
import TagCreate from './components/views/TagCreate.vue'
import Category from './components/views/Category.vue'
import CategoryCreate from './components/views/CategoryCreate.vue'
import Link from './components/views/Link.vue'
import LinkCreate from './components/views/LinkCreate.vue'
import Setting from './components/views/Setting.vue'
import Password from './components/views/Password.vue'

export default [
  {
    path: '/',
    component: Home
  },
  {
    path: '/tricks',
    component: Trick
  },
  {
    path: '/categories',
    component: Parent,
    children: [
      {
        path: '/',
        component: Category
      },
      {
        path: 'create',
        component: CategoryCreate
      }
    ]
  },
  {
    path: '/tags',
    component: Parent,
    children: [
      {
        path: '/',
        component: Tag
      },
      {
        path: 'create',
        component: TagCreate
      }
    ]
  },
  {
    path: '/links',
    component: Parent,
    children: [
      {
        path: '/',
        component: Link
      },
      {
        path: 'create',
        component: LinkCreate
      }
    ]
  },
  {
    path: '/settings',
    component: Parent,
    children: [
      {
        path: '/',
        component: Setting
      },
      {
        path: 'password',
        component: Password
      }
    ]
  },
  {
    path: '*',
    component: Home
  }
]