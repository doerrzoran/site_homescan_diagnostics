import { useGetPostConstructionQuery } from "../../slices/ApiSlice"

export default function PostConstruction() {
    const { data, isLoading} = useGetPostConstructionQuery()
    
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
