import { useGetInterventionSectorQuery } from "../../slices/ApiSlice"

export default function Intervention() {
    const { data, isLoading} = useGetInterventionSectorQuery()
    
    return(
        <>
            <div>
                {
                    isLoading ? <p>is loading</p>:
                    <div>

                        <h1>
                            {
                                data.title
                            }
                        </h1>
                    </div>
                }
            </div>
        </>
    )
}
