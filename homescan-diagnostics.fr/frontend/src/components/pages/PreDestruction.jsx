import { useEffect } from "react"
import { useGetPreDestructionQuery } from "../../slices/ApiSlice"

export default function PreDestruction() {
    const { data, isLoading} = useGetPreDestructionQuery()

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
