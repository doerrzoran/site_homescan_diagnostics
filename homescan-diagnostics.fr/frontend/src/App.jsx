import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import { useMemo } from 'react'
import './App.css'
import Layout from './components/Layout';
import Home from './components/Home';
import Contacts from './components/pages/contacts';
import Intervention from './components/pages/Intervention';
import Estimate from './components/pages/estimate';
import Skills from './components/pages/Skills';
import Assets from './components/pages/Assets';
import Dec from './components/pages/Condominium';
import Condominium from './components/pages/Condominium';
import PreSell from './components/pages/PreSell';
import PreRent from './components/pages/PreRent';
import PreConstruction from './components/pages/PreConstruction';
import PostConstruction from './components/pages/PostConstruction';
import PreDestruction from './components/pages/PreDestruction';


function App() {

const router = useMemo(() => {
  return createBrowserRouter([
    {
      path: '',
      element: <Layout content={<Home/>} />
    },
    {
      path: '/contact',
      element: <Layout content={<Contacts/>} />
    },
    {
      path: '/intervention',
      element: <Layout content={<Intervention/>} />
    },
    {
      path: '/estimate',
      element: <Layout content={<Estimate/>} />
    },
    {
      path: '/savoir/faire',
      element: <Layout content={<Skills/>} />
    },
    {
      path: '/atouts',
      element: <Layout content={<Assets/>} />
    },
    {
      path: '/diagnostics/en/copropriéte',
      element: <Layout content={<Condominium/>} />
    },
    {
      path: '/diagnostics/avant/vente',
      element: <Layout content={<PreSell/>} />
    },
    {
      path: '/diagnostics/avant/location',
      element: <Layout content={<PreRent/>} />
    },
    {
      path: '/diagnostics/avant/travaux',
      element: <Layout content={<PreConstruction/>} />
    },
    {
      path: '/diagnostics/apres/travaux',
      element: <Layout content={<PostConstruction/>} />
    },
    {
      path: '/diagnostics/avant/démolition',
      element: <Layout content={<PreDestruction />} />
    },
  ])
}, [])
  return (
    <>
     <RouterProvider router={router}/>
    </>
  )
}

export default App
