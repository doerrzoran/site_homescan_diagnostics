import { useGetPreSellQuery } from "../../slices/ApiSlice"

export default function PreSell() {
    const { data, isLoading} = useGetPreSellQuery()
    
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

