import { useState } from "react"
import { usePostLoginMutation } from "../slices/AuthentificationSlice.js"

export default function Authentification() {    
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

    return(
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
                {isSuccess && <p className="text-danger">Bienvenue</p> }
            </form>
        </div>
    )
    
}
