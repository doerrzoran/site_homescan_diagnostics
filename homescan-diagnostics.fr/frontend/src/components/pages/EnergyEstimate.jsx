import { useGetEnergyQuery } from "../../slices/ApiSlice"

export default function EnergyEstimate() {
    const { data, isLoading} = useGetEnergyQuery()
    
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
