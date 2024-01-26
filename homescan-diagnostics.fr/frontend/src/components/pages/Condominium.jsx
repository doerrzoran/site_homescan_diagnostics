import { useGetCondominiumQuery } from "../../slices/ApiSlice"

export default function Condominium() {
    const { data, isLoading} = useGetCondominiumQuery()
    
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
