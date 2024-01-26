import { useGetPreDestructionQuery } from "../../slices/ApiSlice"

export default function PreDestruction() {
    const { data, isLoading} = useGetPreDestructionQuery()
    
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
