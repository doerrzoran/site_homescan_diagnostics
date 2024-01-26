import { useGetPreConstructionQuery } from "../../slices/ApiSlice"

export default function PreConstruction() {
    const { data, isLoading} = useGetPreConstructionQuery()
    
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
