import { useGetPreRentQuery } from "../../slices/ApiSlice"

export default function PreRent() {
    const { data, isLoading} = useGetPreRentQuery()
    
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
