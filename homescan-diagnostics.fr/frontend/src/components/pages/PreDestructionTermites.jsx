import { useEffect } from "react"
import { useGetPreDestructionTermitesQuery } from "../../slices/ApiSlice"

export default function PreDestructionTermites() {
    const { data, isLoading} = useGetPreDestructionTermitesQuery()

    useEffect(() => {
        console.log(data)
    })
    
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
