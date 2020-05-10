import Detail from './views/Detail'
import Home from './views/Home'
import Contact from './views/Contact'
import Services from './views/Services'
import New from './views/New'

export const routes = [
  { path: '/', component: Home },

  { path: '/:slug/:id', component: Detail, name: 'detail', props: true },
  { path: '/kontakt', component: Contact, name: 'contact', props: true },
  { path: '/tjänster', component: Services, name: 'services', props: true },
  { path: '/new', component: New, name: 'new', props: true },
  { path: '/*', component: Home },
]