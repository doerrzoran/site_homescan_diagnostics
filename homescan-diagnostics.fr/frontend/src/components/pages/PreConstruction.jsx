import { useGetPreConstructionLeadQuery } from "../../slices/ApiSlice"

export default function PreConstruction() {
    const { data, isLoading} = useGetPreConstructionLeadQuery()
    
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
