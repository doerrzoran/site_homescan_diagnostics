import { useGetContatctsQuery } from "../../slices/ApiSlice"

export default function Contacts() {
    const { data, isLoading} = useGetContatctsQuery()
    
    return(
        <>
            <div>
                {
                    isLoading ? <p>is loading</p>:
                    <div>

                        <h2> email : 
                            {
                                data.mail
                            }
                        </h2>
                        <h2> numéro de télephone : 
                            {
                                data.phoneNumber
                            }
                        </h2>
                    </div>
                }
            </div>
        </>
    )
}
