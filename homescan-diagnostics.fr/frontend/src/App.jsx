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
import Condominium from './components/pages/Condominium';
import PreSell from './components/pages/PreSell';
import PreRent from './components/pages/PreRent';
import PreConstruction from './components/pages/PreConstruction';
import PostConstruction from './components/pages/PostConstruction';
import PreDestruction from './components/pages/PreDestruction';
import PreDestructionAsbestos from './components/pages/PreDestructionAsbestos';
import PreDestructionTermites from './components/pages/PreDestructionTermites';
import PreConstructionAsbestos from './components/pages/PreConstructionAbsestos';
import PreConstructionTermites from './components/pages/PreConstructionTermites';
import DPE from './components/pages/DPE';
import DTA from './components/pages/DTA';
import Electricty from './components/pages/Electricty';
import ERP from './components/pages/ERP';
import Gaz from './components/pages/Gaz';
import EnergyEstimate from './components/pages/EnergyEstimate';
import Lead from './components/pages/Lead';
import Society from './components/pages/Society';
import Missions from './components/pages/missions';
import Termites from './components/pages/Termites';
import Carrez from './components/pages/Carrez';
import Asbestos from './components/pages/Asbestos';
import Admin from './components/pages/Admin';


function App() {

const router = useMemo(() => {
  return createBrowserRouter([
    {
      path: '',
      element: <Layout content={<Home/>} />
    },
    {
      path: '/admin',
      element: <Layout content={<Admin/>} />
    },
    {
      path: '/qui/sommes/nous',
      element: <Layout content={<Society/>} />
    },
    {
      path: '/nos/missions',
      element: <Layout content={<Missions/>} />
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
      path: '/diagnostics/plomb/avant/travaux',
      element: <Layout content={<PreConstruction/>} />
    },
    {
      path: '/diagnostics/amiantes/avant/travaux',
      element: <Layout content={<PreConstructionAsbestos/>} />
    },
    {
      path: '/diagnostics/termites/avant/travaux',
      element: <Layout content={<PreConstructionTermites/>} />
    },
    {
      path: '/diagnostics/apres/travaux',
      element: <Layout content={<PostConstruction/>} />
    },
    {
      path: '/diagnostics/plomb/avant/démolition',
      element: <Layout content={<PreDestruction />} />
    },
    {
      path: '/diagnostics/amiante/avant/démolition',
      element: <Layout content={<PreDestructionAsbestos />} />
    },
    {
      path: '/diagnostics/termites/avant/démolition',
      element: <Layout content={<PreDestructionTermites />} />
    },
    {
      path: '/diagnostics/performance/energetique',
      element: <Layout content={<DPE />} />
    },
    {
      path: '/diagnostics/technique/amiante',
      element: <Layout content={<DTA />} />
    },
    {
      path: '/etat/instalation/electrique',
      element: <Layout content={<Electricty />} />
    },
    {
      path: '/etat/instalation/gaz',
      element: <Layout content={<Gaz />} />
    },
    {
      path: '/etat/risques/plomb',
      element: <Layout content={<Lead />} />
    },
    {
      path: '/etat/des/risques/et/pollution',
      element: <Layout content={<ERP />} />
    },
    {
      path: '/audit/energetique',
      element: <Layout content={<EnergyEstimate />} />
    },
    {
      path: '/termites',
      element: <Layout content={<Termites />} />
    },
    {
      path: '/loi/carrez',
      element: <Layout content={<Carrez />} />
    },
    {
      path: '/amiante',
      element: <Layout content={<Asbestos />} />
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
