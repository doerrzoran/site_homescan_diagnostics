
import logo from '../assets/image/HOME-SCAN-DIAGNOSTICS-LOGO-1.jpg';

export default function Header(){
  return (
    <header>
      <nav>
        <img onClick={() => window.location.href = '/'} className="logo" src={logo} alt="Logo" />

        <ul className='navigation'>
  <li>
    <a href="/">Accueil</a>
    <ul> 
      <li><a href="/intervention">Secteurs d'intervention</a></li>
      <li><a href="/estimate">Demande de devis</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Entreprise</a>
    <ul>
      
      <li><a href="/savoir/faire">Savoir-faire</a></li>
      <li><a href="/atouts">Nos atouts</a></li>
     
    </ul>
  </li>
  <li>
    <a href="#">Missions</a>
    <ul>
      
      <li><a href="/diagnostics/en/copropriéte">Diagnostics en copropriété</a></li>
      <li><a href="/diagnostics/avant/vente">Diagnostics avant vente</a></li>
      <li><a href="/diagnostics/avant/location">Diagnostics avant location</a></li>
      <li><a href="/diagnostics/avant/travaux">Diagnostics avant travaux</a></li>
      <li><a href="/diagnostics/apres/travaux">Diagnostics après travaux</a></li>
      <li><a href="/diagnostics/avant/démolition">Diagnostics avant démolition</a></li>
     
    </ul>
  </li>
  <li>
    <a href="/contact">Contact</a>
    {/* <ul>
      
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
     
    </ul> */}
  </li>
</ul>

        <div className='dropdown'>
        <i className="fa-solid fa-bars"></i>
          <ul className='dropdown-content'>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Entreprise</a></li>
            <li><a href="#">Missions</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
  );
}

