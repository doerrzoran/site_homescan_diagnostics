import { useGetContactsQuery } from "../slices/ApiSlice"

export default function Footer() {
    const { data, isLoading} = useGetContactsQuery()
    
    return(
        <footer className="footer">
      <div className="container">
      <div className="column">
          
            <p>Homescan diagnostics <br />
            diagnostiqueur immobilier en seine-saint-Denis
            </p>
        </div>
        <div className="column">  
        {
                    isLoading ? <p></p>:
                    <div>

                        <p> 
                            {
                                data.mail
                            }
                        </p>
                        <p>  
                            {
                                data.phoneNumber
                            }
                        </p>
                    </div>
                }
        </div>
        <div className="column adress">
            <p>49 Allée de la tour <br />
                93250 Villemomble
            </p>
        <div className="map-column">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.964196417705!2d2.5007097!3d48.8970195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61300dc5c58e5%3A0xe9180a73529c0594!2sHOMESCAN-Diagnostics!5e0!3m2!1sfr!2sfr!4v1703152177247!5m2!1sfr!2sfr&z=15"  
            allowFullScreen="" 
            loading="lazy" 
            >
        </iframe>
        </div>

        {/* <p>&copy; 2023 Your Company. All rights reserved.</p> */}
      </div>
        </div>
    </footer>
    )
}
