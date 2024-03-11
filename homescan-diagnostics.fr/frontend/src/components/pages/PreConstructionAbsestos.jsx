import { useGetPreConstructionAbsestosQuery } from "../../slices/ApiSlice"

export default function PreConstructionAsbestos() {
    const { data, isLoading} = useGetPreConstructionAbsestosQuery()
    
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
