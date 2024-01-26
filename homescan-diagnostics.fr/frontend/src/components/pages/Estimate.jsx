import { useGetEstimateQuery } from "../../slices/ApiSlice"

export default function Estimate() {
    const { data, isLoading} = useGetEstimateQuery()
    
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
