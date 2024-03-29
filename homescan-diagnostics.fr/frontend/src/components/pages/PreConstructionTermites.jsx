import { useGetPreConstructionTermitesQuery } from "../../slices/ApiSlice"

export default function PreConstructionTermites() {
    const { data, isLoading} = useGetPreConstructionTermitesQuery()
    
    return(
        <>
            <div>
                {
                    isLoading ? <p></p>:
                    <div>

                        <h1>
                            {
                                data.title
                            }
                        </h1>
                        <p>
                            {
                                data.text
                            }
                        </p>
                    </div>
                }
            </div>
        </>
    )
}
    

