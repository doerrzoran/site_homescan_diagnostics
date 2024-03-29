import { useGetAssetsQuery } from "../../slices/ApiSlice"

export default function Assets() {
    const { data, isLoading} = useGetAssetsQuery()
    
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
