import { useState } from "react";
import { usePostLoginMutation } from "../../slices/AuthentificationSlice.js";


export default function Admin() {
 const [username, setUsername] = useState()
    const [password, setPassword] = useState()
    const [logginAdmin, { isLoading, isError, isSuccess }] = usePostLoginMutation()
    
    const handleSubmit = (e) =>{
        e.preventDefault()
        logginAdmin({
            username: username,
            password: password,
        })
    }

  return (
    <>
    {
      isSuccess ? 
    
      <ul className='adminlist'>
        <li>
          <a href="/update/homepage">accueil</a>
        </li>
        <li>
          <a href="/update/contact">contacts</a>
        </li>
        <li>
          <a href="/update/intervention">secteurs d'interventions</a>
        </li>
        <li>
          <a href="/update/society">L'entreprise</a>
        </li>
        <li>
          <a href="/update/missions">Nos missions</a>
        </li>
        <li>
          <a href="/update/DTA">DTA</a>
        </li>
        <li>
          <a href="/update/CREP">CREP</a>
        </li>
        <li>
          <a href="/update/carrez">Carrez</a>
        </li>
        <li>
          <a href="/update/amiante">Amiante</a>
        </li>
        <li>
          <a href="/update/dpe">DPE</a>
        </li>
        <li>
          <a href="/update/termites">Termites</a>
        </li>
        <li>
          <a href="/update/electricite">Electricité</a>
        </li>
        <li>
          <a href="/update/gaz">Gaz</a>
        </li>
        <li>
          <a href="/update/energie">energie</a>
        </li>
        <li>
          <a href="/update/erp">ERP</a>
        </li>
        <li>
          <a href="/update/raat">RAAT</a>
        </li>
        <li>
          <a href="/update/dpat">DPAT</a>
        </li>
        <li>
          <a href="/update/dtat">DTAT</a>
        </li>
        <li>
          <a href="/update/dpad">DPAD</a>
        </li>
        <li>
          <a href="/update/dtad">DTAD</a>
        </li>
        <li>
          <a href="/update/daad">DAAD</a>
        </li>
      </ul>
      :
      <div className="container">
      <form onSubmit={handleSubmit}>
          <label htmlFor="username">identifiant :</label>
          <input 
          name="username"
          type="text" 
          value={ username }
          onChange={ (e) => setUsername(e.target.value) } 
          />
          <label htmlFor="password">mot de passe :</label>
          <input 
          name="password"
          type="text" 
          value={ password }
          onChange={ (e) => setPassword(e.target.value) } 
          />
          <button type="submit" className="btn btn-primary">
              {isLoading ? 'connexion en cours...' : 'identification'}
          </button>
          {isError && <p className="text-danger">connection échouée.</p> }
      </form>
  </div>
      }
    </>
  );
}
