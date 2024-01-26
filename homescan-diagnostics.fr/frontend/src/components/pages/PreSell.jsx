import { useGetPreSellQuery } from "../../slices/ApiSlice"

export default function PreSell() {
    const { data, isLoading} = useGetPreSellQuery()
    
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

