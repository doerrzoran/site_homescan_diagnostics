
import logo from '../assets/image/HOME-SCAN-DIAGNOSTICS-LOGO-1.jpg';

export default function Header(){
  return (
    <header>
    <nav>
    <img onClick={() => window.location.href = '/'} className="logo" src={logo} alt="Logo" />
      <div className="navigation">
<div className="dropdown">
          <button className="dropbtn">Accueil</button>
          <div className="dropdown-content">
            <a href="/intervention">Secteurs d'intervention</a>
            <a href="/estimate">Demande de devis</a>
          </div>
        </div>
        <div className="dropdown">
          <button className="dropbtn">La societé</button>
          <div className="dropdown-content">
            <a href="/qui/sommes/nous">qui sommes-nous ?</a>
            <a href="/nos/missions">Nos missions</a>
          </div>
        </div>
        <div className="dropdown">
          <button className="dropbtn">Missions</button>
          <div className="dropdown-content">
            <a href="#">Diagnostics en copropriété</a>
                <div className="sidemenu">
                    <a href="/diagnostics/technique/amiante">Le Dossier Technique Amiante</a>
                    <a href="#">Le Constat de Risque d'Exposition au Plomb</a>
                    <a href="#">Les autres missions</a>
                </div>
            
            <a href="#">Diagnostics avant vente</a>
              <div className="sidemenu">
                <a href="/loi/carrez">La loi Carrez</a>
                <a href="#">L'amiante avant-vente</a>
                <a href="/etat/risques/plomb">Le Constat de Risque d'Exposition au Plomb</a>
                <a href="/diagnostics/performance/energetique">Le Diagnostic de Performance Energétique</a>
                <a href="/termites">Les Termites</a>
                <a href="/etat/instalation/electrique">L'état de l'installation intérieure d'Electricité</a>
                <a href="/etat/instalation/gaz">L'état de l'installation intérieure de Gaz</a>
                <a href="/audit/energetique">L'Audit Enérgétique Reglementaire</a>
                <a href="/etat/des/risques/et/pollution">L'état des Risques Pollution</a>
              </div>
            
            <a href="#">Diagnostics avant location</a>
              <div className="sidemenu">
                <a href="#">La loi Boutin</a>
                <a href="#">Le Dossier Amiante en Partie Privative</a>
                <a href="/etat/risques/plomb">Le Constat de Risque d'Exposition au Plomb</a>
                <a href="/diagnostics/performance/energetique">Le Diagnostic de Performance Energétique</a>
                <a href="/etat/instalation/electrique">L'état de l'installation intérieure d'Electricité</a>
                <a href="/etat/instalation/gaz">L'état de l'installation intérieure de Gaz</a>
                <a href="/etat/des/risques/et/pollution">L'état des Risques Pollution</a>
              </div>
            
            <a href="#">Diagnostics avant travaux</a>
            <div className="sidemenu">
                <a href="/diagnostics/amiantes/avant/travaux">Le Repérage Amiante Avant-Travaux</a>
                <a href="/diagnostics/plomb/avant/travaux">Le Diagnostics Plomb Avant-travaux</a>
                <a href="/diagnostics/termites/avant/travaux">Le Diagnostics Termites Avant-travaux</a>
              </div>
            <a href="#">Diagnostics avant demolition</a>
            <div className="sidemenu">
              <a href="/diagnostics/plomb/avant/démolition">Le Diagnostic Plomb avant démolition</a>
              <a href="/diagnostics/amiante/avant/démolition">Le Diagnostic Amiante avant démolition</a>
              <a href="/diagnostics/termites/avant/démolition">Le Diagnostic Termites avant démolition</a>
              </div>
            <a href="#">Diagnostics après travaux</a>
          </div>
        </div>
        <div className="dropdown">
          <button className="dropbtn">
            <a href="/contact">contacts</a>
          </button>
        </div>
  </div>
        

  <div className="mobile">
    <i className="fa-solid fa-bars"></i>
      <ul className="mobile-content">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Entreprise</a></li>
        <li><a href="#">Missions</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
    </nav>
  </header>
  );
}

