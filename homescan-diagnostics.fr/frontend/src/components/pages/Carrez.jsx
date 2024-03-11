import { useGetCarrezQuery } from "../../slices/ApiSlice"

export default function Carrez() {
    const { data, isLoading} = useGetCarrezQuery()
    
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
