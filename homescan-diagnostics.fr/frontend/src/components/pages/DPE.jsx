import { useGetDPEQuery } from "../../slices/ApiSlice"

export default function DPE() {
    const { data, isLoading} = useGetDPEQuery()
    
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
