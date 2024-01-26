import { useGetAssetsQuery } from "../../slices/ApiSlice"

export default function Assets() {
    const { data, isLoading} = useGetAssetsQuery()
    
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
