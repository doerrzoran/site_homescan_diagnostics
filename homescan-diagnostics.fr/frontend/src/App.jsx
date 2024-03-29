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
import HomeUpdate from './components/pages/updates/HomeUpdate';
import ContactsUpdate from './components/pages/updates/ContactsUpdate';
import InterventionUpdate from './components/pages/updates/InterventionUpdate';
import SocietyUpdate from './components/pages/updates/SocietyUpdate';
import MissionsUpdate from './components/pages/updates/MissionsUpdate';
import DTAUpdate from './components/pages/updates/DTAUpdate';
import CREPUpdate from './components/pages/updates/CREPUpdate';
import CarrezUpdate from './components/pages/updates/CarrezUpdate';
import AsbestosUpdate from './components/pages/updates/AsbestosUpdate';
import DPEUpdate from './components/pages/updates/DPEUpdate';
import TermitesUpdate from './components/pages/updates/TermitesUpdate';
import ElectricityUpdate from './components/pages/updates/ElectricityUpdate';
import GazUpdate from './components/pages/updates/GazUpdate';
import EnergyUpdate from './components/pages/updates/energyUpdate';
import ERPUpdate from './components/pages/updates/ERPUpdate';
import RAATUpdate from './components/pages/updates/RAATUpdate';
import DPATUpdate from './components/pages/updates/DPATUpdate';
import DTATUpdate from './components/pages/updates/DTATUpdate';
import DPADUpdate from './components/pages/updates/DPADUpdate';
import DTADUpdate from './components/pages/updates/DTADUpdate';
import DAADUpdate from './components/pages/updates/DAADUpdate';


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
    {
      path:'/update/homepage',
      element : <Layout content={<HomeUpdate/> } />
    },
    {
      path:'/update/contact',
      element : <Layout content={<ContactsUpdate/> } />
    },
    {
      path:'/update/intervention',
      element : <Layout content={<InterventionUpdate/> } />
    },
    {
      path:'/update/society',
      element : <Layout content={<SocietyUpdate/> } />
    },
    {
      path:'/update/missions',
      element : <Layout content={<MissionsUpdate/> } />
    },
    {
      path:'/update/DTA',
      element : <Layout content={<DTAUpdate/> } />
    },
    {
      path:'/update/CREP',
      element : <Layout content={<CREPUpdate/> } />
    },
    {
      path:'/update/carrez',
      element : <Layout content={<CarrezUpdate/> } />
    },
    {
      path:'/update/amiante',
      element : <Layout content={<AsbestosUpdate/> } />
    },
    {
      path:'/update/dpe',
      element : <Layout content={<DPEUpdate/> } />
    },
    {
      path:'/update/termites',
      element : <Layout content={<TermitesUpdate/> } />
    },
    {
      path:'/update/electricite',
      element : <Layout content={<ElectricityUpdate/> } />
    },
    {
      path:'/update/gaz',
      element : <Layout content={<GazUpdate/> } />
    },
    {
      path:'/update/energie',
      element : <Layout content={<EnergyUpdate/> } />
    },
    {
      path:'/update/erp',
      element : <Layout content={<ERPUpdate/> } />
    },
    {
      path:'/update/raat',
      element : <Layout content={<RAATUpdate/> } />
    },
    {
      path:'/update/dpat',
      element : <Layout content={<DPATUpdate/> } />
    },
    {
      path:'/update/dtat',
      element : <Layout content={<DTATUpdate/> } />
    },
    {
      path:'/update/dpad',
      element : <Layout content={<DPADUpdate/> } />
    },
    {
      path:'/update/dtad',
      element : <Layout content={<DTADUpdate/> } />
    },
    {
      path:'/update/daad',
      element : <Layout content={<DAADUpdate/> } />
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
