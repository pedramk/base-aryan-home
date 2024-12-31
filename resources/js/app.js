// import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createNotivue } from 'notivue'
import { Notivue, Notification, push } from "notivue";

import 'notivue/notification.css'
import 'notivue/animations.css'

const notivue = createNotivue({
  position: 'bottom-left',
  limit: 3,
  avoidDuplicates: true,
  notifications: {
    global: {
      duration: 3000
    }
  }
})

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin).use(notivue)
      .component('Notivue', Notivue)
      .component('Notification', Notification)
      .provide('notify', push)
      .mount(el)
  },
})
